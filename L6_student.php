<?php 

class Student{

    public $name;
    public $class;

    function getName(){

        return $this->name;

    }

    function setName($set_name){

        $this->name = $set_name;

    }

    function getClass(){

        return $this->class;

    }

    function setClass($set_class){

        $this->class = $set_class;        

    }

    function printDetails(){

        echo "Student name is $this->name and is going to $this->class class! <br>";

    }

}

$student1 = new Student();

$student1->setName("John");

$student1->setClass("PHP");

$student1->printDetails();

$student2 = new Student();

$student2->setName("Anna");

$student2->setClass("Javascript");

$student2->printDetails();

?>