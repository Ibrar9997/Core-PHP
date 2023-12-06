<?php

// **********For Loop*************

echo "<br> For Loop <br>";

for ($for = 1; $for <= 5; $for++) {             // **********Initialization -- Condition -- Increment/Decrement************
    echo $for . ") Hello From For Loop <br>";
}


// **********While Loop*************

echo "<br> While Loop <br>";

$while = 1;                                    // **********Initialization************ 

while ($while <= 5) {                              // **********Condition************
    echo $while . ") Hello From While Loop <br>";
    $while = $while + 1;                       // **********Increment/Decrement************
}


// **********Do-While Loop*************

echo "<br>Do-While Loop <br>";


$do = 1;                                        // **********Initialization************ 

// ****Do while loop run atlest one time if condition is false****

do {
    echo $do . ") Hello From Do-While Loop <br>";
    $do++;                                      // **********Increment/Decrement************
} while ($do <= 5);                                  // **********Condition************


// **********Foreach Loop*************

// *******Foreach Loop mostly use for arrays********

echo "<br>Foreach Loop <br>";

$age = [
    "ABC" => 25,
    "XYZ" => 30,
    "ASD" => 22,
];

foreach ($age as $key => $value) {
    echo    "$key = $value <br>";
}

// **********For Loop*************

echo "<br>Nested Loop <br>";

for ($a = 1; $a <= 5; $a++) {             // **********Initialization -- Condition -- Increment/Decrement************

    // *******Nested For Loop********
    for ($b = 1; $b <= $a; $b++) {             // **********Initialization -- Condition -- Increment/Decrement************
        echo $a . ") Hello From For Loop <br>";
    }
}

?>