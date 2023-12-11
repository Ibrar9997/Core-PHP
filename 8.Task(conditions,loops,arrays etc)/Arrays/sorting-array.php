<?php

// ***********Simple Sort************

echo "*********Simple Sort************";

$name = ["Jahzaib", "Muneeb", "Nadeem", "Ibrar", "Fawad", "Zubair"];

$array = array(
    "A" => "xyz",
    "B" => "abc",
    "C" => 987,
    "D" => "index 3"
);

sort($name);

echo "<pre>";
print_r($name);
echo "</pre>";

sort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

// ***********Reverse Sort************

echo "*********Reverse Sort************";

$name1 = [55, 8, 7, 66, 100, 90];

rsort($name1);

echo "<pre>";
print_r($name1);
echo "</pre>";


// ***********Associative Sort************

echo "*********Associative Sort************";

$array1 = [
    "A" => 212,
    "B" => 56,
    "C" => 987,
    "D" => 973
];

asort($array1);

echo "<pre>";
print_r($array1);
echo "</pre>";



// ***********Associative Reverse Sort************

echo "*********Associative Reverse Sort************";

$array2 = [
    "A" => "Canada",
    "B" => "Pakistan",
    "C" => "England",
    "D" => "IceLand"
];

arsort($array2);

echo "<pre>";
print_r($array2);
echo "</pre>";



// ***********Key Sort************

echo "*********Key Sort************";

$array3 = [
    "A" => "Canada",
    "B" => "Pakistan",
    "C" => "England",
    "D" => "IceLand"
];

ksort($array3);

echo "<pre>";
print_r($array3);
echo "</pre>";



// ***********Key Reverse Sort************

echo "*********Key Reverse Sort************";

$array4 = [
    "A" => "Canada",
    "B" => "Pakistan",
    "C" => "England",
    "D" => "IceLand"
];

krsort($array4);

echo "<pre>";
print_r($array4);
echo "</pre>";


// **********Neutral Order Sort************

echo "********Neutral Order Sort**********";

$array5 = [
    "A" => "abc123",
    "B" => "xyz856",
    "C" => "qwerty369",
    "D" => "IceLand55"
];

natsort($array5);

echo "<pre>";
print_r($array5);
echo "</pre>";

// **********Neutral Order Sort Case Sensitive************

echo "**********Neutral Order Sort Case Sensitive**************";

$array6 = [
    "A" => "abc123",
    "B" => "xyz856",
    "C" => "qwerty369",
    "D" => "IceLand55"
];

natcasesort($array6);

echo "<pre>";
print_r($array6);
echo "</pre>";


// **********Multiple Arrays Sort************

echo "***********Multiple Arrays Sort**************";

// Multi sort only work when arrays size are equal

$array7 = [
    "A" => "abc123",
    "B" => "xyz856",
    "C" => "qwerty369",
    "D" => "IceLand55"
];

$name2 = [55, 8, 100, 90];

array_multisort($array7, $name2);

echo "<pre>";
print_r($array7);
echo "</pre>";

echo "<pre>";
print_r($name2);
echo "</pre>";

?>
