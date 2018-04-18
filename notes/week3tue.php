<?php 

	$serverName = "localhost";
	$username = "root";
	$password = "root";
	$dbName = "supermarket";

	$conn = new mysqli();

	echo "Connected... <br>";

	if ($conn->connect_error) {
		die ("Connection Failed: " . $conn->connect_error);
	}

	$sql1 = "SELECT * FROM items";
	$result = $conn->query($sql1);

	if ($result->Ret_Date < ($result->Bor_Date + 10)) {
		$sql2 = "update items set Status='Good'";
	}

	if ($conn->query($sql2) === TRUE) {
		echo "Record Updated.... <br>";
	} else {
		echo "Request Denied.... <br>";
	}


?>
