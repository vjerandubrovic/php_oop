<?php 

class Database{

    public $db = "Oracle";
    public $dbname = "Students";
    public $tablename = "tbl_users";

    function hello(){

        return "hello <br>";

    }

    function __debugInfo(){
        echo "Take the control to print the variables <br>";
    }

}

$db = new Database();

var_dump($db);

?>