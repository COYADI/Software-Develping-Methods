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

$keyword = $_POST['keyword'];
$result = mysqli_query($conn, "SELECT * FROM orders WHERE customer = '".$keyword."'");
echo "<table>";

for($i = 1; $i <= mysqli_num_rows($result); $i++)
{
	$ans = mysqli_fetch_array($result);
	echo "<tr>";
	echo "<td><a href =./second_page.php?ID=".$ans["ID"].">".$ans["ID"]."</a></td>";
	echo "<td>".$ans["customer"]."</td>";
	echo "</tr>";
}
echo "</table>";