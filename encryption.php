<?php

$string = "Welcome to GeeksforGeeks\n";
  
echo "Original String: " . $string;
echo "<br>";

// Store the cipher method
$ciphering = "AES-128-CTR";

// Store the encryption key
$encryption_key = "GeeksforGeeks";
  
// Use OpenSSl Encryption method
 $iv_length = openssl_cipher_iv_length($ciphering);
 
 $options = 0;
  
// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011121';
  


// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($string, $ciphering, $encryption_key, $options, $encryption_iv);
  
// Display the encrypted string
echo "Encrypted String: " . $encryption . "\n";
   echo "<br>"; 

// Store the decryption key
$decryption_key = "GeeksforGeeks";

// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';
  
  
// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($encryption, $ciphering, $decryption_key, $options, $decryption_iv);
  
// Display the decrypted string
echo "Decrypted String: " . $decryption;

?>