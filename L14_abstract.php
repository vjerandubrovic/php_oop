<?php 

abstract class Car{

    abstract function applyBreak();

    function hello(){

        echo "Hello from Car Class <br>";

    }

}

class SportsCar extends Car{

    function applyBreak(){

    }

}

$car1 = new SportsCar();
$car1->applyBreak();
$car1->hello();

// cannot create abstract class
// $c = new Car();

?>