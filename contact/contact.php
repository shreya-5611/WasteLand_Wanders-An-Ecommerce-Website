<?php
// Set up a connection to the database
$host = 'localhost';
$user = 'root';
$password_db = '';
$dbname = 'ww';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$conn = mysqli_connect($host, $user, $password_db, $dbname);

// Check if the connection was successful
if ($conn->connect_error) 
  die("Connection failed: " . $conn->connect_error);
}

    // Get the user's name, email, and message from the form
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
  
    // Prepare a SQL query to insert the data into the inquiry table
    $sql = "INSERT INTO inquiry (name, email, message) VALUES ('$name', '$email','$message')";
    if ($conn->query($sql) === TRUE) {
        header('Location:contact2.html');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    ?>
    
  
  