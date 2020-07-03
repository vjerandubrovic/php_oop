<?php 

class Users{

    private $name;

    function __get($name){

        echo "Dont have acces to property <br>";

    }

    function __set($name, $value){

        echo "Dont have acces to change property <br>";

    }

    function __call($name, $argument){

        echo "That method don't exists <br>";

    }

    function __toString(){

        return "No echo to object <br>";

    }

    function __debugInfo(){

        echo "No var_dump to object <br>";

    }

}

$user = new Users();

$user->name;

$user->name = "Ante";

$user->blabla("sad");

echo $user;

var_dump($user);

?>