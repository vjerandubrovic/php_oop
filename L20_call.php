<?php 

class Posts{

    function __call($name, $arguments){

        echo $name . "<br>";

        var_dump($arguments);

    }

}

$post1 = new Posts();

$post1->createPosts("this is a test", 10);

?>