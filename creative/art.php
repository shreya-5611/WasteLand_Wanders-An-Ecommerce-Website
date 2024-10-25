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
   
    $product_name = $_POST['product-name'];
    $product_description = $_POST['product-description'];
    $product_price = $_POST['product-price'];
    $product_image = $_POST['product-image'];
    
  
    // Prepare a SQL query to insert the data into the inquiry table
    $sql = "INSERT INTO creative_products (name, description, price, image)
    VALUES ('$product_name', '$product_description', '$product_price', '$product_image')";
    if ($conn->query($sql) === TRUE) {
        header('Location:artist.html');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    ?>
    
  
  