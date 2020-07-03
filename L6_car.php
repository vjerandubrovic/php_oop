<?php 

class Car{

    public $name = "";

    // method get property(name)
    function getName() : string{

        return $this->name;

    }

    // method setName
    function setName($name){

        $this->name = $name;

    }

}

$car1 = new Car();

$car1->setName("BMW");

echo $car1->getName() . "<br>";

$car1->name = "Ferrari";

echo $car1->getName() . "<br>";

$car2 = new Car();

$car2->name = "Hundai";

echo $car1->getName() . "<br>";
echo $car2->getName() . "<br>";

?>