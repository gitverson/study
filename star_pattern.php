<?php

/*
WAP

*
**
***
****
***** 

*/

echo "Pyramid pattern using stars <br /><br />";

for($i=1;$i<=5;$i++)
{

	for($j=1;$j<=$i;$j++)
	{
	 echo "*"	;
	}
	
    echo "<br/>";	
}


echo "<br /><br /> Reverse Pyramid pattern using stars <br /><br />";

for($i=1;$i<=5;$i++)
{
    for($j=5-$i;$j>=0;$j--){
    echo "*";
    }
echo "<br>";
}

echo "<br /><br />";
echo "<p align='right'> Reverse Pyramid pattern using stars (Right align) <br /><br />";
for($i=1;$i<=5;$i++)
{
    for($j=5-$i;$j>=0;$j--){
    echo "*";
    }
echo "<br>";
}
echo "</p>";


echo "<br /><br /> square pattern program using stars<br /><br />";

for ($i = 0; $i < 5; $i++){
    for($j=1;$j<=5;$j++){
        echo "*";
    }
    echo "<br/>";
}

echo "<br /><br />pyramid pattern using numbers<br /><br />";

$n = 1; /*Initializing starting number*/
for ($i = 0; $i < 5; $i++)
{
    for ($j = 0; $j <= $i; $j++ )
    {
        echo $n." ";
    }
    $n = $n + 1;
    echo "<br/>";
}



echo "<br /><br />pyramid pattern using numbers in series<br /><br />";

$n = 1; /*Initializing starting number*/
for ($i = 0; $i < 5; $i++)
{
    for ($j = 0; $j <= $i; $j++ )
    {
        echo $n." ";
        $n = $n + 1;
    }
    echo "<br/>";
}



echo "<br /><br />pyramid pattern using letters<br /><br />";

$n = 65; /*Initializing ASCII value of (A) */
for ($i = 0; $i < 5; $i++)
{
    for ($j = 0; $j <= $i; $j++ )
    {
        echo chr($n)." ";
    }
    $n = $n + 1;
    echo "<br/>";
}

echo "<br /><br />Example -2 Pyramid pattern <br /><br />";


$num =5;
for($i=1; $i<=$num;$i++)
{
	for($j=1; $j<=$num-$i;$j++)
	{
    echo "&nbsp;";
		
	}
	for($k=1; $k<=$i;$k++)
	{

	echo "*";
		
	}
echo "<br/>"; 	
	
}

?>