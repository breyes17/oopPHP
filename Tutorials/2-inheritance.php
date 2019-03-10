<?php

class First{
    public $id=1;
    public $name = "juan";
    private $lname ="tamad";// cannot be access on its child class
    protected $lastname = "lazy"; // it will throw an error if directly access in child class. Need to put in a function to work

    public  function greet($name){
        echo "Hello ".$name."<br/>";
    }
}

class Second extends First{
    public function getLastname(){
        echo $this->lastname;
    }
}

$sec = new Second;
echo $sec->name;

$sec->greet('test');

$sec->getLastname();
?>