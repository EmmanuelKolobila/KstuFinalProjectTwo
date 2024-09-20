<?php
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
			
 
<header style="background-color: red!important; margin-bottom: ;" id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo" style="width: 5px!important;"><a href="index.php">KsTU</a></h1>
           <a href="index.php" class="logo"><img src="/onlineproject/assets/img/logo.png" alt="" style="width: 50px;height: 70px;border-radius: 10px;"></a> 

          <nav id="navbar" class="navbar">
            <ul>

              <li id=""><a style="font-size: 15px!important;" href="../onlineproject/index.php"><strong>Back To Main Page</strong></a></li>
              <li id=""><a style="font-size: 15px!important;" href="../partof/index.php"><strong>Back To Help Page</strong></a></li>
              <!-- <li><a style="font-size: 15px!important;" href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li> -->
              <!-- <li><a style="font-size: 15px!important;" href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li> -->
              <li><a style="font-size: 15px!important;" href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a style="font-size: 15px!important;" href="index.php?option=login"><span class="glyphicon glyphicon-log-in"> </span> Login</a></li>
              <!--  -->
              <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a> -->
               <!--  <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul> -->
              <!-- </li> -->
              
            </ul>
             <i class="bi bi-list mobile-nav-toggle">
            
            </i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header>




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
<!-- 
		<div class="col-sm-4">
			<div class="panel panel-default">
  <div class="panel-heading"><b>LATEST NEWS</b></div>
  <div class="panel-body">
    ... College now uses Google Apps for Education for fast and easy collaboration. The products that we use includes Gmail, Calendar, Docs and more.With Google Apps for Education, everything is automatically saved in the cloud – 100% powered by the web. This means that emails, documents, calendar and sites can be accessed – and edited – on almost any mobile device or tablet. Anytime, anywhere.
  </div>
</div>

		</div> -->
	</div>

</div>



<br/>
<br/>
<br/>
<br/>
<?php include '../partof/innercontent.php'?>

<!-- footer-->

	<?php include '../onlineproject/noticefooter.php'?>




</div>
</nav>
<!-- footer-->
<?php include '../onlineproject/script.php'?>
	</body>
</html>
