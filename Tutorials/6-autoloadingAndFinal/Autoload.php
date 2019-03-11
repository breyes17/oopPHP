<?php 

// You can also add 'final' before the 'class' or 'method'. In this way class/method cannot be overriden.

class Autoload{
    public function Hello(){
        echo 'Hello from Autoload';
    }
}


class Autoload2 extends Autoload{
    public function Hello(){
        echo 'Hello from Autoload2';
    }
}

?>