<!--*******Interface*****-->
<!--
    1. Class name (Interface name)
    2. No Properties required in Interface
    3. All function Implements in drived class
-->


<?php

interface p1
{

    function sum($a, $b);
}

interface p2
{

    function sub($c, $d);
}

class c implements p1, p2
{

    public function sum($x, $y)
    {
        echo "Sum of " . " $x " . "and" . " $y " . " = " . $x + $y . "<br>";
    }

    public function sub($x, $y)
    {
        echo "Sub of " . " $x " . "and" . " $y " . " = " . $x - $y . "<br>";
    }
}

$calculation = new c();

$calculation->sum(20, 10);
$calculation->sub(20, 10);


?>