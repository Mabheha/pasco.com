<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hacker Attack Solution";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$organisation = $_POST['organisation'];
$location = $_POST['location'];
$city = $_POST['city'];
$hacked = $_POST['hacked'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Prepare and execute the SQL query
$stmt = $conn->prepare("INSERT INTO contacts (name, organisation, location, city, hacked, phone, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $name, $organisation, $location, $city, $hacked, $phone, $message);
$stmt->execute();

// Close statement and database connection
$stmt->close();
$conn->close();

// Redirect back to the HTML form
header("Location: contact_form.html");
exit();
?>