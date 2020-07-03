<?php 

class Car{

    public $name;
    public $color;

    function sayHello(){

        echo "Hello from Car Class <br>";

    }

}

$car = new Car();

$car->name = "Ferrari";

$car->color = "Red";

$car->sayHello();

echo "$car->name is $car->color Color. <br>";

$car1 = new Car();

$car1->name = "Lamborgini";

$car1->color = "Black";

$car1->sayHello();

echo "$car1->name is $car1->color Color. <br>";


?>