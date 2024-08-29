<?php

$host = "localhost";
$username = "root";
$password = "089297";
$dbname = "fitness_tracker_db";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
