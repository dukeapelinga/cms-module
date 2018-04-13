<?php
// ----------------- Adding Record to DB with mySQLi Method-------------------

	$serverName = "localhost";
	$username = "root";
	$password = "root";
	$dbName = "supermarket";

	$conn = new mysqli($serverName, $username, $password, $dbName);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// form -----
	$sql1 = "INSERT INTO items (ID, Name, Price) VALUES ('$_POST[Id]', '$_POST[itemName]', '$_POST[itemPrice]')";

	// hardcode -----
	// $sql2 = "INSERT INTO items (ID, Name, Price) VALUES (8, 'Potato', 2.50)";

	if ($conn->query($sql1) === TRUE) {
		echo "Added Successfully";
	} else {
		echo "Error" . $sql . "<br>" . $conn->error;
	}

	// if ($conn->query($sql2) === TRUE) {
	// 	echo "<br>Added Successfully";
	// } else {
	// 	echo "Error" . $sql . "<br>" . $conn->error;
	// }

	$conn->close();

// ------------------- inserting record to DB with PDO Method ----------------

	// $dsn="mysql:dbname=supermarket";
	// $username="root";
	// $password="root";

	// try {
	// 	$conn= new PDO($dsn,$username,$password);
	// 	$conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 	} catch (PDOException $e) {
	// 	    echo "connection failed:" . $e->getMessage();
	// 	}

	// 	// hardcode 
	// 	$sql = "insert into items (ID, Name, Price) values (6, 'Beef', 6.80)";

	// 	// form
	// 	$sql = "insert into items (ID, Name, Price) values ('$_POST[Id]', '$_POST[itemName]', '$_POST[itemPrice]')";

	// 	$a = $conn->exec($sql);

	// 	if ($a == TRUE) {
	// 		echo "Success";
	// 	} else {
	// 		echo "Error" . $sql . "<br>" . $conn->error;
	// 	}

	// 	$conn=null;
?>