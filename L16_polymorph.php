<?php 

interface Database{

    function openConnection();

}

class OracleDatabase implements Database{

    function openConnection(){

        echo "Using the Oracle Driver to establish the connection <br>";

    }

}

class MysqlDatabase implements Database{

    function openConnection(){

        echo "Using the MySQL Driver to establish the connection <br>";

    }

}

$Oracle = new OracleDatabase();
$Oracle->openConnection();

$MySQL = new MysqlDatabase();
$MySQL->openConnection();

?>