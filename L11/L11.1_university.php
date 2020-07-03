<?php 

class University{

    public $universityName;

    public $universityAddress;

    public $licenseNo;

    function __construct($universityName, $universityAddress, $licenseNo){

        $this->universityName = $universityName;

        $this->universityAddress = $universityAddress;

        $this->licenseNo = $licenseNo;

    }

    function printUniversityDetails(){

        echo "University name: $this->universityName <br>";

        echo "University address: $this->universityAddress <br>";

        echo "University license: $this->licenseNo <br>";

    }

}

?>