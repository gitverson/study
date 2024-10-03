<?php


function multiTable($num, $temp)
{
    if ($temp <= 10)
    {
        echo  $num * $temp . "&nbsp;&nbsp;";
        multiTable($num, $temp + 1);
    }
	else if ($temp > 10 && $num >2)
	{   $temp = 1; 
		echo  "<br>";
        multiTable($num-1, $temp);
	
	}
	
}

multiTable(10, 1);

echo  "<br><br>";
##################################################################################

function PrintTable($num, $temp)
{
    if ($temp <= 10)
    {
        echo "$num X $temp = " . $num * $temp . "<br>";
        PrintTable($num, $temp + 1);
    }
}

PrintTable(5, 1);







?>