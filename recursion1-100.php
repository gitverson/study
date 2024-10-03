<?php
#print 1-100 without loop

function Print1_100($num)
{
    if ($num <= 100)
    {
        echo $num. ", ";
        Print1_100($num+1);
    }
}

Print1_100(1);

?>