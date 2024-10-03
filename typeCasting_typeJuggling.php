<?php 
/* 
#Explain type casting and type juggling.

Answer: Typecasting provides flexibility and control over how data is treated and manipulated. It allows you to convert variables between different scalar types such as strings, integers, floats, and booleans.

Advantages of Type Casting 
It helps you in converting one data type to another data type.
It helps in making the program lightweight.

(string) - cast to string
(float), (double), (real) - cast to float
(bool), (boolean) – cast to boolean
(array) - cast to an array
(int), (integer) - cast to integer
(object) - cast to object

*/
#Sample code:

$str = "10"; // $str is now string
$bool = (boolean) $str; // $bool is now boolean

var_dump($bool);

echo "<br><br>";

$x = 20.6;
var_dump($x);
echo "<br><br>";
$y = (int) ($x);
var_dump($y);

echo "<br><br>";

$x = "Hello";
$y = (int) ($x); //If we are converting string to integer. String  have integer value 0 (Zero)
var_dump($y);



#The type of the variable is changed automatically based on the assigned value and it is called type juggling.

#Sample code:

echo "<br><br>";
$val = 5; // $val is now number
var_dump($val);
echo "<br><br>";
$val = "500"; //$val is now string
var_dump($val);

 

?>