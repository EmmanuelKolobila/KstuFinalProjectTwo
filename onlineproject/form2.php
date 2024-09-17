<?php
$servername="localhost";
$username="root";
$password = '';
$database="myproject";

 $conn=mysqli_connect($servername,$username,$password,$database);
// $conn=mysqli_connect("localhost","root","","project");
//$conn = new mysqli("localhost","root","","project");

if(!$conn)
{
	die("connection Faild:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];

	$sql_query = "INSERT INTO form2(name,email,subject,message,phone)
	VALUES ('$name','$email','$subject','$message','$phone')";

	if(mysqli_query($conn,$sql_query))
	{
		 // echo "New details entered!!!!";
	}
	else 
	{
		echo "Error: " . $sql . "". mysqli_error($con);
	}
	mysqli_close($conn);
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IT CENTER</title>
  <link rel="stylesheet" type="text/css" href="css/userinterface.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  <link rel="stylesheet" type="text/css" href="css/header2.css">
    <link rel="stylesheet" type="text/css" href="css/connect1.css">
  <link rel="stylesheet" type="text/css" href="css/userinterface.css">
  <!-- java -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script> -->
  <!-- <link rel="stylesheet" type="text/css" href="css/style1.css"> -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"> -->

   <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/home.css">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style="aground-color: #111;">
  <?php include 'header2.php'?>

 		  <div id="thebox" style="margin-top: 90px; margin-bottom: 10px;">
	    <nav class="accordion arrows" style="order: 1px solid blue;">
	      <header class="box">
	        <label for="acc-close" class="box-title">RECORDS ADDED SUCCESSFULLY</label>
	      </header>
	      <input type="radio" name="accordion" id="cb1" />
	      <section class="box">
	        <label class="box-title" for="cb1">FOR YOU</label>
	        <label class="box-close" for="acc-close"></label>
	        <div class="box-content">Thanks for contacting help desk, see you later!!.</div>
	      </section>
	      <input type="radio" name="accordion" id="cb2" />
	      <section class="box">
	        <label class="box-title" for="cb2">Read me too</label>
	        <label class="box-close" for="acc-close"></label>
	        <div class="box-content">Help desk is there to help you solve all your queries, don't keep stack in your problems contact us always for help.</div>
	      </section>
	      <input type="radio" name="accordion" id="cb3" />
	      <section class="box">
	        <label class="box-title" for="cb3">Item</label>
	        <label class="box-close" for="acc-close"></label>
	        <div class="box-content">We acess student in thier portal problem, wifi problem, school fees problem and many more.</div>
	      </section>
	  
	      <input type="radio" name="accordion" id="acc-close" />
	    </nav>
	  </div>
	</div>
	<!-- <span class="square square-tl"></span>
    <span class="square square-tr"></span>
    <span class="square square-bl"></span>
    <span class="square square-br"></span>
    <span class="star star1"></span>
    <span class="star star2"></span>
    <span class="star star1"></span>
    <span class="star star2"></span>
    <script src="script.js"></script> -->
 <?php include "footer.php" ?>
  <!-- Vendor JS Files -->
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

  <!-- swiper -->

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>


<!-- for contract staff start-->
  
<!-- for contract staff end -->
</body>
</html>

