<?php 

class Student{

    public $name;
    public $class;

    // default
    function __construct($name = "", $class = ""){

        $this->name = $name;
        $this->class = $class;

    }

    function printDetails(){

        echo "$this->name is studing in $this->class class. <br>";

    }


}

//put values in constructor
$student = new Student("John", "1st");

$student->printDetails();


?>