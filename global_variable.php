<?php
 $x = 5; // Global scope

    function myTest(){
      
        global $x;
		  global $y ; // if you want access outside local scope variables , you define GLOBAL, 
		
		  $y= 10; // Local scope
        
        echo "<p>Test variables inside the function:<p>";
        echo "Variable x in global scope is: $x";
        echo "<br>";
        echo "Variable y is: $y";
    }

    myTest();

    echo "<p>Test variables outside the function:<p>";
    echo "Variable x is: $x";
    echo "<br>";
    echo "Variable y is: $y";

?>