<?php

#What are the encryption functions available in PHP ?
echo crypt('The quick brown fox jumped over the lazy dog.','salt_erebb323');
echo "<br/>";
//echo mcrypt_encrypt('The quick brown fox jumped over the lazy dog.');
echo "<br/>";
echo hash('SHA256','The quick brown fox jumped over the lazy dog.');
echo "<br/>";
echo "<br/>";
$data = "hello";

foreach (hash_algos() as $v) {

        $r = hash($v, $data, false);

        printf("%-12s %3d %s\n", $v, strlen($r), $r);
		echo "<br/>";

}

/*
 What do PHP's encryption functions do?

Ans: Encryption means encoding and decoding of data. In PHP, there are two types of Encryption:

One way Encryption

In One way Encryption, we can only encode the data and cannot decode it. To do this md5() function is used.

Two-way Encryption

In Two way Encryption, we can encode and decode the data, which means both encrypt and decrypt functions are present. The base64_encode() is used to encode the specified data using base64. 

The base64_decode() function is used to decode previously encoded data using base64
*/
?>
