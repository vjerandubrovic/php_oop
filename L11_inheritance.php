<?php 

class SubUniversity{

}


class University{

    public $UniversityName = "Boston University";

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

}

$teacher1 = new Teacher();

$teacher1->helloTeacher();

$teacher1->helloUniversity();

echo $teacher1->teacherName . "<br>";

echo $teacher1->UniversityName . "<br>";

?>