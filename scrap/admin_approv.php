<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<style>
		body {
			background-color: black;
			color: white;
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
		}
		th {
			background-color: #333;
			color: white;
		}
		tr:nth-child(even) {
			background-color: #555;
		}
		tr:hover {
			background-color: #444;
		}
        button {
	background-color: #333;
	border: none;
	color: #fff;
	cursor: pointer;
	padding: 30px;                  
}
	</style>
</head>
<body>
	<h1>Scrap Posts</h1>
	<table>
		<tr>
			<!-- <th>ID</th> -->
			<th>Title</th>
			<th>Description</th>
			<th>Price</th>
			<th>Image</th>
			<th>Approval Status</th>
			<!-- <th>Action</th> -->
		</tr>
		<?php
			// Connect to the database
            $host = 'localhost';
            $user = 'root';
            $password_db = '';
            $dbname = 'ww';
			$conn = mysqli_connect($host, $user, $password_db, $dbname);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			// Fetch data from the database
			$sql = "SELECT * FROM scrap_products";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					// echo "<td>" . $row["id"] . "</td>";
					echo "<td>" . $row["name"] . "</td>";
					echo "<td>" . $row["description"] . "</td>";
					echo "<td>" . $row["price"] . "</td>";
					echo "<td><img src='" . $row["image"] . "' height='100'></td>";
					echo "<td><button>Approve</button><button>Reject</button></td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='7'>No scrap posts found.</td></tr>";
			}
			mysqli_close($conn);
		?>
	</table>
</body>
</html>
