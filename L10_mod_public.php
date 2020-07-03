<?php 

class Dog{

    public $color;
    public $breed;

    public function dogBark(){

        echo "Woof! Woof! <br>";

    }

    public function dogSleep(){

        echo "ZZZZZZZZZZzzzzzzzz <br>";

    }

}

$dog1 = new Dog();

$dog1->color = "black";

$dog1->breed = "German Shepard";

$dog1->dogBark();

$dog1->dogSleep();


?>