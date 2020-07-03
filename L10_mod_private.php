<?php 

class Dog{

    private $color;
    private $breed;

    function getColor() : string{

        return $this->color;

    }

    function setColor($color){

        $this->color = $color;
        
    }

    function getBreed() :string{

        return $this->breed;

    }

    function setBreed($breed){

        $this->breed = $breed;
        
    }

    public function dogBark(){

        echo "Woof! Woof! <br>";
        $this->dogSleep();

    }

    private function dogSleep(){

        echo "ZZZZZZZZZZzzzzzzzz <br>";

    }

}

$dog1 = new Dog();

$dog1->setColor("Black");

$dog1->setBreed("German Shepard");

$dog1->dogBark();




?>