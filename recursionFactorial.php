<?php


function fact($num)
{
    if ($num == 0) {
        return 1;
        
    }else {
		
		return $num*fact($num-1);
	}
}

echo fact(5);

#What is a stack overflow error? What causes it? Is there any way to avoid it while using recursive functions in PHP?
#What causes a stack overflow?

#Infinite recursion is most-often the cause. 

function countToZero($n) { 
	return countToZero($n - 1); 
} // no base case so this will always cause a stack overflow error. 
 
//countToZero(1);

/*
What are the advantages and disadvantages of Recursion
Advantages							Disadvantages

Saves time and space.				Stack overflow.
Increases code readability.			Difficulty in understanding and debugging.
Enables efficient data processing.	Slower execution time.
Facilitates problem solving.		Limited applicability.

*/

?>