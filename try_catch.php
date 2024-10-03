<?php
try {
	
	class abc {}
	
    echo "a";	

	try {
	echo "b";	
	}
	catch(Exception $e) {
	echo 'Message: ' .$e->getMessage();
	}
	
	try {
	echo "c";	
	}
	catch(Exception $e) {
	echo 'Message: ' .$e->getMessage();
	}
}

catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
finally {
//The finally keyword is used in try...finally and try...catch...finally structures to run a block of code whether or not an exception occurred.

	
  echo "A finally block may also be specified after or instead of catch blocks. Code within the finally block will always be executed after the try and catch blocks, regardless of whether an exception has been thrown, and before normal execution resumes.";
}

###############################################################
echo "<br><br>";

/* try {   echo "Block 1 <br>";

        echo dirname('E:\xampp\htdocs\oops\php7',0).PHP_EOL;echo "<br/>";
		echo dirname('E:\xampp\htdocs\oops\php7',1).PHP_EOL;echo "<br/>";
		echo dirname('E:\xampp\htdocs\oops\php7',2).PHP_EOL;echo "<br/>";
		echo dirname('E:\xampp\htdocs\oops\php7',3).PHP_EOL;echo "<br/>";
			
		return "Nawal"; //next line code will not execute
		throw new Exception("Levels Value must be >= 1");
	}
	catch(Exception $e) {
		echo '<br/>Message: <b>' .$e->getMessage().'</b>';
	} */
	
try {   
    echo "Block 2 <br>";  
	
        echo dirname('E:\xampp\htdocs\oops\php7',0).PHP_EOL;echo "<br/>";
		echo dirname('E:\xampp\htdocs\oops\php7',1).PHP_EOL;echo "<br/>";
		echo dirname('E:\xampp\htdocs\oops\php7',2).PHP_EOL;echo "<br/>";
		echo dirname('E:\xampp\htdocs\oops\php7',3).PHP_EOL;echo "<br/>";
		throw new Exception("Levels Value must be >= 1");//next line code will not execute
		die("throw error");
		return "Nawal"; //next line code will not execute
		
	}
	catch(Exception $e) {
		echo '<br/>Message: <b>' .$e->getMessage().'</b>';
	}	

echo "<br><br>";

try {
	
	 echo "Block 3 <br>";
		echo dirname('E:\xampp\htdocs\oops\php7',0).PHP_EOL;echo "<br/>";
		echo dirname('E:\xampp\htdocs\oops\php7',1).PHP_EOL;echo "<br/>";
		echo dirname('E:\xampp\htdocs\oops\php7',2).PHP_EOL;echo "<br/>";
		echo dirname('E:\xampp\htdocs\oops\php7',3).PHP_EOL;echo "<br/>";
			
		return "Nawal"; //next line code will not execute
		//Some Code 
		echo dirname('E:\xampp\htdocs\oops\php7',0).PHP_EOL;echo "<br/>";
		throw new Exception("Levels Value must be >= 1");
	}
	catch(Exception $e) {
		echo '<br/>Message: <b>' .$e->getMessage().'</b>';
	}

 
 

# Is it possible try block have multiple catch block?
Ans: Yes

//declare(strict_types=1);
function divide(int $a, int $b) : int {
   return $a / $b;
}
$a=10;
$b=0;
try{
		if (!$b) {
		throw new DivisionByZeroError('Division by zero.');
	    }
		if (is_int($a)==FALSE || is_int($b)==FALSE)
		throw new InvalidArgumentException("Invalid type of arguments");

		$result=divide($a, $b);
		echo $result;
}
catch (TypeError $x)//if argument types not matching 
{
	echo $x->getMessage();
}
catch (DivisionByZeroError $y) //if denominator is 0
{
	echo $y->getMessage();
}
catch (ArgumentCountError $z) //if no.of arguments not equal to 2
{
	echo $z->getMessage();
}
catch (InvalidArgumentException $i) //if argument types not matching
{
	echo $i->getMessage();
}
catch (Exception $ex) // any uncaught exception
{
	echo $ex->getMessage();
}
 
 
/*
BadFunctionCallException
BadMethodCallException
DomainException
InvalidArgumentException
LengthException
LogicException
OutOfBoundsException
OutOfRangeException
OverflowException
RangeException
RuntimeException
UnderflowException
UnexpectedValueException
*/
 
 
?>