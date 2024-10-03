<?php 

//Display all PHP Errors and Warnings
ini_set('display_errors', '1');
error_reporting(E_ALL);


//Mainly Four types of error in PHP 

echo "<b>1. Notice Error : </b> <br/>";

$var;

echo $var;



echo "<br/><b>2. Warning Error : </b> <br/>";

include('a.php');

echo "Hello World";


echo "<br/><b>3. Fatal Error : </b> <br/>";

class fatalError
{
	public function calling()
	
	{ echo "fatalError";}
	
}
$obj= new fatalError();

$obj->call();

echo "Hello World <br/>";





echo "<b>4. Syntax Error or Parse Error : </b> <br/>";

echo $var1

echo $var1' 
  Single quotes and double quotes open then mandatory close it. 
  if not then we will get Parse error: syntax error

?>