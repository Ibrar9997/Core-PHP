<?php

// ****************Arrays**************

// *************First Method***********

echo "Array First Method <br>";

$array = array("index 0", "abc", 987, "index 3");        // *********Initialization of Array*********

echo $array[0] . "<br>";
echo $array[1] . "<br>";
echo $array[2] . "<br>";
echo $array[3] . "<br>";


// *************Second Method***********

echo "<br>Array Second Method <br>";

$array2 = ["index 0", "abc", 987, "index 3"];            // *********Initialization of Array*********

echo "<pre>";
print_r($array2);
echo "</pre>";



// *************Third Method***********

echo "<br>Array Third Method <br>";


$array3[0] = "index 0";
$array3[1] = "abc";
$array3[2] = "987";
$array3[3] = "index 3";

echo "<pre>";
print_r($array3);
echo "</pre>";



// *************Forth Method***********

echo "<br>Array Forth Method <br>";

$array4 = ["index 0", "abc", 987, "index 3"];

echo "<ul>";
for ($i = 0; $i < 4; $i++) {
    echo "<li> $array4[$i] </li>";
}
echo "</ul>";

?>