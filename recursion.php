<?php


What is recursion in php ?
Ans:- a recursive function calls itself during its execution.


What is a stack overflow error? What causes it? Is there any way to avoid it while using recursive functions in PHP?
What causes a stack overflow?
//Infinite recursion is most-often the cause. 


function countToZero($n) { 
	return countToZero($n - 1); 
} // no base case so this will always cause a stack overflow error. 
 
//countToZero(1);


What are the advantages and disadvantages of Recursion

Advantages								Disadvantages

Saves time and space.					Stack overflow.
Increases code readability.				Difficulty in understanding and debugging.
Enables efficient data processing.		Slower execution time.
Facilitates problem solving.			Limited applicability.



=> Uses of Recursion

tree structure (a branch is like a tree)
lists (part of a list is still a list)
containers (Russian dolls)
sequences (part of a sequence looks like the next)
groups of objects (a subgroup is a still a group of objects)

Directory structure in the file system. Recursively finding files, deleting files, creating directories, etc.

People often sort stacks of documents using a recursive method. For example, imagine you are sorting 100 documents with names on them. First place documents into piles by the first letter, then sort each pile.

Looking up words in the dictionary is often performed by a binary-search-like technique, which is recursive.

In organizations, bosses often give commands to department heads, who in turn give commands to managers, and so on.

?>