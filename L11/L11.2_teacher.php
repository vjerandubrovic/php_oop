<?php

class Teacher extends University{

    public $teacherName;

    public $teacherAge;

    public $subject;

    function __construct($teacherName, $teacherAge, $subject, University $university){

        $this->teacherName = $teacherName;

        $this->teacherAge = $teacherAge;

        $this->subject = $subject;

        //--------PARENT DETAILS-------------------

        $this->universityName = $university->universityName;

        $this->universityAddress = $university->universityAddress;

        $this->licenseNo = $university->licenseNo;

    }

    function printTeacherDetails(){

        echo "Teacher name: $this->teacherName <br>";

        echo "Teacher age: $this->teacherAge <br>";

        echo "Subject: $this->subject <br>";

    }

}


?>