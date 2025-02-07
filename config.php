<?php
$servername = "localhost"; // Database host
$username = "root"; // Database username
$password = "12345678"; // Database password
$dbname = "cargo_management"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>