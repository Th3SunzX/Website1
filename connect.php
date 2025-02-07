<?php
$servername = "localhost"; // Change if using a remote server
$username = "root"; // Default for XAMPP/MAMP, change if needed
$password = "12345678"; // Default for XAMPP/MAMP, change if your database has a password
$dbname = "cargo_management"; // Database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to UTF-8 (optional but recommended)
$conn->set_charset("utf8");

?>