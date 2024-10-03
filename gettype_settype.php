<?php

/* 
gettpye() : Find Data Type 
*/
$a = 3;
echo gettype($a) . "<br>";

$b = 3.2;
echo gettype($b) . "<br>";

$c = "Hello";
echo gettype($c) . "<br>";

$d = array();
echo gettype($d) . "<br>";

$e = array("red", "green", "blue");
echo gettype($e) . "<br>";

$f = NULL;
echo gettype($f) . "<br>";

$g = false;
echo gettype($g) . "<br>";

/* 
settype() : Convert variables to specific types
 
*/
$a = "32"; // string
settype($a, "integer"). "<br>"; // $a is now integer

$b = 32; // integer
settype($b, "string"). "<br>"; // $b is now string

$c = true; // boolean
settype($c, "integer"). "<br>"; // $c is now integer (1)

//intval() Return the integer value of different variables:

//is_array() Check whether a variable is an array or not:

//is_numeric() Check whether a variable is a number or a numeric string, or not:

//is_string() Check whether a variable is of type string or not:




?>

