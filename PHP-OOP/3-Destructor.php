<?php 

class Fruit 
{
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    //this function fill called when the object is destroyed (script exexution stop)
    public function __destruct(){
        echo $this->name;
    }
}

$apple = new Fruit("Apple");