<?php 

require_once "L13_car.php";
require_once "L13_sportCar.php";

$car1 = new SportCar();

$car1->setModel("Ferrari");

echo "Car Model: " . $car1->getModel() . "<br>";

$car1->increaseSpeed();

$car1->decreaseSpeed();

$car1->applyBreak();


?>