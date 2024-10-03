<?php

define("NEW_DATA","Hello , My Name is Nawal kishor");

echo NEW_DATA;

echo "<br>";
echo constant("NEW_DATA"); //constant() is useful if you need to retrieve the value of a constant

echo "<br>";
/* 
Constants() cannot be changed once it is declared.

Class constants can be useful if you need to define some constant data within a class.

A class constant is declared inside a class with the const keyword.

 */

class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}

echo Goodbye::LEAVING_MESSAGE;

echo "<br>";


//we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name, like here:

class Goodbyee {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbyee();
$goodbye->byebye();


#PHP Constants

1. In PHP constants there is no need to use $ sign.
2. The data type of PHP constant cannot be changed during the execution of the script.
3. A PHP constant once defined cannot be redefined.
4. We can not define a constant using any simple assignment operator rather it can only be defined using define().
5. PHP constants are automatically global across the entire script.

#PHP Variables

1. In PHP Variables the $ sign is been used.
2. The data type of the PHP variable can be changed during the execution of the script.
3. A PHP variable can be undefined as well as can be redefined.
4. We can define a variable using a simple assignment operation(=).
5. PHP variables are not automatically global in the entire script.