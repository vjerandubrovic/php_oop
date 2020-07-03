<?php 

class Car{

    private $brand;
    private $color;
    private $maxspeed;

    function __construct($brand, $color, $maxspeed){

        $this->brand = $brand;

        $this->color = $color;

        $this->maxspeed = $maxspeed;

    }

    function setBrand($set_brand){

        $this->brand = $set_brand;
        return $this;
        
    }

    function getBrand(){

        return $this->brand;
        return $this;

    }

    function setColor($set_color){

        $this->color = $set_color;
        return $this;

    }

    function getColor(){

        return $this->color;
        return $this;

    }

    function setMaxspeed($set_maxspeed){

        $this->maxspeed = $set_maxspeed;
        return $this;

    }

    function getMaxspeed(){

        return $this->maxspeed;
        return $this;

    }

    function increaseSpeed(){
        
        for ($increase = 0; $increase <= $this->maxspeed; $increase++) { 

            echo $this->getColor() . " " . $this->getBrand() . " is accelerating " . $increase . "<br>";
            
        }
        
        return $this;

    }

    function decreaseSpeed(){

        for ($decrease = $this->maxspeed; $decrease >= 0; $decrease--) { 

            echo $this->getColor() . " " . $this->getBrand() . " is decelerating " .  $decrease . "<br>";
            
        }

        return $this;

    }

}

$car1 = new Car("BMW", "Black", 250);

$car1->setMaxspeed(100)->setColor("White")->setBrand("Yugo")->increaseSpeed()->decreaseSpeed();

?>