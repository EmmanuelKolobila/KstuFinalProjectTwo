<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "school_project");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['comment_id'], $_POST['reply'])) {
    $comment_id = (int)$_POST['comment_id'];
    $reply = $conn->real_escape_string($_POST['reply']);

    $conn->query("INSERT INTO comment_replies (comment_id, reply_text) VALUES ($comment_id, '$reply')");
}

header("Location: admin_dashboard.php");
exit();
