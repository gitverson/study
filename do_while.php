<?php

$arr=array(2,5,6,7,8,11,10,24,74,43,59);
$arrCount=count($arr);
$i=0;
do{
	if($arr[$i]%2!==0 )
	{	
	echo $arr[$i]."<br/>";
	}
	$i++;
}while($i < $arrCount);

###############################################
echo "<br/> <b>Odd value print between 1 to 100</b> <br/>";

$numArray = range(1,100);
$i=0;
do 
{

if($numArray[$i]%2 !==0)
{
echo $numArray[$i].', ';
}	
 $i++;
}while ($i<100) ;


###############################################
echo "<br/><br/>";

$name = array('nawal','arun','rajesh','kishor');
$del_val = 'rajesh';
print_r($name);
echo "<br/>";
if (($key = array_search($del_val, $name)) !== false) {
    unset($name[$key]);
}
print_r($name);

echo "<br/>";
echo "<br/>";

$name1 = array('nawal','arun','rajesh','kishor');

foreach($name1 as $key=>$val){
	
	if($val =='rajesh')
	{
		unset($name1[$key]);
	}	
	
	
}
 print_r($name1);
?>