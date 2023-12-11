<?php


// **********First Method************

echo "**********First Method************ <br>";

$string = "i am a developer 01";

// preg_match(pattern, string, array)
// "i" is use for case sensitivity

$exp = preg_match_all("/AM|a|1/i", $string, $array);
if ($exp) {

    echo "$exp was found";

} else {

    echo "$exp not found";
}

echo "<pre>";
print_r($array);
echo "</pre> <br>";


// **********Second Method************

echo "**********Second Method************ <br>";

$string = "i am a developer 01";

// preg_match(pattern, string, array)
// "i" is use for case sensitivity

$exp = preg_match_all("/[Ama1]/i", $string, $array1);
if ($exp) {

    echo "$exp was found";

} else {

    echo "$exp not found";
}

echo "<pre>";
print_r($array1);
echo "</pre> <br>";

// **********Third Method************

echo "**********Third Method************ <br>";

$string = "i am a developer 01";

// preg_match(pattern, string, array)
// "i" is use for case sensitivity
// Search all letter without "Am,a,1"

$exp = preg_match_all("/[^Ama1]/i", $string, $array2);
if ($exp) {

    echo "$exp was found";

} else {

    echo "$exp not found";
}

echo "<pre>";
print_r($array2);
echo "</pre> <br>";

// A lots of more REGEX are there basic arre explain earlier.