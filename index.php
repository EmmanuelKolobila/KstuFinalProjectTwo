<?php
include('connection.php');
session_start();
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <title>vclass problem solve</title> -->
	<!-- <link rel="stylesheet" type="text/css" href="../onlineproject/css/vclass.css"> -->
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
	<link href="../onlineproject/assets/img/logo.png" rel="icon">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
   <!-- <link rel="stylesheet" type="text/css" href="css/header2.css">  -->



		<title>ksTU Help Desk Notice Page</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
		<script src="js/bootstrap.min.js"></script>



   <!-- Vendor CSS Files -->
  <link href="../onlineproject/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../onlineproject/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../onlineproject/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../onlineproject/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../onlineproject/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../onlineproject/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../onlineproject/assets/css/home.css">

  <!-- Template Main CSS File -->
  <link href="../onlineproject/assets/css/style.css" rel="stylesheet">

<style type="text/css">
	#idlogo{
		height: 20px;
		order-radius: 20px;

		#good{
			display: inline-block!important;
		}
		#heade{
			border-radius: initial!important;
		}
	}
</style>
</head>
<body>
	<?php include '../onlineproject/noticeheader.php' ?>

  <!-- my own work -->
 	<!-- 			<nav class="navbar navbar-default navbar-fixed-top" style="background:; border: 1px solid blue;">
   This is first header 
  <div class="container">

  <ul class="nav navbar-nav navbar-left">
    <li id=""><a href=""> <img src="img/c10.jpg"> </a></li>
    <li id=""><a href="../onlineproject/index.php"><strong>Back To Main Page</strong></a></li>
    <li id=""><a href="../partof/index.html"><strong>Back To Help Page</strong></a></li>
    <li id=""><a href="index.php"><strong>Online Notice Board</strong></a></li>


	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>



	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>

	</ul>
 -->



<<!-- ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul> -->



</div>


</nav> 


<div class="container-fluid" style="border: 1px solid red;">
	<!-- slider -->
<div style="argin-top: 40px;" id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
 
	<div id="secondcon" style="margin-top: -2px!important;">
		<div class="text-effect-wrapper" >
        <h1 id="text" class="text" contenteditable>LOGGING INTO VCLASS</h1>
    </div>
      
      
	</div>
</div>
<!-- slider end-->
</div>

	
	<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php
		@$opt=$_GET['option'];

		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}

			else if($opt=="New_user")
			{
			include('registration.php');
			}


			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo "<h2><b>'WELCOME USER TO OUR ONLINE NOTICE BOARD'</b></h2>
		<i> <b> Join us today and get connected. Register now to get each and every updates of your college! </b></i>";
		}
		?>



		</div>
	<!-- container -->

		<div class="col-sm-4">
			<!-- <div class="panel panel-default">
  <div class="panel-heading"><b>LATEST NEWS</b></div>
  <div class="panel-body">
    ... College now uses Google Apps for Education for fast and easy collaboration. The products that we use includes Gmail, Calendar, Docs and more.With Google Apps for Education, everything is automatically saved in the cloud – 100% powered by the web. This means that emails, documents, calendar and sites can be accessed – and edited – on almost any mobile device or tablet. Anytime, anywhere.
  </div>
</div> -->

		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<!-- footer-->

	<?php include '../onlineproject/noticefooter.php' ?>
<!-- footer-->
	


	


	<!-- Vendor JS Files -->
  <script src="../onlineproject/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../onlineproject/assets/vendor/aos/aos.js"></script>
  <script src="../onlineproject/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../onlineproject/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../onlineproject/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../onlineproject/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../onlineproject/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../onlineproject/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../onlineproject/assets/js/main.js"></script>
    <spt src="assets/js/main.js"></sccriript>

  
</body>
</html>

