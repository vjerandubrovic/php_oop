<?php 

class Chainmethods{

    public $name;

    function method1(){

        echo "Hello from Method1 <br>";
        $this->name = "Chain Methods";
        return $this;

    }

    function method2(){

        echo "Hello from Method2 ($this->name) <br>";
        
    }

}

$cm = new Chainmethods();

$cm->method1()->method2();


?>