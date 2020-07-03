<?php 

class SubUniversity{

}


class University{

    protected $UniversityName = "Boston University";

    function helloUniversity(){

        echo "Hello from $this->UniversityName! <br>";

    }

}

// only can extends one class
class Teacher extends University{

    public $teacherName = "Jane";

    function helloTeacher(){

        echo "Hello from $this->teacherName! <br>";

    }

    /*function getUniversityName(){

        return $this->UniversityName;

    } */

}

class PartTimeTeacher extends Teacher{

    function getUniversityName(){

        return $this->UniversityName;

    }

}

$teacher1 = new Teacher();

$teacher1->helloTeacher();

$teacher1->helloUniversity();

echo $teacher1->getUniversityName();

$pteacher = new PartTimeTeacher();

echo $pteacher->getUniversityName();

?>