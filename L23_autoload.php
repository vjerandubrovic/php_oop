<?php 

spl_autoload_register(function($classname){
    echo "Loading the class: $classname <br>";
    require_once("$classname.php");
});

$file1 = new L23_files();
$file1->hello();

$db = new L23_database();
$db->hello();

// KADA SE NALAZI U DRUGOM FOLDERU

// <?php namespace Library;

// class L23_database{

//     function hello(){
//         echo "Hello from Database class! <br>";
//     }

// }

//

// $file1 = new Library\L23_files();
// $file1->hello();

// $db = new Library\L23_database();
// $db->hello();


?>






