<?php

    // DISPLAYING ERRORS IN PHP
        ini_set("display_errors", 1); // 1 means true.
        ini_set("display_startup_errors", 1);
        error_reporting(E_ALL);


    // FUNCTIONS
    
        // BASIC FUNCTION

            // // It like JavaScript but the parameters need a $ in front of it. 
            // function hello($y){
            //     echo "hello im inside a function, from $y <br>";
            // }

            // // Invoking the function like JavaScript with the argument.
            // hello("yoobee");
            // hello("Florence");


        // EXAMPLE OF GLOBAL AND LOCAL VARIABLES

            // // Function with variable local and global variables
            // localGlobaltest();

            // function localGlobaltest () {
            //     global $name; //by adding global in the front it can now be accessed locally. Just make sure you invoke the function before.
            //     $name = "Yoobee";

            //     echo "I am at the $name school <br>";
            // }

            // echo "$name <br>"; // Because of the 'global' in front of the $name variable inside the function, now it prints both echo commands. 

        
            // // Another example
            // $x = 5;

            // number();

            // function number () {
            //     global $x; 
            //     echo $x, "<br>"; //it takes the global variable of x= 5, therefore it echos 5
            //     ++$x; //Continuing the function it adds 1 to $x
            // }

            // echo "the value of x is now: $x <br>"; //because the $x is redefined in the function and the function adds one to the $x so... $x is now 6


        // EXAMPLE OF STATIC VARIABLES
                
            // staticexample(); 
                
            // function staticexample () {
            //     static $n = 0; // By adding 'static' the code remembers the value everytime it changes.

            //     echo "the value of n inside the function is $n <br>"; 
            //     ++$n;
            // }

            // // Because this is re invoking the function and it takes the new value that is remebered in the function. 
            // staticexample(); //meaning $n = 1 this time the function runs
            // staticexample(); //meaning $n = 2 this time the function runs


        // EXAMPLE OF RECUSSIVE FUNCTION

            // $n = 5;
            
            // // A function to add break tags
            // breakSpace();
            // function breakSpace () {
            //     echo "<br>";
            // }
            
            // function mathStuff ($num) {
            //     if ($num < 2) {
            //          return 1; //when the funtion is finished the value output is 1.
            //     } else {
            //          return ($num * mathStuff($num - 1)); //depending on argument value, it is times by itself again depending on argument by reinvoking the function and -1 everytime.
                        // Technically the function is asking, $num = 5. Therefore it pretty much 5*5= 25*5= 125-5 = 120. Because of BEDMAS
            //     }
            // }

            // $x = mathStuff($n); //new variable $x. invoking mathsStuff function passing through a value which is $n = 5. 
            // echo "The factorial of $n is $x";
            
            // breakSpace();


    // ADDING STYLES TO PHP

            // STYLES WITHIN PHP | INLINE 

                // function hello($name){
                //     echo "Hello $name"; //local variable
                // }

                // function br(){
                //     echo "<br>";
                // }
                // function hellostyle($font, $size){
                //     // php writing html. $size is in {} is because of the em that needs to be next to it. 
                //     echo "<p style=\"font-family:$font; font-size:{$size}em;\">  Hello Styled Florence </p> ";	

                // }

                // hello("Florence"); //invoking hello function, with argument Florence
                // br();
                // hellostyle("Helvetica", 2); //invoking hellostyle, assigning styles.
                // br();
                // hellostyle("Times", 3);
                // br();
                // hellostyle("Courier", 1.5);
                // br();


    // SUPER GLOBAL VARIABLES

            //     $x=5;

            //     function number(){
            //         global $x;
            //         echo $x; //global variable
            //         ++$x;
            //     }

            //     function usingnumber(){
            //         echo $GLOBALS["x"]; //Superglobalvariables 
            //     }

            //     number();
            //     br();
            //     echo $x; //incremented inside the function
            //     br();
            //     usingnumber();


    // CLASSES OBJECT ORIENTED CODING

            // PUBLIC VAIRABLES AND THE FUNCTION OF CLASSES

                // *Class is a key word and Student is the name of the class. Like writing a function
                class student {
                    public $name = "Florence"; //public means it can be accessed anywhere
                    public static $age = 25;
                    public static $deposit;

                    public $balance = 5000;

                    public function output () {
                        echo "this is inside the class <br>";
                        echo "The bank balance is $this->balance <br>"; //$this means this. Refering to balance
                    }
                    public function check () {
                        if ($this->balance > 2000) { // If this balance is greater than 2000
                            $this->output(); //run the function Output above
                            echo "display after checking<br>";
                        }
                    }
                }

                // Student 1 stuff
                $student1 = new student; // This means we are creating a new 'object/class' with the student Class.

                $student1 -> name = "Peter";
                $student1 -> age = 23;

                echo "<pre> $student1->name \t $student1->age \n </pre>";

                // Student 2 stuff
                $student2 = new student; 

                $student2 -> name = "Johnny"; // Assigning "Johnny" to name. not reassigning the variable. Because...
                $student2 -> age = 24;
                $student2 -> height = 178; //You can add another new variable with -> *name* = #

                echo "<pre> $student2->name \t $student2->age \n </pre>";

                
                
                // This reassigns the variable inside the student class. 
                student::$deposit=1000; //This only works if the Public ariable is also static.
                echo "<br>";
                echo student::$deposit; //without instance, independently used.

               
                
                $student1->output(); // invoking the method (function) inside the class
                $student1->check();

                echo "<br> The name of Student 1 is $student1->name <br>";
                echo "Student 2 is $student2->age years old <br>";

                
?> 