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
	 <!-- end -->
	 <!-- Favicons -->
	 <link href="../../onlineproject/assets/img/logo.png" rel="icon">
 	 <!-- <link href="../../onlineproject/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
 	 <link rel="stylesheet" type="text/css" href="../../onlineproject/css/home.css"> -->

    <title>KsTU | Student Problem Registration</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
	

	  <!--font-awesome.min.css-->
	  <link rel="stylesheet" href="ass/assets/css/font-awesome.min.css">

<!--linear icon css-->
<link rel="stylesheet" href="ass/assets/css/linearicons.css">

<!--animate.css-->
<link rel="stylesheet" href="ass/assets/css/animate.css">

<!--flaticon.css-->
<link rel="stylesheet" href="ass/assets/css/flaticon.css">

<!--slick.css-->
<link rel="stylesheet" href="ass/assets/css/slick.css">
<link rel="stylesheet" href="ass/assets/css/slick-theme.css">

<!--bootstrap.min.css-->
<link rel="stylesheet" href="ass/assets/css/bootstrap.min.css">

<!-- bootsnav -->
<link rel="stylesheet" href="ass/assets/css/bootsnav.css" >	

<!--style.css-->
<link rel="stylesheet" href="ass/assets/css/style.css">

<!--responsive.css-->
<link rel="stylesheet" href="ass/assets/css/responsive.css">
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
	  <!--welcome-hero start -->
	  <section id="thisback"class="lcome-hero">
			<div class="container">
  <?php include '../../onlineproject/partofregisterheader.php'?>
	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="post">
		        <h2 class="form-login-heading">User Registration</h2>
		        <p style="padding-left: 1%; color: green">
		        	<?php if($msg){
echo htmlentities($msg);
		        		}?>


		        </p>
		        <div class="login-wrap" style="margin-bottom: 80px">
		         <input type="text" class="form-control" placeholder="Full Name" name="fullname" required="required" autofocus>
		            <br>
		            <input type="email" class="form-control" placeholder="Email" id="email" onBlur="userAvailability()" name="email" required="required">
		             <span id="user-availability-status1" style="font-size:12px;"></span>
		            <br>
		            <input type="password" class="form-control" placeholder="Password" required="required" name="password"><br >
		             <input type="text" class="form-control" maxlength="10" name="contactno" placeholder="Contact no" required="required" autofocus>
		            <br>
		            
		            <button class="btn btn-theme btn-block"  type="submit" name="submit" id="submit"><i class="fa fa-user"></i> Register</button>
		            <hr>
		            
		            <div class="registration">
		                Already Registered<br/>
		                <a class="" href="index.php">
		                   Sign in
		                </a>
		            </div>
		
		        </div>
		
		      
		
		      </form>	  	
	  	
	  	</div>
	  </div>
	  </div>

</section><!--/.welcome-hero-->
<!--welcome-hero end -->
	<!-- Include all js compiled plugins (below), or include individual files as needed -->

<script src="ass/assets/js/jquery.js"></script>

<!--modernizr.min.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

<!--bootstrap.min.js-->
<script src="ass/assets/js/bootstrap.min.js"></script>

<!-- bootsnav js -->
<script src="ass/assets/js/bootsnav.js"></script>

<!--feather.min.js-->
<script  src="ass/assets/js/feather.min.js"></script>

<!-- counter js -->
<script src="ass/assets/js/jquery.counterup.min.js"></script>
<script src="ass/assets/js/waypoints.min.js"></script>

<!--slick.min.js-->
<script src="ass/assets/js/slick.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <!-- <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script> -->

	<?php include '../../onlineproject/loginheader.php'?>
	<?php include '../../onlineproject/footer.php'?>
  </body>
</html>
