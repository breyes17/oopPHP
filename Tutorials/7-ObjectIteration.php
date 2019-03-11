<?php

class People{
    public $person1 = "Bryan";
    public $person2 = "Michelle";
    public $person3 = "Kobe";
    public $person4 = "Xerxes";

    protected $person5 = "Papa";
    private $person6 = "Mama";

    function Iterate(){
        foreach($this as $key => $value){
            echo "$key => $value ";
        }
    }
}

$p = new People;

foreach($p as $key => $value){
    echo "$key => $value ";// access only the public properties
}

// $p->Iterate(); // access the whole properties
?>