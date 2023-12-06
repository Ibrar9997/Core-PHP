<?php

// *******Associative Array********

// *************First Method***********

echo "Associative Array First Method <br>";

// *********Initialization of Array*********
$array = array(
    "A" => "index 0",
    "B" => "abc",
    "C" => 987,
    "D" => "index 3"
);

echo $array["A"] . "<br>";
echo $array["B"] . "<br>";
echo $array["C"] . "<br>";
echo $array["D"] . "<br>";


// *************Second Method***********

echo "<br>Associative Array Second Method <br>";

// *********Initialization of Array*********
$array2 = [
    /*key=>*/
    "A" => "index 0"/*value*/,
    "B" => "abc",
    "C" => 987,
    "D" => "index 3"
];

// *******Change "C" index in Array**********
$array2["C"] = 123;

echo "<pre>";
print_r($array2);
echo "</pre>";



// *************Third Method***********

echo "<br>Associative Array Third Method <br>";


$array3[0] = "index 0";
$array3[1] = "abc";
$array3[2] = 987;
$array3[3] = "index 3";


// *******Change "2" index in Array**********
$array3["2"] = 2.55;

echo "<pre>";
var_dump($array3);
echo "</pre>";



// *************Forth Method***********

echo "<br>Associative Array Forth Method <br>";

$array4 = ["index 0", "abc", 987, "index 3"];

echo "<ul>";
foreach ($array4 as $key => $value) {
    echo "<li>$key = $value </li>";
}
echo "</ul>";

?>