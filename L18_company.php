<?php 

abstract class Company{

    protected $name;

    function setName($name){

        $this->name = $name;

    }

    function getName(){

        return $this->name;
        
    }

    abstract function setExpert($subject);

}

class Employee extends Company{

    protected $subject;

    function setExpert($subject){

        $this->subject = $subject;

    }

}

?>