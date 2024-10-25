<?php

// Get the email and password from the login form
$email = $_POST['email'];
$password = $_POST['password'];

// Connect to the MySQL database
$host = 'localhost';
$user = 'root';
$password_db = '';
$dbname = 'ww';
$conn = mysqli_connect($host, $user, $password_db, $dbname);

// Check if the connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Query the login table for the user's email and password
$sql = "SELECT * FROM signup WHERE Email='$email' AND Password='$password'";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if (!$result) {
    die('Invalid query: ' . mysqli_error($conn));
}

// Check if the user exists
if (mysqli_num_rows($result) == 1) {
    // Redirect the user to the home page
    header('Location:homepage.html');
    exit;
} else {
    // Display an error message
    echo 'Invalid user';
}

// Close the database connection
mysqli_close($conn);

?>
