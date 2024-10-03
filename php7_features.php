<?php

/**
 * Scalar type declarations
 */

//declare(strict_types=1);

echo " <b>Scalar type declarations</b> <br/><br/>";
function add(int $a, int $b) {
    return $a + $b;
}

var_dump(add(1,2));
var_dump(add("1","2"));


echo "<br/><br/> <b>Return type declarations</b> <br/><br/>";

function add1(int $a, int $b): int{
    return (string)($a + $b);
}

var_dump(add1(1,2));


echo "<br/><br/> <b>Anonymous classes</b> <br/><br/>";

$foo = new class {
    public function foo() {
        return "bar";
    }
};

var_dump($foo,$foo->foo());



echo "<br/><br/> <b>Level support for the dirname() function</b> <br/><br/>";

echo dirname('E:\xampp\htdocs\study').PHP_EOL;   echo "<br/>";
echo dirname('E:\xampp\htdocs\study',1).PHP_EOL; echo "<br/>";
echo dirname('E:\xampp\htdocs\study',2).PHP_EOL; echo "<br/>";
echo dirname('E:\xampp\htdocs\study',3).PHP_EOL; echo "<br/>";


echo "<br/><br/> <b>The Integer division function</b> <br/><br/>";


var_dump(
    intdiv(10, 3),
    (10/3)
);


echo "<br/><br/> <b>The space ship operator</b> <br/><br/>";


/* 0 when both values are equal
-1 when the left value is less than the right value
1 if the left value is greater than the right value
 */
$array = [
    "1 <=> 1" => 1 <=> 1,
    "1 <=> 2" =>1 <=> 2,
    "2 <=> 1" => 2 <=> 1
];

print_r($array);



echo "<br/><br/> <b>Null coalesce operator</b> <br/><br/>";

$array = ['foo'=>'bar'];

//PHP5 style
$message = isset($array['foo']) ? $array['foo'] : 'not set';
echo $message.PHP_EOL;

//PHP7 style
$message = $array['foo'] ?? 'not set';
echo $message.PHP_EOL;


echo "<br/><br/> <b>Constant Arrays</b> <br/><br/>";

	define('animals', ['dog','cat','bird']);
	print(animals[1]);

?>