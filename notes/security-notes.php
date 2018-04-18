<?php 

// global variables

echo $_SERVER['PHP_SELF']; //filename currently executing script
echo "<br>";
echo $_SERVER['SERVER_NAME']; 
echo "<br>";
echo $_SERVER['HTTP_HOST']; 
echo "<br>";
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT']; //browser details
echo "<br>";
echo "<br>";
echo $_SERVER['SCRIPT_NAME']; 

?>

<!-- ********************************************* -->

<br>
<br>

<!-- PHP_SELF prints whatever value u inputed on the same page -->
<!-- htmlspecialchars use to prevent getting hacked -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
	<label>Enter Number: </label>
	<input type="text" name="enteredNumber">
	<br><br>
	<button type="submit">Submit</button>
</form>

<?php 
	echo $_POST['enteredNumber'];
?>

<br>
<!-- ************************************************ -->
<br>

<!-- this is using database to get data -->
<!-- enter id that u have on ur database and when u submit the value/record will show. -->
<form method="POST" action="">
	<label>Enter ID: </label>
	<input type="text" name="enteredID">
	<br><br>
	<button type="submit">Submit</button>
</form>

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
	$sql="SELECT * FROM items WHERE ID = $_POST[enteredID]" ;
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








