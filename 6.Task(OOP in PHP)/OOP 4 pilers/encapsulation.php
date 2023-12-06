
<!--*******Encapsulation********-->

<!--
    *Use to Protect data
-->

<?php
class car{
    protected $model = "Civic";

    protected function getmodel(){
        return $this->model;
    }
}

class Honda extends car{
    public function getmodel(){
        return $this->model;
    }
}

$carobj = new Honda();
echo $carobj->getmodel();

?>