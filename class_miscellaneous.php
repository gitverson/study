<?php


echo '<br/><br/><b>Type 1 variable </b><br/><br/>';


final class A() { // in CLASS NAME we not use parenthesis and private variable/Method will not call by the object
 //Parse error: syntax error, unexpected '(', expecting '{' in  on line 7   
    private function __construct()
    {
        print_r("Hello world");
    }
//Fatal error: Uncaught Error: Call to private A::__construct() from invalid context
}

$x = new A();
print_r($x);

class A() { //same name class will not work 

    private function __construct()
    {
        print_r("Hello world");
    }
}
$x = new A();
print_r($x);

#######################################################################################

echo '<br/><br/><b>Type 2 Constants define() function is not used in class\n const Keyword used in class</b><br/><br/>';

class Constants
{
	define('MIN_VALUE', '0.0'); 
#Parse error: syntax error, unexpected 'define' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST)	
	
	//const MIN_VALUE	='0.0';

	define('MAX_VALUE', '1.0'); 
	//const MAX_VALUE	='1.0';	

    public static function getMinValue()
    {
		return self::MIN_VALUE;
    }
    public static function getMaxValue()
    {
        return self::MAX_VALUE;
    }
}
echo Constants::getMinValue();
echo Constants::getMaxValue();

#######################################################################################

//Question : Can you extend a Final defined class? 
 
 Ans : No  A Final class or method declaration prevents child class or method overriding.

# What is T_PAAMAYIM_NEKUDOTAYIM in PHP?

Ans : T_PAAMAYIM_NEKUDOTAYIM is scope resolution operator used as :: (double colon) .Basically, it used to call static methods/variables of a Class.

#######################################################################################

echo '<br/><br/><b>How to access private property by object</b><br/><br/>';

class PvtProperty {

    private $pvt_var='Hello My Name is Nawal kishor';
      
      private function pvtMethod(){
      	return $this->pvt_var;
      }
      public function NotPvtMethod(){
      	return $this->pvt_var;
      }
      public function __construct(){
      	echo $this->pvt_var;
      }
}
$obj = new PvtProperty();
//$obj->pvtMethod();

die;

class Student {
    private $sName;

    public function setName($name) {
        $this->sName = $name;
    }

    public function getName() {
        return $this->sName;
    }
}

$student = new Student; 
//$student->sName = "error";// this makes an error while it is Private: Fatal error: Uncaught 
//echo $student->sName;// this makes an error while it is Private: Fatal error: Uncaught 
$student->setName("MisterniceGuy");// Set student name
echo $student->getName(); 

#######################################################################################

declare(strict_types=1);
echo '<br/><br/><b>Create a class with one method that will take a parameter(String) during the initialization.
With this same paramterer create a method  that will do a reverse string(no strrev) and display the result.
This class  should implement an  interface or abstract class.
Use type declaration to specify the return type.</b><br/><br/>';


interface int1 {

public function ReverseString($str);

}

class test implements int1 {

	public function ReverseString($string) :string {
        $str = '';
		for($i= strlen($string)-1;$i>=0;$i--){
			$str .= $string[$i];
		}
     return $str;
	}
}

$test = new test();

echo $test->ReverseString("Hello test"); 


#######################################################################################

echo '<br/><br/><b> public static x() and public static y() || how to use x() method in y() method 
</b><br/><br/>';


class UseStaticMethod {

    public static function x(){
        echo "Hello ";        
        }
     
     public static function y(){
        self::x();
        echo "world ";        
        }
}

UseStaticMethod::y(); //output:Hello World

#######################################################################################

echo '<br/><br/><b> Polimorphism example for addition of two numbers</b><br/><br/>';

interface intA {

    public function add($a ,$b) ;

}

class testA  implements intA{
  
     public function add($a, $b){
       
       echo $a+$b;
    } 
}

class testC implements intA {

     public function add($a, $b){
       
       echo $a+$b;
     } 
}

$obj = new testC();

$obj->add(4,5);


#######################################################################################

echo '<br/><br/><b> objects </b><br/><br/>';


$a = new stdClass();
$a->foo = "bar";
$b = clone $a;
 
var_dump($a);//object(stdClass)#1 (1) { ["foo"]=> string(3) "bar" }
var_dump($b); //object(stdClass)#2 (1) { ["foo"]=> string(3) "bar" } 
var_dump($a === $b);// output : false
var_dump($a == $b);//output : true


#######################################################################################


echo '<br/><br/><b> How to merge two object? </b><br/><br/>';


$obj_merged = (object) array_merge((array) $objectA, (array) $objectB);


#######################################################################################

echo '<br/><br/><b> Overrding example </b><br/><br/>';

class Robot
{
  public function greet()
  {
    return 'Hello!';
  }
}
 
class Android extends Robot
{
  public function greet()
  {
    return 'Hi';
  }
}
 
$robot = new Robot();
echo $robot->greet(); //Hello

$android = new Android();
echo $android->greet(); // Hi


// if we add private or protected constructor in class.

/*
Your Robot_pvt class has a protected or private constructor, which means that the class cannot be instantiated. __construct() functions are always called when an object is instantiated, so trying to do something like $obj_pvt = new Robot_pvt() will cause a fatal error with a private construction function.
*/

class Robot_pvt
{
    private function __construct()
    {
        return "I am private __constructor";
    }

    public function greet()
    {
    return 'Hello!';
    }
}
$obj_pvt = new Robot_pvt();
echo $obj_pvt->greet();

# Class A, Class B , Class C | How can access class C some methods from class A and Classs B ? : Multilevel Inheritance

class InheritA {
    public function methodA(){
        echo "I am method of Class InheritA";
    }
}
class InheritB extends InheritA {
    public function methodB(){
        echo "I am method of Class InheritB";
    }
}
class InheritC extends InheritB {
    public function __construct(){
        $this-> methodA();
        echo "<br/><br/>";
        $this-> methodB();
    }
}

$objectInherit = new InheritC();
