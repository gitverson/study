<?php

error_reporting(-1);
//Start with a double underscore "__" called magic function

/*
Warning
This function has been DEPRECATED as of PHP 7.2.0, and REMOVED as of PHP 8.0.0. Relying on this function is highly discouraged.
 */

function __autoload($className)
{
	$path='include_classes/';
	
	require_once $path.$className.".php";
	
}
$obj = new CLASSAUTOLOAD();

$obj = new CLASSAUTOLOAD1();


echo "<br><br> <b> spl_autoload_register(function (class_name) {})</b><br><br>";

//spl_autoload_register(function ($class_name) 

spl_autoload_register(function ($class_name) {
	
	$path='include_classes/';
	
    include_once $path.$class_name . '.php';
	
});

$obj  = new CLASSAUTOLOAD();
$obj2 = new CLASSAUTOLOAD1(); 


?>