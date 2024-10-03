<?php

//0 1 1 2 3 5 8 13 21 34 55

 $limit =10;
 
 $n1 =0;
 $n2 =1;
 
 $tmp =0;
 
 for($i=0; $i<$limit; $i++){	 
	echo $n1;
	$n1 =$n1+$n2;
	$n2 =$tmp;
	$tmp =$n1;	 
	echo "&nbsp;";
 }
 
 echo "<br><br>";

function reverseFibonacci($n)
{

	$a[0] = 0;
	$a[1] = 1;

	for ($i = 2; $i < $n; $i++)
	{
	    $a[$i] = $a[$i - 2] + $a[$i - 1];
	}

	for ($i = $n - 1; $i >= 0; $i--)
	{
		echo $a[$i] . " ";
	}
}

reverseFibonacci(10);

 
 
 
 
?>