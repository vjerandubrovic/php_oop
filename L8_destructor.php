<?php 

class Posts{

    function __construct(){

        // Initialize the Value
        echo "This is Constructor <br>";

    }

    function __destruct(){

        // Close the connection or empty the space
        echo "This is Destructor <br>";

    }

}

$post1 = new Posts();

?>