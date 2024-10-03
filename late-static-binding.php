<?php


//In PHP, programs are saved and then directly run on the browser, the script is executed through a web server and we get the output. We don’t compile PHP programs manually but that does not mean it is never compiled. The PHP interpreter does that for you and runs it. So there are two phases, first, compile-time and second run time. During the compile time, the normal variables are replaced with their values but the static keywords are replaced only in the run time. 

//Overriding a property in child class and creating the instance of the child class, so to get the overridden output, the late static binding concept is used by writing static keyword before using the property. Whenever a PHP interpreter gets the request to compile a function. If it sees any static property, then it leaves the property pending for run time and the property gets its value during runtime from the function it is being called. This is called late static binding.

//The early binding (static binding) refers to compile time binding and late binding (dynamic binding) refers to runtime binding.


class DB
{
	public static $table='basetable';
	
	Public function select()
	{
		
		echo "SELECT * FROM ".static::$table;
	}
	
	Public function insert()
	{
		
		echo "INSERT INTO  ".static::$table;
	}

}

class abc extends DB
{
	public static $table='Any name';
	
	
}

class user extends DB
{
	public static $table='user';
	
	
}

$db = new DB;
$db->select();
echo "<br>";
$abc = new abc;
$abc->select();
echo "<br>";
$user = new user;
$user->select();


?>