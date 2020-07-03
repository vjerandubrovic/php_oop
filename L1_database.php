<?php 

class Database{

    // Properties
    public $connection;
    public $records;

    // funkcija za spajanje na bazu
    function openConnection() : bool{}

    // funkcija da uzme iz baze
    function fetchRecord($id) : array{}

    // ubaciti podatke
    function insertRecords($data) : bool{}
    
    // promjeniti podatke
    function updateRecords($id): bool{}

    // izbrisati podatke
    function deleteRecords($id): bool{}

}


?>