<!--********Static Variable and Function********-->
<!--
    
-->

<!--*******First Method***********-->
<?php

class base
{

    public static $name = "ABC base 1"; //********Static Variable*******

    public static function show()       //********Static Function*******
    {
        echo self::$name;
        echo "<br>";
    }
}

base::show();   //**********Static Function Call**********

?>

<!--*******Second Method***********-->

<?php

class base2
{

    public static $name = "ABC base 2";  //********Static Variable*******
}

echo base2::$name;   //**********Static Variable Call**********
echo "<br>";

?>


<!--*******With Constructer***********-->

<?php

class base3
{

    public static $name = "ABC base 3";  //********Static Variable*******

    public static function show()        //********Static Function*******
    {
        echo self::$name;
        echo "<br>";
    }
    public function __construct($n)
    {
        self::$name = $n;
    }
}

$test = new base3("Form Construct");
$test->show();
?>


<!--*******With Inheritance***********-->

<?php

class base4
{

    public static $name = "ABC base 4";  //********Static Variable*******

}
class c extends base4
{
    public static function show()        //********Static Function*******
    {
        echo parent::$name;
    }
}


$test = new c();
$test->show();
echo "<br>";

?>