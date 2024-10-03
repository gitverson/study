<?php

//make this array ascending order without using any inbuilt function.

$arr = array(1, 6, 23, 10, 3, 2, 15,7);

for($i=0;$i<count($arr);$i++)
{
    for($j=0;$j<count($arr)-1;$j++)
    {
        if($arr[$j] > $arr[$j+1])
        {
           $temp =  $arr[$j+1];
           $arr[$j+1] =$arr[$j];
           $arr[$j] =$temp;  
        }
        
    }
    
}

print_r($arr);

 
 
 
 
 
 
 
?>