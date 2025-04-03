<?php
$servername = "localhost";  // Change if your database is hosted elsewhere
$username = "root";         // Default XAMPP user
$password = "";             // Default XAMPP password (empty)
$dbname = "users"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
