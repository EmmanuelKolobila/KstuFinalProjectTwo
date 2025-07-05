<?php
session_start();
$conn = new mysqli("localhost", "root", "", "school_project");

$err = "";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $res = $conn->query("SELECT * FROM announcementa_admin WHERE username='$username' AND password='$password'");
    if ($res->num_rows == 1) {
        $_SESSION['admin'] = $username;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        $err = "Invalid login credentials.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <h3 class="mb-3">🔐 Admin Login</h3>
  <?php if ($err): ?>
    <div class="alert alert-danger"><?= $err ?></div>
  <?php endif; ?>
  <form method="POST">
    <div class="mb-3">
      <input type="text" name="username" class="form-control" placeholder="Username" required>
    </div>
    <div class="mb-3">
      <input type="password" name="password" class="form-control" placeholder="Password" required>
    </div>
    <button class="btn btn-primary" name="login">Login</button>
  </form>
</div>
</body>
</html>
