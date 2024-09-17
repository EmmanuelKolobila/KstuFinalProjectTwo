<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myproject";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['save'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$level = $_POST['level'];
$dep = $_POST['dep'];
$message = $_POST['message'];
if($name !=''||$email !='' ||$phone !='' ||$level !='' ||$dep !='' ||$message !='' ){

$sql = "INSERT INTO student_form (name, email, phone, level, dep, message)
VALUES ('$name', '$email', '$phone', '$level', '$dep', '$message')";

if(mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

mysqli_close($conn);
}
?>

