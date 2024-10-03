<?php

$login = 'test';

$pass = 'pass';

if(($_SERVER['PHP_AUTH_PW']!= $pass || $_SERVER['PHP_AUTH_USER'] != $login) || !$_SERVER['PHP_AUTH_USER'])
{

    header('WWW-Authenticate: Basic realm="Test auth"');

    header('HTTP/1.0 401 Unauthorized');

    echo "<meta http-equiv=\"REFRESH\" content=\"2;url=php7_features.php\">" ; //after click on cancle button

    die ("Not authorized");
}else {


echo "<p>Welcome {$_SERVER['PHP_AUTH_USER']}.</p>";
echo "<p>Congratulation, you are into the system.</p>";

}

?>