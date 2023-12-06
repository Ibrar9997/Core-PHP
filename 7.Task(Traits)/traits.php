<?php

// **********Traits Declaration**************
trait hello
{
    public function sayhello()
    {
        echo "hello world <br>";
    }
    public function sayhi()
    {
        echo "HI world <br>";
    }
}

// **********Traits Declaration**************
trait bye
{
    public function saybye()
    {
        echo "Bye world <br>";
    }
}


class base2
{

    use hello;        // ************Add Trait in class*************

}

class base
{

    use hello, bye;   // ************Add Multiple Traits in class************* 

}

// ***********OBJ of Base2*************
$test = new base2();
$test->sayhello();
$test->sayhi();

// ***********OBJ of Base*************
$test2 = new base("");
$test2->saybye();



// **************Traits Overriding*************

// *************Function Priorities************

/*
    1. Child Class Function
    2. Traits Function
    3. Extand Class Function
*/

// **********Traits Declaration**************
trait hello2
{
    public function sayhello2()
    {
        echo "hello Form Traits <br>";
    }
}

class base3
{

    public function sayhello2()
    {
        echo "Hello from base";
    }
}

class child extends base3
{

    use hello2;        // ************Add Trait in class*************

    public function sayhello2()
    {
        echo "Hello form Child class <br>";
    }
}

$test3 = new child("");
$test3->sayhello2();


// ***********When we use same name function in different Traits**********

// **********Traits Declaration**************
trait hello3
{
    private function sayhello2()
    {
        echo "Hello Form Traits HELLO <br>";
    }
}

trait hi1
{
    public function sayhello2()
    {
        echo "Hello Form Traits HI <br>";
    }
}

class base4
{

    public function sayhello2()
    {
        echo "Hello from base <br>";
    }
}

class child1 extends base4
{
    use hello3 {
        // **To change Traits function access modifiers and rename traits function**
        hello3::sayhello2 as public newhello;
    }
    use hi1 {
        hi1::sayhello2 insteadof hello3;
    }
}

$test3 = new child1();
$test3->sayhello2();
$test3->newhello();

?>