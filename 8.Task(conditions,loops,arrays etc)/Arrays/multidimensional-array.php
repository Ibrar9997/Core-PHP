<?php

// **********Multidimensional Array*************

$array = [
    [1, "abc", 1000],
    [2, "def", 2000],
    [3, "ink", 3000],
    [4, "lop", 4000]
];


// *************First Method***********

echo "Multidimensional Array First Method <br>";

echo "<pre>";
print_r($array);
echo "</pre>";

// *************Second Method***********

echo "Multidimensional Array Second Method <br>";

echo "<ul>";
for ($row = 0; $row < 4; $row++) {
    for ($col = 0; $col < 3; $col++) {

        echo $array[$row][$col];
    }
    echo "<br>";
}
echo "</ul>";


// *************Third Method***********

echo "Multidimensional Array Third Method <br>";

echo "<table border = '2px' cellpadding = '5px' cellspacing='0' >";

echo "<tr>
    
    <th>ID</th>
    <th>Name</th>
    <th>Salary</th>
    
    </tr>";

foreach ($array as $v1) {
    echo "<tr>";
    foreach ($v1 as $v2) {
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}

echo "</table>";

echo "</table>";

?>