<?php
// Replace these values with your actual database credentials
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "bmw_db";

// Create connection using PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if form data is received
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Prepare SQL statement with placeholders
        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $conn->prepare($sql);

        // Bind parameters with form data
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->bindParam(':email', $_POST['email']);
        // Hash the password for security (you should use a better hashing method in production)
        $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $stmt->bindParam(':password', $hashed_password);

        // Execute the prepared statement
        $stmt->execute();

        echo "New record created successfully";
    } else {
        echo "Error: Form data not received";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null; // Close the connection
?>
