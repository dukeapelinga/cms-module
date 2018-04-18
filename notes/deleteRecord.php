<?php 
	$serverName = "localhost";
	$username = "root";
	$password = "root";
	$dbName = "supermarket";

	$conn = new mysqli($serverName, $username, $password, $dbName);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// form -----
	$sql1 = "DELETE FROM items WHERE id = $_POST[delete]";

	if ($conn->query($sql1) === TRUE) {
		echo "Deleted Successfully";
	} else {
		echo "Error" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>