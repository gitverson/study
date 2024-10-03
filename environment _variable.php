<?php
/* 
getenv
Following script displays values of all available environment variables
 */
$arr=getenv();
foreach ($arr as $key=>$val)
echo "$key=>$val <br>";

echo "<br><br><br><br><br>";

/* 
PHP also has putenv() function to create a new environment variable. The environment variable will only exist for the duration of the current request.
 */
putenv("PHP_TEMPUSER=GUEST");
echo "Temp user: " . getenv("PHP_TEMPUSER");

echo "<br>";

echo 'My username is ' .$_ENV["USER"] . '!';


?>