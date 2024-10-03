<?php 
 /*    
 Parameter Values
 
d - The day of the month (from 01 to 31)
D - A textual representation of a day (three letters) Sun - Sat 
j - The day of the month without leading zeros (1 to 31)
l (lowercase 'L') - A full textual representation of a day Sunday - Saturday
N - The ISO-8601 numeric representation of a day (1 for Monday, 7 for Sunday)
S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
w - A numeric representation of the day (0 for Sunday, 6 for Saturday)
z - The day of the year (from 0 through 365)
W - The ISO-8601 week number of year (weeks starting on Monday)
F - A full textual representation of a month (January through December)
m - A numeric representation of a month (from 01 to 12)
M - A short textual representation of a month (three letters) Jan - Dec
n - A numeric representation of a month, without leading zeros (1 to 12)
t - The number of days in the given month
L - Whether it's a leap year (1 if it is a leap year, 0 otherwise)
o - The ISO-8601 year number
Y - A four digit representation of a year
y - A two digit representation of a year
a - Lowercase am or pm
A - Uppercase AM or PM
B - Swatch Internet time (000 to 999)
g - 12-hour format of an hour (1 to 12)
G - 24-hour format of an hour (0 to 23)
h - 12-hour format of an hour (01 to 12)
H - 24-hour format of an hour (00 to 23)
i - Minutes with leading zeros (00 to 59)
s - Seconds, with leading zeros (00 to 59)
 */



// Prints something like: Monday
echo date("l"). "<br>";

// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A'). "<br>";

// Prints: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)). "<br>";


//9th Sept 2022
echo date('jS M Y'). "<br>";

echo "Created date is " . date("jS M Y", strtotime('9th Sep 2022')). "<br>";


 
$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
echo $today."<br>";
$today = date("m.d.y");                         // 03.10.01
echo $today."<br>";
$today = date("j, n, Y");                       // 10, 3, 2001
echo $today."<br>";
$today = date("Ymd");                           // 20010310
echo $today."<br>";
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
echo $today."<br>";
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
echo $today."<br>";
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
echo $today."<br>";
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
echo $today."<br>";
$today = date("H:i:s");                         // 17:16:18
echo $today."<br>";
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)
echo $today."<br>";

 echo "&copy; 2010-". date("Y"). "<br>";
  
 echo "The time is " . date("h:i:sa");
 
 
 


?>