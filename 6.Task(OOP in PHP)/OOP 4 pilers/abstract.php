<!--****Abstract******-->
<!--
    1. Name of class starts with abstract example (abstract class A)
    2. Atleast one abstract method required (Only declare not Implement)
    3. Should be implement in drived class
-->

<?php

abstract class parentclass
{
    public $name;

    abstract protected function calc($a, $b);
}

class childclass extends parentclass
{

    public function calc($x, $y)
    {
        echo "Multiple of  " . "$x " . "and" . " $y" . " = " . $x * $y;
    }
}

$calculation = new childclass();

$calculation->calc(3, 5);

?>