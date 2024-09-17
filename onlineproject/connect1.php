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
	$program = $_POST['program'];
	$level = $_POST['level'];
	$studentnumber = $_POST['studentnumber'];
	$help = $_POST['help'];
	$was_the_problem_solved = $_POST['was_the_problem_solved'];

	$sql_query = "INSERT INTO comment(name,program,level,studentnumber,help,was_the_problem_solved)
	VALUES ('$name','$program','$level','$studentnumber','$help','$was_the_problem_solved')";

	if(mysqli_query($conn,$sql_query))
	{
		 echo "New details entered!!!!";
	}
	else 
	{
		echo "Error: " . $sql . "". mysqli_error($con);
	}
	mysqli_close($conn);
 }

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <link href="style.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/connect1.css">
  <link rel="stylesheet" type="text/css" href="css/userinterface.css">
</head>
<body>
	<div id="all">
		<div id="head_">
	    	<div id="headbox">
	      		<div id="logo"> <img src="images/logo.png" id="logoimg"> </div>
	      		<div id="discrib">KUMASI TECHNICAL UNIVERSITY ICT HELP DESK</div>
	      		<a href="comment.php" style="color: unset;"><div id="comment">BACK</div></a> 
	    	</div>
	  </div>
	  <div id="thebox">
	    <nav class="accordion arrows" style="border: 1px solid blue;">
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
	<span class="square square-tl"></span>
    <span class="square square-tr"></span>
    <span class="square square-bl"></span>
    <span class="square square-br"></span>
    <span class="star star1"></span>
    <span class="star star2"></span>
    <span class="star star1"></span>
    <span class="star star2"></span>
    <script src="script.js"></script>
</body>
</html> 