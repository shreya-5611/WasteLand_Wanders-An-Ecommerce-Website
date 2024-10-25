<?php
// Set up a connection to the database
$host = 'localhost';
$user = 'root';
$password_db = '';
$dbname = 'ww';

$conn = mysqli_connect($host, $user, $password_db, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the user input from the signup form
$name = $_POST["name"];
$address = $_POST["Address"];
$phone_no = $_POST["phone"];
$password = $_POST["password"];
$email = $_POST["email"];
$pincode = $_POST["pincode"];

// Insert the user details into the "signup" table
$sql = "INSERT INTO signup_artist (Name, Address, Phone_no, Password, Email, Pincode) VALUES ('$name', '$address', '$phone_no', '$password', '$email', '$pincode')";

if ($conn->query($sql) === TRUE) {
    header('Location:../login/home_after_login.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
