<?php 

trait DatabaseHelper{

    function getRecord(){

        echo "Here are our records";

    }

}

trait StringHelper{

    function removeSpaces($str){

        return trim($str);

    }

}

class Student{
    use DatabaseHelper;
    use StringHelper;
    function connectDB(){
        $this->getRecord();
        echo $this->removeSpaces("   This is a test  !");
    }
}

$student1 = new Student();
$student1->connectDB();

?>