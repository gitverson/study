<?php 

//PHP & Ampersand: Passing by Reference

// Passing by reference allows two variables to point to the same content under different names. The ampersand ( & ) is placed before the variable to be referenced.

echo "<b>Examples 1 :</b><br>";

$a = 1;
$b = &$a; // $b references the same value as $a, currently 1
$b = $b + 1; // 1 is added to $b, which effects $a the same way
echo "b is equal to $b, and a is equal to $a";



echo "<br><br><b>Examples 2 :</b><br>";

function add(&$var){ // The & is before the argument $var
$var++;
}
$x = 1;
$y = 10;
add($x);
echo "x is $x,";
add($y);
echo " x is $x, and y is $y"; // Note: $a and $b are NOT referenced

echo "<br><br><b>Examples 3 :</b><br>";

$array = array(1,2,3,4);
foreach ($array as &$value){
$value = $value + 10;
}
unset ($value); // Must be included, $value remains after foreach loop
print_r($array);

?>