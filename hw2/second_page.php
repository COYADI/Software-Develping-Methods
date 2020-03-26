<!DOCTYPE html>
<html>
<head>
	<title>second page</title>
	<?php
		$host = "localhost";
		$username = "root";
		$password = "secure1234";
		$dbname = "order_application";
		
		// Create connection
		$conn = new mysqli($host, $username, $password, $dbname);
		
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}

		$ID = $_GET['ID']
		$result = mysqli_query($conn, "SELECT * FROM orders WHERE ID = '".$ID."'");
		$ans = mysqli_fetch_array($result);
	?>
</head>
<body>
	<table border="1" align="center">
		<tr>
			<td colspan="2">Order</td>
		</tr>
		<tr>
			<td>ID</td>
			<td>
				<?php
					echo $ans["ID"];
				?>
			</td>
		</tr>
		<tr>
			<td>customer</td>
			<td>
				<?php
					echo $ans["customer"];
				?>
			</td>
		</tr>
		<tr>
			<td>items</td>
			<td>
				<?php
					echo $ans["items"];
				?>
			</td>
		</tr>
	</table>
</body>
</html>