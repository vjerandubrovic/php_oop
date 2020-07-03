<?php 

trait DatabaseHelper{

    function getRecord(){

        echo "Here are our records";

    }

}

class Student{
    use DatabaseHelper;
    function connectDB(){
        $this->getRecord();
    }
}

$student1 = new Student();
$student1->connectDB();

?>