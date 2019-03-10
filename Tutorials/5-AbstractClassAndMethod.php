<?php 
// abstract class can't be instantiated

abstract class Animal{
    public $name;
    public $color;

    public function describe(){
        return $this->name.' is '.$this->color;
    }

    public abstract function makeSound();
}

class Dog extends Animal{
    public function describe(){
        return parent::describe();
    }
    public function makeSound(){
        return 'gwapo';
    }
}

$animal = new Dog();

$animal->name="Bryan";
$animal->color="White";
echo $animal->describe();
echo $animal->makeSound();
?>
