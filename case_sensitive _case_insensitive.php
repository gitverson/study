<?php

$color = "red";

echo "$color";

echo "$COLOR"; // all character is in capital

echo "$Color"; // C is Capital letter

echo "<br/><br/><br/>";

define('CONSTANT_VARIABLE', 'Constant names are case sensitive');  

//define('CONSTANT_VARIABLE', 'Constant names are case sensitive', true); 
// true flag added in define function, enabled case-insensitive


echo constant_variable;//this is not working, getting error

echo "<br/><br/><br/>";

echo CONSTANT_VARIABLE;




echo "<br/><br/><br/>";

 /* 

In PHP, variable and constant names are case sensitive, while class names as well as function/method names are case-insensitive.
 */
 function TEST()
 {
	 
	 echo "Variable and constant names are case sensitive";
	 
 }
  
test();

echo "<br/><br/><br/>";


	class TeStIn {
		
		function __construct(){
			
		   echo 'class names as well as function/method names are case-insensitive.';
		}
	}
 
 $o = new  testin();
 
?>