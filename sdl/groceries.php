<?php

$dsn="mysql:dbname=supermarket";
$username="root";
$password="root";

try {
	$conn= new PDO($dsn,$username,$password);
	$conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
	    echo "connection failed:" . $e->getMessage();
	}
	$sql="SELECT ID, Name, Price FROM items WHERE ID < 3";
	echo "<ul>";
	try {
        $rows=$conn->query($sql);
        // print_r($rows);
        foreach ($rows as $row) {
        echo "<li>" . $row["Name"] . " is for: $" . $row["Price"] . ".</li>";
	}
	} catch (PDOException $e) {
	    echo "Query failed: " . $e->getMessage();
	}
	echo "</ul>";
	$conn=null;

?>