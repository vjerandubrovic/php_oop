<?php 

class Database{

    function getConnection(){

        echo "Default it is connected to MySQL <br>";
        
    }

}

class OracleDatabase extends Database{

    function getConnection(){

        echo "It is connected to Oracle <br>";
        
    }

}

$db1 = new Database();
$db2 = new OracleDatabase();

$db1->getConnection();
$db2->getConnection();

?>