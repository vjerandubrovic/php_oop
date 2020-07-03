<?php 

class Teacher{

    public $name = "This is a test";

    function __toString() : string{

        echo "Name: " . $this->name . "<br>";
        return "To string Method is called <br>";
    }

}

$teacher = new Teacher();

//echo $teacher->name;
echo $teacher;

?>