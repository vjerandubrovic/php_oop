<?php 

class Animal{

    protected $name;

    protected $ishunting = false;

    function __construct($name, $ishunting){

        $this->name = $name;

        if($ishunting == "yes")

        $this->ishunting = true;

        elseif($ishunting == "no"){

            $this->ishunting = false;

        }else{

            $this->ishunting = false;

        }

    }

    function doesHunting(){

        if($this->ishunting){

            echo "$this->name does hunt!!! ";
            return $this;

        }else{

            echo "$this->name does not hunt. ";
            return $this;
            
        }

    }

}

class Dog extends Animal{

    function makeSound(){

        echo "Vau Vau <br>";
        return $this;

    }

}

class Tiger extends Animal{

    function makeSound(){

        echo "Grrrr Grrrr <br>";
        return $this;
        
    }

}

$tiger1 = new Tiger("Tiger1", "yes");

$tiger2 = new Tiger("Tiger1","no");

$tiger1->doesHunting()->makeSound();

$tiger2->doesHunting()->makeSound();

$dog1 = new Dog("Dog1", "yes");

$dog2 = new Dog("Dog1", "no");

$dog1->doesHunting()->makeSound();

$dog2->doesHunting()->makeSound();



?>