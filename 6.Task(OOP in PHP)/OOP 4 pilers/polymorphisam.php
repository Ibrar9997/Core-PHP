<!--**********Polymorphisam*********-->

<!--
    1. Overriding
    2. Overloading (Overloading does not use in php)
-->

<!--********Overriding*************-->

<?php


class base
{

    public $name = "Base Name";

    public function calc($x, $y)
    {
        echo $x * $y;
    }
}

class derived extends base
{

    public $name = "Derived Name";             

    public function calc($b, $c)               
    {
        echo $b + $c;
    }
}

$test = new derived("");

echo $test->calc(10, 5);

?>