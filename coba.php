<?php
class laptop{
    public $name;
    public $processor;

    function intro(){
        return $this->name . " - " . $this->processor;
    }
}

$hp =new laptop();
$hp->name = "HP";
$hp->processor = "intel i5";

echo $hp->intro();
?>