<?php 

class University{

    function hello(){

        echo "Hello from University Class <br>";

    }
    
}

class Teacher extends University{

    // Overriding
    function hello(){

        echo "Hello from Teacher Class <br>";
        
        parent::hello();

    }

}

$teacher1 = new Teacher();

$teacher1->hello();


?>