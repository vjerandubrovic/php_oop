<?php 

class Employee{

    private $id;
    private $name;
    private $workingHours = 8;
    private $hourlyRate = 15;
    private $totalLeaveTaken;
    private $workingDays;

    function __construct($id, $name, $totalLeaveTaken){

        $this->id = $id;
        $this->name = $name;
        $this->totalLeaveTaken = $totalLeaveTaken;

    }

    function getSalaryAmount($totalDays) :int{

        $this->workingDays = $totalDays - $this->totalLeaveTaken;

        $salary = $this->workingDays * $this->workingHours * $this->hourlyRate;

        return $salary;

    }

    function getName(){

        return $this->name;

    }

    function getWorkingDays(){

        return $this->workingDays;

    }

    function getTotalLeaveTaken(){

        return $this->totalLeaveTaken;

    }

}

$emp1 = new Employee(101, "Marko", 4);

$salary = $emp1->getSalaryAmount(20);

echo $emp1->getName() . " has worked for " . $emp1->getWorkingDays() . " and taken " . $emp1->getTotalLeaveTaken() . " leaves. <br>";

echo $emp1->getName() . " salary is $salary. <br>";

$emp2 = new Employee(102, "Slavko", 10);

$salary = $emp2->getSalaryAmount(20);

echo $emp2->getName() . " has worked for " . $emp2->getWorkingDays() . " and taken " . $emp2->getTotalLeaveTaken() . " leaves. <br>";

echo $emp2->getName() . " salary is $salary. <br>";


?>