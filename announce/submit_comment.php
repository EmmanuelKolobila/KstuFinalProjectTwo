<?php
session_start();
$conn = new mysqli("localhost", "root", "", "school_project");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $announcement_id = (int)$_POST['announcement_id'];
    $name = $conn->real_escape_string($_POST['student_name']);
    $comment = $conn->real_escape_string($_POST['comment']);

    $conn->query("INSERT INTO comments (announcement_id, student_name, comment) 
                  VALUES ($announcement_id, '$name', '$comment')");
}

header("Location: announcements.php");
exit();
