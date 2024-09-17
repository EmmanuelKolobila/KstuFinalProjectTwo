<?php
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>ksTU Help Desk Notice Page</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
		<script src="js/bootstrap.min.js"></script>
<style type="text/css">
	#idlogo{
		height: 20px;
		border-radius: 20px;
	}
</style>
	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background:; border: 1px solid blue; height: ;">
  <!-- This is first header -->
  <div class="container">

  <ul class="nav navbar-nav navbar-left">
    <li><a href=""> <img src="img/c10.jpg"> </a></li>
    <li><a href="../onlineproject/index.php"><strong>Back To Main Page</strong></a></li>
    <li><a href="../partof/index.html"><strong>Back To Help Page</strong></a></li>
    <li><a href="index.php"><strong>Online Notice Board</strong></a></li>


	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>



	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>

	</ul>




<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>



</div>


</nav>

<div class="container-fluid" style="border: 1px solid red;">
	<!-- slider -->
<div style="margin-top: 70px;" id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
 	
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

			<nav class="navbar navbar-default navbar-bottom" style="background:black">
  <div class="container">

  <ul class="nav navbar-nav navbar-left">
    <li>&copy; 2020 ONBS</li>

	</ul>




</div>
</nav>
<!-- footer-->

	</body>
</html>
