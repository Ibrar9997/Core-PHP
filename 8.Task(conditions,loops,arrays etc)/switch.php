<?php

// **********Switch Statement*************

$weekday = 5;

switch ($weekday) {                       // *******Switch Condition*******

    case 1:                                   // *******Case*******
        echo "Today is Monday";
        break;                             // *******Break Statement*******

    case 2:
        echo "Today is Tueday";
        break;

    case 3:
        echo "Today is Wednesday";
        break;

    case 4:
        echo "Today is Thursday";
        break;

    case 5:
        echo "Today is Friday";
        break;

    case 6:
        echo "Today is Saturday";
        break;

    case 7:
        echo "Today is Sunday";
        break;

    default:                                // *******Default Statement*******
        echo "Enter the valid week day";
}

?>