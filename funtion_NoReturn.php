<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Function have not return anything. What type of Return value give function;
	function noreturn()
	{
	return;
	}
	
 

var_dump(noreturn());

//Output : NULL 




//Declare some function with default parameter

//The default is used only when the parameter is not specified; in particular, note that passing null does not assign the default value.

function makecoffee($type = "cappuccino")
{
    return "Making a cup of $type.<br/>";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");

