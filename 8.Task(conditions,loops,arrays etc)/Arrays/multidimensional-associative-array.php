<?php

// **********Multidimensional Associative Array*************

$array = [
    [1, "abc", 1000],
    [2, "def", 2000],
    [3, "ink", 3000],
    [4, "lop", 4000]
];

// *************First Method***********

echo "Multidimensional Associative Array First Method <br>";

echo "<pre>";
print_r($array);
echo "</pre>";



// *************Second Method***********

echo "Multidimensional Associative Array Second Method <br>";

echo "<table border = '2px' cellpadding = '5px' cellspacing='0' >";

echo "<tr>
    
    <th>ID</th>
    <th>Name</th>
    <th>Salary</th>
    
    </tr>";

foreach ($array as $key => $v1) {
    echo "<tr>
    <td>$key</td>";
    foreach ($v1 as $v2) {
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}

echo "</table>";

echo "</table>";

?>