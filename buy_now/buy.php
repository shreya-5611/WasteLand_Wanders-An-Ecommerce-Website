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
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_no = $_POST["phone_no"];
    $address_1=$_POST["address_1"];
    $address_2=$_POST["address_2"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $pin_code=$_POST['pin_code'];
  
    // Prepare a SQL query to insert the data into the inquiry table
    $sql = "INSERT INTO order1 (name, email,phone_no,address_1,address_2,city,state,pin_code) VALUES ('$name', '$email,','$phone_no','$address_1','$address_2','$city','$state','$pin_code')";
    if ($conn->query($sql) === TRUE) {
        header('Location:../payment/payment.html');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    ?>
    
  
  