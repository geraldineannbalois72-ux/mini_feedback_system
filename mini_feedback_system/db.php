<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "feedback_system";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
die("Database connection failed. Please try again later.");
}
$conn->set_charset("utf8mb4");
?>
