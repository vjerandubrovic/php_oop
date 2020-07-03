<?php 

class Student{

    private $id;
    private $name;

    function __set($name, $value){

        echo "Set methods is not found so this is called <br>";

        // echo $name . "<br>";

        // echo $value . "<br>";

        if($name == "id"){
            $this->id = $value;
        }

    }

    function __get($name){

        echo "Get methods is not found so this is called <br>";

        // echo $name . "<br>";

        if($name == "id"){
            echo $this->id;
        }

    }

}

$student = new Student();
$student->id = "Test";
echo $student->id;

?>