<?php

//You can pass a variable by reference to a function so the function can modify the variable.
//Function call by reference
	function add(&$x)
	{
		$x=$x+20;
	}
	
$a=10;
echo "$a <br/>";
 add($a);
echo "$a <br/>";

//echo "$x <br/>";

#######################################################################################################

