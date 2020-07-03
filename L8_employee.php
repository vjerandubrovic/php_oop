<?php 

class Employee{

    public $id;
    public $name;
    public $workingHours = 8;
    public $hourlyRate = 15;
    public $totalLeaveTaken;
    public $workingDays;

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

}

$emp1 = new Employee(101, "Marko", 4);

$salary = $emp1->getSalaryAmount(20);

echo "$emp1->name has worked for $emp1->workingDays and taken $emp1->totalLeaveTaken leaves. <br>";

echo "$emp1->name salary is $salary. <br>";

$emp2 = new Employee(102, "Slavko", 10);

$salary = $emp2->getSalaryAmount(20);

echo "$emp2->name has worked for $emp2->workingDays and taken $emp2->totalLeaveTaken leaves. <br>";

echo "$emp2->name salary is $salary. <br>";


?>