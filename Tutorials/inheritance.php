<?php

class First{
    public $id=1;
    public $name = "juan";

    public  function greet($name){
        echo "Hello ".$name;
    }
}

class Second extends First{

}

$sec = new Second;
echo $sec->name;
$sec->greet('test');
?>