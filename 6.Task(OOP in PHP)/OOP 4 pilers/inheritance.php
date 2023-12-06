<?php

class employee  // ******Class*******
{
    public $name, $age, $salary;

    function __construct($n = null, $a = null, $s = null)  // *********Contructor Function**********
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info()      // ********* Show Data ************
    {
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name : " . $this->name . "<br>";
        echo "Employee age : " . $this->age . "<br>";
        echo "Employee salary : " . $this->salary . "<br>";
    }
}

class manager extends employee   // ************ Inherit Class ***********
{
    public $ta = 1000;
    public $ph = 500;
    public $totalsalary;

    function info()
    {
        $this->totalsalary = $this->salary + $this->ta + $this->ph;

        echo "<h3>Manager Profile</h3>";
        echo "Employee Name : " . $this->name . "<br>";
        echo "Employee age : " . $this->age . "<br>";
        echo "Employee salary : " . $this->totalsalary . "<br>";
    }
}

$e1 = new manager("ABC", 22, 11000);
$e2 = new employee("XYZ", 24, 2000);

$e1->info();
$e2->info();

?>

<!--*****MultiLevel Inheritance*****

class A-> class B(B extends A) -> class C(C extends B)

class A: Have own Properties and Methods and he can not use B and C class Properties and Methods.

class B: Have own Properties and Methods and he can only use A class Properties and Methods.

class C: Have own Properties and Methods and he can use both A and B class Properties and Methods.

-->