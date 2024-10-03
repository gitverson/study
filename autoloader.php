<?php


spl_autoload_register('Myautoloader');


function Myautoloader($class_name) {

	$path='include_classes/';
	
	$extension='.php';
	
	$fullPath=$path.$class_name.$extension;
	
	
	if(!file_exists($fullPath)){
		
		return false;
		
	}
	
	include_once($fullPath);
}

$obj  = new CLASSAUTOLOAD();
$obj2 = new CLASSAUTOLOAD1(); 

?>