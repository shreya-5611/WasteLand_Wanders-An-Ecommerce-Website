<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Admin Page</title>
  <link rel="stylesheet" type="text/css" href="adminmess.css">
</head>
<body>
  <h1>Inquiry Details</h1>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
      <?php
        // Connect to the database
        $host = 'localhost';
        $user = 'root';
        $password_db = '';
        $dbname = 'ww';

        $conn = mysqli_connect($host, $user, $password_db, $dbname); 
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        // Select all rows from the inquiry table
        $sql = "SELECT * FROM inquiry";
        $result = mysqli_query($conn, $sql);
        
        // Loop through each row and display the details in a table row
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["message"] . "</td>";
            echo"<td><button class='reply_button'>Reply</button></td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='3'>No results found</td></tr>";
        }
        
        // Close the database connection
        mysqli_close($conn);
      ?>
    </tbody>
  </table>
</body>
</html>
