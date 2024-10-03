<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


echo '<br/><br/><b>empty() function </b><br/><br/>';

$var = 0;
$str = '';
$arr = array();
$bool = false;
$null = null;

var_dump(empty($var));//true
echo "<br>";
var_dump(empty($str));//true
echo "<br>";
var_dump(empty($arr));//true
echo "<br>";
var_dump(empty($bool));//true
echo "<br>";
var_dump(empty($null));//true


echo '<br/><br/><b>isset() function </b><br/><br/>';

$a = array('key1' => 'Foo Bar', 'key2' => null);
var_dump(isset($a['key2']));  // output : false

echo "<br>";
$a = array();
var_dump(isset($a));


?>