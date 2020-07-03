<?php 

class University{

    public $UniversityName = "Boston University";

    function helloUniversity(){

        echo "Hello from $this->UniversityName! <br>";

    }

}

class Teacher extends University{

    public $teacherName = "Jane";

    private $workingHours = 40;

    function helloTeacher(){

        echo "Hello from $this->teacherName! <br>";

    }

    function calculateSalary($perHour) : int{

        return $perHour * $this->workingHours;

    }

}

class PartTimeTeacher extends Teacher{

    public $teacherName = "June";

    private $workingHours = 8;

    function helloTeacher(){

        echo "Hello from $this->teacherName! <br>";

    }

    function calculateSalary($perHour) : int{

        return $perHour * $this->workingHours;

    }

}

$teacher1 = new PartTimeTeacher();

$teacher1->helloUniversity();

$teacher1->helloTeacher();

echo $teacher1->calculateSalary(10) . "<br>";


$teacher2 = new Teacher();

$teacher2->helloUniversity();

$teacher2->helloTeacher();

echo $teacher2->calculateSalary(10) . "<br>";





?>