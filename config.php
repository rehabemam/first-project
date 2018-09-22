<?php
$servername = "localhost";
$username = "root";
$password = "marwa55";
$dbname = "wecare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>