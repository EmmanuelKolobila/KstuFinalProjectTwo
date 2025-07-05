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
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons -->
	 <link href="../onlineproject/assets/img/logo.png" rel="icon">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

 	 <!-- <link href="../../onlineproject/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
 	 <link rel="stylesheet" type="text/css" href="../../onlineproject/css/home.css"> -->

    <title>KsTU Student Problem </title>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="../partof/css/half-slider.css" rel="stylesheet">
</head>


<body>
  <?php include 'top.php'?>


<div id="admin_login" class="container mt-5">
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
    <button style="margin-bottom: 200px; " class="btn btn-primary" name="login">Login</button>
  </form>
</div>


    
<?php //include '../onlineproject/partofheader.php'?>
<?php //include '../partof/top.php'?>
 


    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../partof/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../partof/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carouse l-->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>
    <?php //include '../onlineproject/script.php'?>
    <?php include 'down.php'?>
    <?php// include '../onlineproject/footer.php'?>

</html>
