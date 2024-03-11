<?php
// Database credentials
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = "password"; // Your MySQL password
$database = "bmw_db"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// Close connection
$conn->close();
?>
