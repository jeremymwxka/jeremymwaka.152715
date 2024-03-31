<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "bmw_db";
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$email = $_POST["email"];
$password = $_POST["password"];

// Check user credentials
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "Login successful!";
} else {
    echo "Invalid email or password";
}

// Close connection
$conn->close();
?>
