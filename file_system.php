<?php

$str="Hello World. Testing!";

$file = fopen("test.txt","w");
fwrite($file,$str);
fclose($file);



//How to read and display a HTML source from the website url?

$filename="https://www.nic.in/";
$fh=fopen("$filename", "r");
while( !feof($fh) ){
$contents=htmlspecialchars(fgets($fh, 1024));
print "$contents";
}
fclose($fh);


?>