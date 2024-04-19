<?php
// Database configuration
$servername = "localhost"; // or your database host address
$username = ""; // your database username
$password = ""; // your database password
$dbname = "project"; // your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close connection (optional, as PHP automatically closes the connection at the end of the script)
$conn->close();
?>
