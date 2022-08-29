<?php
$host = "localhost";
$userName = "fyrhp";
$password = "RTDE";
$dbName = "fyrhp";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>