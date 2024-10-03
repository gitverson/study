<?php 

#What is the meaning of 'escaping to PHP'?

{{
#The PHP parsing engine needs a way to differentiate PHP code from other page elements. The mechanism to achieve this is known as 'escaping to PHP'. Escaping a string means reducing ambiguity in quotes used in that string.
}}

#For example, when you’re defining a string, you surround it in either double quotes or single quotes:

echo "Hello, KrackInterview.";
echo '<br/>';

#But what if I include double quotes within the string?
 
 //echo "Hello "KrackInterview."";

#Now I have ambiguity – the interpreter doesn’t know where does my string end. If I want to keep my double quotes, I have various options. I could use single quotes around my string:

echo 'Hello "KrackInterview."';
echo '<br/>';

#Or I can escape my quotes:

echo "Hello \"KrackInterview.\"";


#Any quote that is preceded by a slash is escaped and understood to be part of the value of the string.

/* 
What is ‘escaping to PHP’?
Escaping is used in PHP to reduce the ambiguity of program interpreters.

For example, there is a string which is mentioned in the program, we will write it within double quotes as - “I am a String”. Now, imagine we want to put more double quotes into it as- “I am a ”String””. This will cause ambiguity to the interpreter since it will not know where the string is ending.

For such cases, we use escape sequences using a backslash (\). We will place a backslash before the double quote, where we want to stand it for itself. In this way, the interpreter will process the double quotes as is and not as the end of the string.

 */
 
 
echo  "I am a \"String\"";