<?php
// Establish database connection (adjust these values according to your database configuration)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "get_in_touch";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the SQL statement
// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO contact_us (Your_Name, email, Message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $Your_Name, $email, $Message);


// Set parameters and execute
$Your_Name = $_POST['Your_Name'];
$email = $_POST['email'];
$Message = $_POST['Message'];

if ($stmt->execute()) {
    // Data insertion successful, redirect to index.php
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
// Close statement and connection
$stmt->close();
$conn->close();


?>