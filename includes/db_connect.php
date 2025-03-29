<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "gym_db"; // Change this to your actual DB name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>