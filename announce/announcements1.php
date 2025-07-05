<?php
$conn = new mysqli("localhost", "root", "", "school_project"); // update as needed

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Pagination setup
$limit = 5;
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$start = ($page - 1) * $limit;

// Filters
$keyword = $_GET['search'] ?? '';
$class = $_GET['class'] ?? '';
$department = $_GET['department'] ?? '';

$condition = "1=1";
$params = [];
$types = "";

// Apply filters
if ($keyword) {
    $condition .= " AND (title LIKE ? OR message LIKE ?)";
    $params[] = "%$keyword%";
    $params[] = "%$keyword%";
    $types .= "ss";
}
if ($class) {
    $condition .= " AND class LIKE ?";
    $params[] = "%$class%";
    $types .= "s";
}
if ($department) {
    $condition .= " AND department LIKE ?";
    $params[] = "%$department%";
    $types .= "s";
}

// Count total rows
$count_sql = "SELECT COUNT(*) as total FROM announcements WHERE $condition";
$count_stmt = $conn->prepare($count_sql);
if ($params) $count_stmt->bind_param($types, ...$params);
$count_stmt->execute();
$total = $count_stmt->get_result()->fetch_assoc()['total'];
$totalPages = ceil($total / $limit);

// Fetch announcements
$fetch_sql = "SELECT * FROM announcements WHERE $condition ORDER BY created_at DESC LIMIT ?, ?";
$params[] = $start;
$params[] = $limit;
$types .= "ii";
$fetch_stmt = $conn->prepare($fetch_sql);
$fetch_stmt->bind_param($types, ...$params);
$fetch_stmt->execute();
$result = $fetch_stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>School Announcements</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 
 <style>
    body {
      background: #f4f7fa;
      font-family: Arial, sans-serif;
    }
    .announcement-card {
      background: #fff;
      border-left: 5px solid #007bff;
      padding: 15px 20px;
      margin-bottom: 15px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .date {
      font-size: 0.9rem;
      color: #666;
    }
    .no-announcement {
      text-align: center;
      padding: 40px;
      color: #888;
      font-size: 1.2rem;
    }
  </style>
</head>
<body>

  <?php include 'top.php'?>
  
<div class="container mt-4">
  <h3 class="mb-4 text-primary">📢 School Announcements</h3>

  <!-- Filter Form -->
  <form method="GET" class="mb-4">
    <div class="row g-2">
      <div class="col-md-3">
        <input type="text" name="class" class="form-control" placeholder="Class (e.g., Form 3A)" value="<?= htmlspecialchars($class) ?>">
      </div>
      <div class="col-md-3">
        <input type="text" name="department" class="form-control" placeholder="Department (e.g., Science)" value="<?= htmlspecialchars($department) ?>">
      </div>
      <div class="col-md-4">
        <input type="text" name="search" class="form-control" placeholder="Search..." value="<?= htmlspecialchars($keyword) ?>">
      </div>
      <div class="col-md-2">
        <button class="btn btn-primary w-100">Filter</button>
      </div>
    </div>
  </form>

  <!-- Announcements -->
  <?php if ($result->num_rows > 0): ?>
    <?php while($row = $result->fetch_assoc()): ?>
      <div class="announcement-card">
        <h5 class="mb-1"><?= htmlspecialchars($row['title']) ?></h5>
        <p class="mb-2"><?= nl2br(htmlspecialchars($row['message'])) ?></p>
        <div class="date">🗓️ Posted on <?= date("F j, Y", strtotime($row['created_at'])) ?></div>

        <!-- Comments Form -->
        <form method="POST" action="post_comment.php" class="mt-3">
          <input type="hidden" name="announcement_id" value="<?= $row['id'] ?>">
          <div class="mb-2">
            <input type="text" name="student_name" class="form-control" placeholder="Your name" required>
          </div>
          <div class="mb-2">
            <textarea name="comment" class="form-control" placeholder="Your comment" required></textarea>
          </div>
          <button class="btn btn-sm btn-primary">Post Comment</button>
        </form>

        <!-- Comments List -->
        <?php
          $aid = $row['id'];
          $cresult = $conn->query("SELECT student_name, comment, created_at FROM comments WHERE announcement_id=$aid ORDER BY created_at DESC");
          if ($cresult->num_rows > 0):
        ?>
          <div class="mt-3">
            <strong>Comments:</strong>
            <ul class="list-group mt-2">
              <?php while($c = $cresult->fetch_assoc()): ?>
                <li class="list-group-item">
                  <strong><?= htmlspecialchars($c['student_name']) ?>:</strong>
                  <?= htmlspecialchars($c['comment']) ?><br>
                  <small class="text-muted"><?= date("F j, Y H:i", strtotime($c['created_at'])) ?></small>
                </li>
              <?php endwhile; ?>
            </ul>
          </div>
        <?php endif; ?>
      </div>
    <?php endwhile; ?>
  <?php else: ?>
    <div class="no-announcement">📝 No announcements at the moment.</div>
  <?php endif; ?>

  <!-- Pagination -->
  <?php if ($totalPages > 1): ?>
  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center mt-4">
      <?php if ($page > 1): ?>
        <li class="page-item">
          <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $page - 1])) ?>">Previous</a>
        </li>
      <?php endif; ?>

      <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
          <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $i])) ?>"><?= $i ?></a>
        </li>
      <?php endfor; ?>

      <?php if ($page < $totalPages): ?>
        <li class="page-item">
          <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $page + 1])) ?>">Next</a>
        </li>
      <?php endif; ?>
    </ul>
  </nav>
  <?php endif; ?>

</div>
</body>
</html>
