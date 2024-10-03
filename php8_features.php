<?php


echo " <b>New Functions Str_contains()</b> <br/><br/>";

//We generally would use strpos to find a string within another string in previous versions of PHP. In PHP 8 we can use str_contains.

if (str_contains('Hello to you', 'you')) {
    //found
}
            
echo " <br/><br/><b>Str_starts_with() and str_ends_with()</b> <br/><br/>";

if (str_starts_with('Hello to you', 'He')) {
    //starts with
}

if (str_ends_with('Hello to you', 'you')) {
    //ends with
}

echo " <br/><br/><b>PHP Match Expressions</b> <br/><br/>";
//Match expressions solve many of the shortcomings of switch case, match expressions use strict comparisons (same type) and don't require a break after each case.

//PHP 7
switch (8.0) {
  case '8.0':
    $result = "Oh no!";
    break;
  case 8.0:
    $result = "This is what I expected";
    break;
}
echo $result;
//> Oh no!


//PHP 8
echo match (8.0) {
  '8.0' => "Oh no!",
  8.0 => "This is what I expected",
};
//> This is what I expected



echo " <br/><br/><b>String to number comparisons  </b> <br/><br/>";
//PHP 7
echo 0 == 'foobar' // true

//PHP 8
echo 0 == 'foobar' // false



echo " <br/><br/><b>Nullsafe operator </b> <br/><br/>";
//PHP 7
$country =  null;

if ($session !== null) {
  $user = $session->user;

  if ($user !== null) {
    $address = $user->getAddress();
  
    if ($address !== null) {
      $country = $address->country;
    }
  }
}

//PHP 8

$country = $session?->user?->getAddress()?->country;



echo " <br/><br/><b>Union types </b> <br/><br/>";

//PHP 7
class Number {
  /** @var int|float */
  private $number;

  /**
   * @param float|int $number
   */
  public function __construct($number) {
    $this->number = $number;
  }
}

new Number('NaN'); // Ok



//PHP 8

class Number {
  public function __construct(
    private int|float $number
  ) {}
}

new Number('NaN'); // TypeError


echo " <br/><br/><b>Constructor property promotion </b> <br/><br/>";

//PHP 7
class Point {
  public float $x;
  public float $y;
  public float $z;

  public function __construct(
    float $x = 0.0,
    float $y = 0.0,
    float $z = 0.0
  ) {
    $this->x = $x;
    $this->y = $y;
    $this->z = $z;
  }
}

//PHP 8

class Point {
  public function __construct(
    public float $x = 0.0,
    public float $y = 0.0,
    public float $z = 0.0,
  ) {}
}


?>