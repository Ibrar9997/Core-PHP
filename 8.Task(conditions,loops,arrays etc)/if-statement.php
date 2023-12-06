<?php

// ********If Statement***********


// ********First Method**********

$a = 40;
$b = 60;

// *****If B greater then A*******
if ($a < $b) {
    echo "If Statement <br>";
    echo "B is greater <br>";
}

// *****If A greater then B*******
if ($a > $b) {
    echo "If Statement <br>";
    echo "A is greater <br>";
}

// *****If A and B are equal*******
if ($a == $b) {
    echo "If Statement <br>";
    echo "B and A are equal <br>";
}

// *****If A and B are equal and datatype of a and b also equal*******
if ($a === $b) {
    echo "If Statement <br>";
    echo "B and A are equal and the datatype also equal <br>";
}





// ********Second Method**********

$a = 40;
$b = 40;

// *****If B greater then A*******
if ($a < $b) :
    echo "If Statement Second Method <br>";
    echo "B is greater <br>";
endif;

// *****If A greater then B*******
if ($a > $b) :
    echo "If Statement Second Method <br>";
    echo "A is greater <br>";
endif;

// *****If A and B are equal*******
if ($a == $b) :
    echo "If Statement Second Method <br>";
    echo "B and A are equal <br>";
endif;

// *****If A and B are equal and datatype of a and b also equal*******
if ($a === $b) :
    echo "If Statement Second Method <br>";
    echo "B and A are equal and the datatype also equal <br>";
endif;


// ********If-Else Statement***********

$name = "ABC";
$gender = "Male";

if ($gender == "Male") {
    echo "If-Else Statement <br>";
    echo "Hello Mr." . $name . "<br>";
} else {
    echo "If-Else Statement <br>";
    echo "Hello Ms." . $namae . "<br>";
}


// ********If-Else-If Statement***********

$per = 55;

if ($per >= 80 && $per <= 100) {
    echo "If-Else-If Statement <br>";
    echo "You are in Merit. <br>";
} elseif ($per >= 60 && $per < 80) {
    echo "If-Else-If Statement <br>";
    echo "You are in I Division. <br>";
} elseif ($per >= 45 && $per < 60) {
    echo "If-Else-If Statement <br>";
    echo "You are in II Division. <br>";
} elseif ($per >= 33 && $per < 45) {
    echo "If-Else-If Statement <br>";
    echo "You are in III Division <br>";
} elseif ($per < 33) {
    echo "If-Else-If Statement <br>";
    echo "You are Fail <br>";
} else {
    echo "If-Else-If Statement <br>";
    echo "Please Enter Valid Percentage <br>";
}


?>