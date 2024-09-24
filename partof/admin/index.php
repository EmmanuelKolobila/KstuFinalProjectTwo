<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=md5($_POST['password']);
$ret=mysqli_query($bd, "SELECT * FROM admin WHERE username='$username' and password='$password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="change-password.php";//
$_SESSION['alogin']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['errmsg']="Invalid username or password";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KsTU | Student problem Admin login</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link href="../../onlineproject/assets/img/logo.png" rel="icon">
	<link rel="stylesheet" href="css/overwrite.css">
	<link href="../../onlineproject/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="myboot/dist/css/bootstrap-grid.min.css"> -->
	<!-- <link rel="stylesheet" href="myboot/dist/js/bootstrap.min.js"> -->

		<!-- hh -->
		<link href="../../onlineproject/assets/css/style.css" rel="stylesheet">
    <link href="../../onlineproject/assets/css/style-responsive.css" rel="stylesheet">
	<!-- boostrap link -->
	<link href="../../onlineproject/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<!-- where to find bacground image -->
</head>
<style>
	/* #headcon{
		background-color: red;
	} */
</style>
<body>

	<?php include '../../onlineproject/partofadminheader.php'?>

	<div class="wrapper" id="innercon">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4" id="innerform">
					<form class="form-vertical" method="post" id="theform">
						<div class="module-head"id="signin">
							<h3 >Admin Sign In</h3>
						</div>
						<span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputEmail" name="username" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
						<input class="span12" type="password" id="inputPassword" name="password" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class=" pull-center" id="btn" name="submit">Login</button>
									
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<?php include '../../onlineproject/footer.php'?>
	<!-- <?php // include '../../onlineproject/script.php'?> -->

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

</body>