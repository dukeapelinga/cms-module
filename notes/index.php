<?php 
	
	// $currentdate = date ("M j, Y g:i:s a");
	// $cd = date ("d/m/y");
	// echo "Hello $cd <br>";		
	// $printeValue = print "Good Afternoon, Current date is $currentdate";
	// echo "<br> $printeValue";
	// $a = 5;
	// $b = 4;
	// $c = $a + $b;
	// $name = "Duke";
	// echo "the sum of $c <br>";
	// echo gettype($name)."<br>";
	// settype($a, "float");
	// echo gettype($a)."<br>";
	// echo intval($b)."<br>";

// ---------------------------------------------------

// $p1 = 35;
// $p2 = 44;
// $p3 = 67;

// if ($p1 > $p2 && $p1 > $p3) {
// 	echo "p1 u is da oldest $p1";
// } 
// else if ($p2 > $p1 && $p2 > $p3) {
// 	echo "p2 u is da oldest $p2";
// }
// else if ($p3 > $p2 && $p3 > $p1) {
// 	echo "p3 u is da oldest $p3";
// }

// ------------------------------------------

// $p1name = "Duke";
// $p1age = 23;
// $p2name = "Hoe";
// $p2age = 30;

// if ($p1age > $p2age) {
// 	echo "$p1name is older than $p2name";
// }
// else if ($p2age > $p1age) {
// 	echo "$p2name is older than $p1name";
// }

// -----------------------------

// $word = "topspot";

// if ($word == strrev($word)) {
// 	echo "$word is a Palindrome word";
// } else {
// 	echo "$word is not a Palindrome word";
// }
// echo "<br>" , var_dump($word);
// echo "<br>";

// // nested FOR loop
// for ($i = 0; $i <= 5; $i++) {
// 	for ($j=0; $j<=3; $j++) {
// 		echo "$i, $j <br>";
// 	}
// }
// echo "<br>";

// -----------------------------------------

// for ($i = 0; $i < 50; $i++) {
// 	for ($j = 0; $j <= $i; $j++) {
// 		echo "*\t";
// 	}
// 	echo "<br>";
// }

// ------------------ Binary? ------------------

// $x = 4;
// $y = 3;
// $p = ($x > $y)? $x : $y;
// echo $p;


// --------------------------------------------------
// ------------------------------ DAY 2 ------------------------------
// -------- method to show the array ------------

// $mark = array(89,78,90,91,82,96,85,75);
// echo $mark[0];

// echo "<br>";

// $m = 3;
// $n = array(65,77,80);
// for ($i = 0; $i < 3; $i++) {
// 	echo $n[$i] . "<br>";
// }

// print_r($n);

// echo "<br>";

// foreach ($n as $v) {
// 	echo $v . "<br>";
// }

// echo "<br>";

// ----------------- sorting array ----------------

// $a = array(5,3,1,4,2);
// $a = array("John","Jay","Josh","Janice");

// for ($i = 0; $i < 5; $i++) {
// 	for ($j = $i; $j < 5; $j++) {
// 		if ($a[$i] > $a[$j]) {
// 			$temp = $a[$i];
// 			$a[$i] = $a[$j];
// 			$a[$j] = $temp;
// 		}
// 	}
// }

// print_r($a);
// echo "<br>";
// rsort($a);
// print_r($a);


// echo "<br>";

// sort($mark);
// print_r($mark);

// --------------- nesting array -----------------

$student = array(
				array(
					"name" => "Duke",
					"mod1" => 87,
					"mod2" => 77
				),
				array(
					"name" => "Bryan",
					"mod1" => 70,
					"mod2" => 85
				),
			);
// print_r($student);
echo "<br>";
echo $student[1][name];
echo "<br>";

foreach ($student as $s) {
	foreach ($s as $key => $value) {
		echo "<pre> $key \t", "$value \n </pre>";
	}
}

echo "<br>";

foreach ($student as $s) {
	echo "Student: " . $s[name];
	echo "<br>";
	echo "Module One: " . $s[mod1];
	echo "<br>";
	echo "Module Two: " . $s[mod2];
	echo "<p>";
}

// ------------------------- do and while --------------

$i = 1;

// do {
// 	echo "$i<br>";
// 	$i++;
// } while ($i <= 10);

while ($i <= 10) {
	echo "$i Hello <br>";
	$i++;

	if ($i == 5) {
		break;
		echo "this wont work";
	} else {
		continue;
		echo "this sentence will not be printed";
	}
}

?>