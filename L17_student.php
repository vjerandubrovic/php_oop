<?php 

class Student{

    private $id;
    private $name;
    private $class;

    function setId($id){

        $this->id = $id;
        return $this;

    }

    function getId(){

        return $this->id;

    }

    function setName($name){

        $this->name = $name;
        return $this;

    }

    function getName(){

        return $this->name;

    }

    function setClass($class){

        $this->class = $class;
        return $this;

    }

    function getClass(){

        return $this->class;

    }

}

$student1 = new Student();
$student1->setId(1)->setName("Marko")->setClass("PHP");
echo $student1->getId();
echo $student1->getName();
echo $student1->getClass();

?>