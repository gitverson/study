<?php

// __call is magic function which accepts function name and arguments

class TEST
{

	public function __call($method_name,$parameter)
	{
		
		 $parameter = implode(', ', $parameter);
		 print "Call to $method_name() with parameter '$parameter' failed!\n";
	}
}
$obj= new TEST();

$obj->overloading();
//$obj->overloading("nawal", "delhi");

?>