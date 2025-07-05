<?php
session_start();
$conn = new mysqli("localhost", "root", "", "school_project");

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

$msg = "";

// Handle new announcement
if (isset($_POST['add'])) {
    $title = $conn->real_escape_string($_POST['title']);
    $message = $conn->real_escape_string($_POST['message']);
    $class = $conn->real_escape_string($_POST['class']);
    $department = $conn->real_escape_string($_POST['department']);

    $conn->query("INSERT INTO announcements (title, message, class, department) VALUES ('$title', '$message', '$class', '$department')");
    $msg = "✅ Announcement added successfully!";
}

// Handle delete announcement
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $conn->query("DELETE FROM announcements WHERE id=$id");
    $msg = "🗑️ Announcement deleted.";
}

// Handle delete comment
if (isset($_GET['delete_comment'])) {
    $commentId = (int)$_GET['delete_comment'];
    $conn->query("DELETE FROM comments WHERE id = $commentId");
    $conn->query("DELETE FROM comment_replies WHERE comment_id = $commentId");
    $msg = "🗑️ Comment deleted.";
}

// Handle update announcement
if (isset($_POST['update'])) {
    $id = (int)$_POST['announcement_id'];
    $title = $conn->real_escape_string($_POST['title']);
    $message = $conn->real_escape_string($_POST['message']);
    $class = $conn->real_escape_string($_POST['class']);
    $department = $conn->real_escape_string($_POST['department']);

    $conn->query("UPDATE announcements SET title='$title', message='$message', class='$class', department='$department' WHERE id=$id");
    $msg = "✅ Announcement updated!";
}

// Fetch announcements
$announcements = $conn->query("SELECT * FROM announcements ORDER BY created_at DESC");

// Fetch comments with replies
$comments = $conn->query("SELECT c.*, r.reply_text FROM comments c LEFT JOIN comment_replies r ON c.id = r.comment_id ORDER BY c.created_at DESC");

// Fetch data for editing if in edit mode
$editData = null;
if (isset($_GET['edit'])) {
    $editId = (int)$_GET['edit'];
    $result = $conn->query("SELECT * FROM announcements WHERE id = $editId");
    if ($result && $result->num_rows > 0) {
        $editData = $result->fetch_assoc();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<!-- where to find bacground image -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/UloginOverWrite.css">
<link href="assets/css/style.css" rel="stylesheet">

	 <!-- Favicons -->
	 <link href="../onlineproject/assets/img/logo.png" rel="icon">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	 

    <title>KsTU | Student Problem Registration</title>
 


  </head>

  <body>
	 
  <?php// include 'top.php'?>

<div class="container mt-4">
  <h3>📢 Admin Dashboard</h3>
  <a href="logout.php" class="btn btn-sm btn-danger float-end">Logout</a>
  <div class="clearfix"></div>

  <?php if ($msg): ?>
    <div class="alert alert-success mt-3"><?= $msg ?></div>
  <?php endif; ?>

  <!-- Add/Update Announcement -->
  <div class="card mt-3 mb-4">
    <div class="card-header bg-primary text-white">
      <?= $editData ? 'Edit Announcement' : 'Add New Announcement' ?>
    </div>
    <div class="card-body">
      <form method="POST">
        <input type="hidden" name="announcement_id" value="<?= $editData['id'] ?? '' ?>">
        <div class="mb-2">
          <input type="text" name="title" class="form-control" placeholder="Title" required value="<?= $editData['title'] ?? '' ?>">
        </div>
        <div class="mb-2">
          <textarea name="message" class="form-control" placeholder="Message" required><?= $editData['message'] ?? '' ?></textarea>
        </div>
        <div class="row mb-2">
          <div class="col-md-6">
            <input type="text" name="class" class="form-control" placeholder="Target Class" value="<?= $editData['class'] ?? '' ?>">
          </div>
          <div class="col-md-6">
            <input type="text" name="department" class="form-control" placeholder="Target Department" value="<?= $editData['department'] ?? '' ?>">
          </div>
        </div>
        <button name="<?= $editData ? 'update' : 'add' ?>" class="btn btn-success">
          <?= $editData ? 'Update' : 'Add' ?> Announcement
        </button>
        <?php if ($editData): ?>
          <a href="admin_dashboard.php" class="btn btn-secondary ms-2">Cancel</a>
        <?php endif; ?>
      </form>
    </div>
  </div>

  <!-- All Announcements -->
  <h5>📃 All Announcements</h5>
  <?php while($row = $announcements->fetch_assoc()): ?>
    <div class="card mb-3">
      <div class="card-body">
        <h5><?= htmlspecialchars($row['title']) ?></h5>
        <p><?= nl2br(htmlspecialchars($row['message'])) ?></p>
        <div class="small text-muted">
          Class: <?= $row['class'] ?: 'All' ?> |
          Dept: <?= $row['department'] ?: 'All' ?> |
          Posted: <?= date("F j, Y", strtotime($row['created_at'])) ?>
        </div>
        <a href="?edit=<?= $row['id'] ?>" class="btn btn-sm btn-warning mt-2">Edit</a>
        <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Delete this announcement?')" class="btn btn-sm btn-danger mt-2">Delete</a>
      </div>
    </div>
  <?php endwhile; ?>

  <!-- Comments Review -->
  <h5 class="mt-5">🗨️ Student Comments</h5>
  <?php while($c = $comments->fetch_assoc()): ?>
    <div class="card mb-2">
      <div class="card-body">
        <p><strong><?= htmlspecialchars($c['student_name']) ?>:</strong> <?= htmlspecialchars($c['comment']) ?></p>
        <div class="text-muted small">For Announcement ID: <?= $c['announcement_id'] ?> | <?= date('F j, Y H:i', strtotime($c['created_at'])) ?></div>

        <?php if ($c['reply_text']): ?>
          <div class="alert alert-info mt-2">💬 Admin Reply: <?= htmlspecialchars($c['reply_text']) ?></div>
        <?php else: ?>
          <form method="POST" action="reply_comment.php" class="mt-2">
            <input type="hidden" name="comment_id" value="<?= $c['id'] ?>">
            <textarea name="reply" class="form-control mb-2" placeholder="Your reply to this comment" required></textarea>
            <button class="btn btn-sm btn-primary">Reply</button>
          </form>
        <?php endif; ?>

        <a href="?delete_comment=<?= $c['id'] ?>" onclick="return confirm('Delete this comment?')" class="btn btn-sm btn-danger mt-2">Delete Comment</a>
      </div>
    </div>
  <?php endwhile; ?>
</div>
	 
	  <?php include 'down.php'?>
<!-- <script src="ass/assets/js/jquery.js"></script> -->
</html>
        </body>
