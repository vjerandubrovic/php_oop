<?php 

class Employee{

    public $id;
    public $name;
    public $workingHours = 8;
    public $hourlyRate = 15;
    public $totalLeaveTaken;
    public $workingDays;

    function getSalaryAmount($totalDays) :int{

        $this->workingDays = $totalDays - $this->totalLeaveTaken;

        $salary = $this->workingDays * $this->workingHours * $this->hourlyRate;

        return $salary;

    }

}

$emp1 = new Employee();
$emp1->id = 101;
$emp1->name = "Marko";
$emp1->totalLeaveTaken = 4;

$salary = $emp1->getSalaryAmount(20);

echo "$emp1->name has worked for $emp1->workingDays and taken $emp1->totalLeaveTaken leaves. <br>";

echo "$emp1->name salary is $salary. <br>";

$emp2 = new Employee();
$emp2->id = 101;
$emp2->name = "Slavko";
$emp2->totalLeaveTaken = 10;

$salary = $emp2->getSalaryAmount(20);

echo "$emp2->name has worked for $emp2->workingDays and taken $emp2->totalLeaveTaken leaves. <br>";

echo "$emp2->name salary is $salary. <br>";


?>