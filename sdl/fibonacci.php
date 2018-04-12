<?php
  // Activity to produce fibonacci series with and without recursive function.

  echo "<br>";
  withoutRFunction();
  echo "<br>";
  withRFunction();
  
  function withoutRFunction () {
    $num1 = 0;  
    $num2 = 1;   

    echo "<h3> Without Recursive Function </h3>"; 
    // echo first two numbers first 0, 1,
    echo $num1 .', '. $num2 . ', ';  

    for ($i = 2; $i <= 20; $i++) {
      $num3 = $num2 + $num1;  

      echo $num3 . ', ';  
      
      $num1 = $num2;  
      $num2 = $num3;  
    }
  }
 
  function withRFunction () {
    echo "<h3> With Recursive Function </h3>"; 
    echo "0, 1, ";  

    function fibonacciSeries () {
      static $num1 = 0;
      static $num2 = 1;

      $num3 = $num2 + $num1;  

      echo $num3 . ", ";

      $num1 = $num2;  
      $num2 = $num3;  

    }
    // invoking function through a loop 20 times
    for ($f = 2; $f <= 20; $f++) {
      fibonacciSeries();
    }

  }
  

  


?>
