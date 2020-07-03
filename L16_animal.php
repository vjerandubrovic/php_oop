<?php

interface Animal{

    function makeSound();

}

class Dog implements Animal{

    function makeSound(){
        
        echo "Vau Vau <br>";

    }

}

class Cat implements Animal{

    function makeSound(){

        echo "Miau Miau <br>";

    }

}

$dog = new Dog();
$cat = new Cat();

$dog->makeSound();
$cat->makeSound();

?>