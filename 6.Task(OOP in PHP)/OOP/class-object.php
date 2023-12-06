<?php

// *********class****************
class calculation
{
    public $a, $b, $c; // *********Properties**********

    function sum()    // ************Methods***********
    {
        $this->c = $this->a + $this->b;  // ******* "this" is use to access the variable ********
        return $this->c;
    }

    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new calculation();  // ******** c1 is the object ************

$c1->a = 20;
$c1->b = 10;

$c2 = new calculation();   // ******** c2 is the object ************

$c2->a = 20;
$c2->b = 10;

echo "Sum =" . $c1->sum() . "<br>";

echo "Sub =" . $c2->sub() . "<br>";


// ********* Constructor Function*******

class person
{
    public $name, $age;

    function __construct($name = "no name", $age = "0")
    {
        $this->name = $name;
        $this->age = $age;
    }

    function show()
    {
        echo $this->name . "-" . $this->age . "<br>";
    }
}

$p1 = new person();
$p2 = new person("abc", 12);
$p3 = new person("xyz", 34);

$p1->show();
$p2->show();
$p3->show();

?>