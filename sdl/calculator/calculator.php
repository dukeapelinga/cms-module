<?php 

$ch = date("g");
$cm = date("i");
$ampm = date("a");
$d = date("l");
$m = date("jS F, Y");

echo "It is " . $ch . ":" . $cm . $ampm . ", " . $d . ", the " . $m;

// if ($ch >= 5 && $ch <= 11 && $ampm == "pm") {
// 	echo "<br>";
// 	echo "good evening";
// } else if ($ch >= 5 && $ch <= 11 && $ampm == "am") {
// 	echo "<br>";
// 	echo "good morning";
// } else if ($ch >= 12 && $ch >= 5 && $ampm == "am") {
// 	echo "<br>";
// 	echo "goodnight";
// } else if ($ch >= 12 && $ch >= 5 && $ampm == "pm") {
// 	echo "<br>";
// 	echo "good afternoon";
// }

// if ($t >= 5 && $t <= 11) {
// 		echo "good morning";
// 	} else if ($t >= 12 && $t <= 17) {
// 		echo "good afternoon";
// 	} else if ($t >= 17 && $t <= 22) {
// 		echo "good evening";
// 	} else if ($t >= 22 && $t <= 5) {
// 		echo "goodnight";
// 	}

?>