<?php
session_name('mySessionName');
session_start();

echo session_id();
echo"<br>";
echo session_id();
echo"<br>";
echo session_id();


/* 
session_status();
session_destroy();
session_save_path();
session_regenerate_id(); 
session_name('mySessionName'); // change default(PHPSESSID) session name 
*/

?>