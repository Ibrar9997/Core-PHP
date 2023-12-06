<?php
/* *****Access Modifiers********* */
// Public       call any where
// Private      call only within function
// Protected    call only within function or Extends class


// **********Public*********** 

class base
{
    public $name;   // *****Public Properties **********

    public function __construct($n)  // ******** Public Function *********
    {
        $this->name = $n;
    }

    public function show()  // ******** Public Function *********
    {
        echo "Your class : " . $this->name . "<br>";
    }
}

$test = new base("Public");

$test->name ="Public_2";  // *******In Public Properties value can be change at any stage ********

$test->show();



// **********Protected***********

class pro
{
    protected $name;   // *****Protected Properties **********

    public function __construct($n)  // ******** Public Function *********
    {
        $this->name = $n;
    }

    Protected function show()  // ******** Protected Function *********
    {
        echo "Your class : " . $this->name . "<br>";
    }
}

class sec extends pro{
    public function get(){
        echo "Your class : " . $this->name . "<br>";
    }
}

$test = new sec("Protected");

// $test->name ="ALI";  // *******In Protected Properties value can not be change ********

$test->get();


// **********Private*********** 

class pri
{
    Private $name;   // *****Private Properties **********

    public function __construct($n)  // ******** Public Function *********
    {
        $this->name = $n;
    }

    public function show()  // ******** Public Function *********
    {
        echo "Your Class : " . $this->name . "<br>";
    }
}
class second extends pri{
    public function get(){
        //echo "Your Name : " . $this->name . "<br>"; // *******In private Properties value can not be change outside class ********
    }
}

$test = new pri("Private");

//$test->name ="ALI";  // *******In private Properties value can not be change outside class ********

$test->show();

?>