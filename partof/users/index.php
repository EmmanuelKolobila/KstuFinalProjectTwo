<?php
session_start();
error_reporting(0);
include("includes/config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($bd, "SELECT * FROM users WHERE userEmail='".$_POST['username']."' and password='".md5($_POST['password'])."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="change-password.php";//
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($bd, "insert into userlog(uid,username,userip,status) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','$status')");
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['login']=$_POST['username'];	
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
mysqli_query($bd, "insert into userlog(username,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$errormsg="Invalid username or password";
$extra="login.php";

}
}



if(isset($_POST['change']))
{
   $email=$_POST['email'];
    $contact=$_POST['contact'];
    $password=md5($_POST['password']);
$query=mysqli_query($bd, "SELECT * FROM users WHERE userEmail='$email' and contactNo='$contact'");
$num=mysqli_fetch_array($query);
if($num>0)
{
mysqli_query($bd, "update users set password='$password' WHERE userEmail='$email' and contactNo='$contact' ");
$msg="Password Changed Successfully";

}
else
{
$errormsg="Invalid email id or Contact no";
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
	<!-- main stayling  -->
	<title>KsTU Student Problem Login</title>
   

    <title>KsTU STUDENT PROBLEM | User Login</title>

	<!-- Favicons -->
	<link href="../../onlineproject/assets/img/logo.png" rel="icon">
 	
        <!--linear icon css-->
		<link rel="stylesheet" href="ass/assets/css/linearicons.css">

<!--animate.css-->
<link rel="stylesheet" href="ass/assets/css/animate.css">

<!--flaticon.css-->
<link rel="stylesheet" href="ass/assets/css/flaticon.css">

<!--slick.css-->


<!--style.css-->
<!-- <link rel="stylesheet" href="ass/assets/css/style.css"> -->
<link rel="stylesheet" href="assets/css/UloginOverWrite.css">

<!--responsive.css-->

    <link href="assets/css/style.css" rel="stylesheet">
  
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script type="text/javascript">
function valid()
{
 if(document.forgot.password.value!= document.forgot.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.forgot.confirmpassword.focus();
return false;
}
return true;
}
</script>
  </head>
  

  <body>
  <?php include 'top.php'?>
  <!-- <section id="thisback" class="wlcome-hero"> -->
  <!-- <div class="container"> -->
 

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <!-- <div id="login-page"> -->
	  	<!-- <div class="container"> -->
	  	
		      <form class="form-login" name="login" method="post" style="margin-top: px">
		        <h2 class="form-login-heading" id="loginheading">sign in now</h2>
		        <p style="padding-left:4%; padding-top:2%;  color:red">
		        	<?php if($errormsg){
echo htmlentities($errormsg);
		        		}?></p>

		        		<p style="padding-left:4%; padding-top: px;  color:green">
		        	<?php if($msg){
echo htmlentities($msg);
		        		}?></p>

		        <div class="login-wrap" style="rgin-top: 5px">
		            <input type="text" class="form-control" name="username" placeholder="Email" id="email" required autofocus>
		            <br>
		            <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
		
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" id="submit" name="submit" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		           </form>
		            <div class="registration" id="">
		                Don't have an account yet?<br/>
		                <a class="" href="registration.php">
		                    Create an account
		                </a>
		            </div>
		
		        </div>
		
		          <!-- Modal -->
		           <form class="form-login" name="forgot" method="post">
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your details below to reset your password.</p>
<input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control" required><br >
<input type="text" name="contact" placeholder="contact No" autocomplete="off" class="form-control" required><br>
 <input type="password" class="form-control" placeholder="New Password" id="password" name="password"  required ><br />
<input type="password" class="form-control unicase-form-control text-input" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword" required >

		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="submit" name="change" onclick="return valid();">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		          </form>
		
		      	  	
	  	
	  	<!-- </div> -->
	  <!-- </div> -->

	<!-- </div> -->

		<!-- </section> -->

		<!-- <script src="ass/assets/js/jquery.js"></script> -->
        
        <!--modernizr.min.js-->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> -->
		<!--  -->
		<!--bootstrap.min.js-->
        <!-- <script src="ass/assets/js/bootstrap.min.js"></script> -->
		
		<!-- bootsnav js -->
		<!-- <script src="ass/assets/js/bootsnav.js"></script> -->

        <!--feather.min.js-->
        <!-- <script  src="ass/assets/js/feather.min.js"></script> -->

        <!-- counter js -->
		<!-- <script src="ass/assets/js/jquery.counterup.min.js"></script> -->
		<!-- <script src="ass/assets/js/waypoints.min.js"></script> -->

        <!--slick.min.js-->
        <!-- <script src="ass/assets/js/slick.min.js"></script> -->

		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> -->
		     
        <!--Custom JS-->
        <!-- <script src="ass/assets/js/custom.js"></script> -->

	<?php include 'down.php'?>


  </body>
  
</html>
