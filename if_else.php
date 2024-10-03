<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo '<br/><br/><b>Question  1 What does the following code output?</b><br/><br/>';


if("")
{
	echo "a";
}	
if(1)
{
	echo "b";
}
if(-2)
{
	echo "c";
}elseif(0)
{
	echo "d";
}
if(false)
{
echo "e";
}elseif("false")
{
	echo "g";
}


######################################################

echo '<br/><br/><b>Question  2 What does the following code output?</b><br/><br/>';


$str1 = "yabadabadoo";
$str2 = "yaba";
if (strpos($str1,$str2)) {
echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}



echo '<br/><br/><b>Question  3 Switch case </b><br/><br/>';

$a = 0; 
//$a = 0; or $a = null; output :Blank 
//$a = '0'; or $a = '"0"'; output :Zero 
//$a = 1; output :false 
switch($a){
	case '':
		echo "Blank";
		break;
	case 0:
		echo "Zero";
		break;
	case "0":
		echo "zero string";
		break;
	default:
		echo "false";
		break;
}

######################################################



?>