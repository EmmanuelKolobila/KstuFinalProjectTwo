<?php 
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "finalproject";
$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");


if(!$db)
{
	die("connection Faild:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
	$name = $_POST['name'];
	$department = $_POST['department'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$sql_query = "INSERT INTO singlecontact(name,department,phone,message)
	VALUES ('$name','$department','$phone','$message')";

	if(mysqli_query($db,$sql_query))
	{
		  echo "New details entered!!!!";
	}
	else 
	{
		echo "Error: " . $sql . "". mysqli_error($db);
	}
	mysqli_close($db);
 }


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/about.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>About</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" type="text/css" href="css/home.css">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/home.css">

    <!-- Template Main CSS File -->
  <link href="assets/css/aboutstyle.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo" style="width: 5px!important;"><a href="index.php">KsTU</a></h1>
           <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" style="width: 50px;height: 70px;border-radius: 10px;"></a> 

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
              <li><a class="nav-link scrollto" href="about.php">About</a></li>
              <li><a class="nav-link scrollto" href="service.php">Services</a></li>
              <li><a class="nav-link scrollto " href="Workers.php">Workers</a></li>
              <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
              <li><a class="nav-link  " href="comment.php">Comment</a></li>
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
              <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
            </ul>
             <i class="bi bi-list mobile-nav-toggle">
            
            </i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header>
 <div id="abouthead" class="container-fliud p-5">
    <div id="aboutheadchildren">
    <!--  <div id="logo_n_name">
        <div id="logo"><img src="assets/images/logo.png" id="logoimg"> </div>
        <div id="name" class="">
          <div id="kstu" class="mt-2">KUMASI TECHNICAL UNIVERSITY</div>
          <div id="direct">I.C.T DIRECTORATE</div>
        </div>
      </div>
      <div id="home"><a href="index.php" style="text-decoration: unset!important; color: unset;">Home</a></div>
      <div id="vclass" style="margin-left: 2%;"><a href="vclass.php" style="text-decoration: none; color: unset; ">Vclass</a></div>
      <div id="wifi" style="margin-left: 2%;"><a href="wifi.php" style="text-decoration: none; color: unset; ">KsTU Wifi</a></div>
      <div id="comment" style="margin-top: 10px;">Comment</div>
      <div></div>  -->
    </div>
  </div>
  <div id="directhome" class="container-fliud p-5 text-center">
    <div id="_home" class="pt-2">CONTACT</div>
    <div id="_about" class="pb-3">KsTU I.C.T DIRECTORATE CONTACT</div>
  </div>

  <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
      <div class="container" >

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>LOCATION</h3>
              <address>KsTU MP-BLOCK BASEMENT</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">0540 323 877</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@KSTU.com</a></p>
            </div>
          </div>

        </div>

        <div class="form px-3 pb-4" id="formcontainer">
          <form action="" method="post" role="form" class="">
            <div id="put" class="text-center  pt-4 fs-5">
              PLEASE KINDLY FILL THIS FORM, IT HELPS US TO UPGRATE OUR SYSTEM
            </div>
            <div id="put" class="text-center  pb-4 fs-5">
              <b class="" style="color: #ca5757;">NOTE:</b> THIS FORM IS FOR EVERYONE
            </div>

            <div class="row">
              <!-- <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Full Name" required>
              </div> -->
               <!-- <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>  -->
            </div>

            <div class="row">
             
              
              <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Full Name" required>

              <input type="text" class="form-control" name="department" id="subject" placeholder="Department Name Optional" required>
              <input type="text" class="form-control mt-3" name="phone" id="subject" placeholder="Phone Number" required>
              </div>
              <div class="form-group col-md-6">
              <textarea class="form-control" name="message" rows="6" placeholder="What improvement do you want us to add to the system" required></textarea>
              </div>
            </div>


            <!-- <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Department" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Your Problen" required></textarea>
            </div> -->
            <div class="my-3">
              <!-- <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div> -->
            </div>
            <div  class="text-center" id="sendcon"><button class="py-3 px-5" id="button" type="submit" name="save">Send Message</button></div>
          </form>
          <!-- onclick="window.alert('Form submitted')" -->
        </div>

      </div>
    </section><!-- End Contact Section -->
  
  <?php include 'footer.php'?>

  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>