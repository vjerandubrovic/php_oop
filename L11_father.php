<?php 

class Family{

    protected $eyes;
    protected $hairColor;
    protected $age;

    function __construct($eyes, $hairColor, $age){
        $this->eyes = $eyes;
        $this->hairColor = $hairColor;
        $this->age = $age;
    }

    function hairColor(){
        echo "He has $this->hairColor hair.<br>";
    }

    function charm(){
        echo "Charming $this->eyes eyes.<br>";
    }

}

class Father extends family{

    function age(){
        echo "His age is $this->age. <br>";
    }

}

class Son extends Family{

    function age(){
        echo "His age is $this->age. <br>";
    }

}

$father = new Father("blue", "brown", 35);
$father->hairColor();
$father->charm();
$father->age();

$son = new Son("blue", "black", 10);

$son->hairColor();
$son->charm();
$son->age();

?>