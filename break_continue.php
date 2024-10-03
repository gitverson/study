<?php

//The break statement terminates the whole iteration of a loop whereas continue skips the current iteration.

for ($i = 1; $i < 10; $i++) {
    if ($i % 2 == 0) {
        continue; //Continue skips the current iteration.
    }
    echo $i . " ";
}


echo "<br/><br/>";


for ($i = 1; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . " ";
}


echo "<br/><br/>";


for ($i = 10; $i <= 15; $i++) {
    switch ($i) {
        case 10:
            echo "Ten";
            break;
 
        case 11:
            continue 2; // for loop
 
        case 12:
            echo "Twelve";
            break;
 
        case 13:
            echo "Thirteen";
            break;
 
        case 14:
            continue 2;
 
        case 15:
            echo "Fifteen";
            break;
    }
 
    echo "<br> Below switch, and i = " . $i . ' <br><br> ';
}