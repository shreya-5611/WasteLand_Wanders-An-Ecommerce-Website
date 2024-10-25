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
   
    $email = $_POST["email"];
    $payment_method= $_POST["payment_method"];
    $card_no = $_POST["card_no"];
    $expiry=$_POST["expiry"];
    $CVV=$_POST["CVV"];
    
    // Prepare a SQL query to insert the data into the inquiry table
    $sql = "INSERT INTO payment (email,payment_method,card_no,expiry,CVV) VALUES ('$email,','$paymet_method','$card_no','$expiry','$CVV')";
    if ($conn->query($sql) === TRUE) {
        header('Location:../finall/final.html');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    ?>
    
  
  