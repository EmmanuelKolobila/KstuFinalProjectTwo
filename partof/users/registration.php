<?php
include('includes/config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$contactno=$_POST['contactno'];
	$status=1;
	$query=mysqli_query($bd, "insert into users(fullName,userEmail,password,contactNo,status) values('$fullname','$email','$password','$contactno','$status')");
	$msg="Registration successfull. Now You can login !";
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
	 <link href="../../onlineproject/assets/img/logo.png" rel="icon">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	 

    <title>KsTU | Student Problem Registration</title>
 

    	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
  </head>

  <body>
	 
  <?php include 'top.php'?>
	  <!-- <div id="login-page" > -->
	  	<div class="" style="order: 1px solid red; eight: 500px">
	  	
		      <form class="form-login" method="post" style="margin-top: -1px; height: 500px">
		        <h2 class="form-login-heading" id="loginheading">User Registration</h2>
		        <p style="padding-left: 1%; color: green">
		        	<?php if($msg){
echo htmlentities($msg);
		        		}?>


		        </p>
		        <div class="login-wrap" style="argin-bottom: 80px" i>
					<div>
						<input type="text" class="form-control" placeholder="Full Name" name="fullname" id="fullname" required="required" autofocus>
						<br>
						<input type="email" class="form-control" placeholder="Email" id="email" onBlur="userAvailability()" name="email" required="required">
						<span id="user-availability-status1" style="font-size:12px;"></span>
						<br>
					</div>

					<div>
						<input type="password" class="form-control" placeholder="Password" required="required" name="password"id="password"><br >
						<input type="text" class="form-control" maxlength="10" id="contactno" name="contactno" placeholder="Contact no" required="required" autofocus>
						<br>
					</div>
		         
		            <button class="btn btn-theme btn-block"  type="submit" name="submit" id="submit"><i class="fa fa-user"></i> Register</button>
		            <hr>
		            
		            <div class="registration" id="registration">
		                Already Registered<br/>
		                <a class="" href="index.php">
		                   Sign in
		                </a>
		            </div>
		
		        </div>
		
		      
		
		      </form>	  	
	  	
	  	</div>
	  <!-- </div> -->
	 
	  <?php include 'down.php'?>
<!-- <script src="ass/assets/js/jquery.js"></script> -->
</html>
