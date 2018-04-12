<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php 
		$currentTime = date("g");
		$ampm = date("a");
		$year = date("Y");
		
		echo $currentTime;
		echo $ampm;

		if ($currentTime >= 5 && $currentTime <= 11 && $ampm == "pm") {
			echo "<br>";
			echo "good evening";
		} else if ($currentTime >= 5 && $currentTime <= 11 && $ampm == "am") {
			echo "<br>";
			echo "good morning";
		} else if ($currentTime >= 12 && $currentTime >= 5 && $ampm == "am") {
			echo "<br>";
			echo "goodnight";
		} else if ($currentTime >= 12 && $currentTime >= 5 && $ampm == "pm") {
			echo "<br>";
			echo "good afternoon";
		}

		// Leap Year
		
		echo "<p>";
        $leapYear = date('L', $year);

        if ($leapYear == 0){
            echo "This year is $year, therefore it is not a leap year.";
        } elseif ($leapYear == 1) {
             echo "This year is $year, therefore it is a leap year!";
        }
		
	?>
</body>
</html>