<?php 

class Student{

    public $name = "John";
    public $class = "1st";

    // Magic method
    // for putting var in default value / execute automaticly at creating object
    function __construct(){

        $this->name = "";
        $this->class = "";
        echo "Hello from constructor :) <br>";

    }

    function printDetails(){

        echo "$this->name is studing in $this->class class. <br>";

    }


}

$student = new Student();

$student->printDetails();


?>