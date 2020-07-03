<?php


class Posts
{
    public $content;

    function __construct($content){
        
        $this->content = $content;

    }

    function __destruct(){
        echo "This is Destructor!" . PHP_EOL;
    }

    function printContent(){

        echo $this->content . "<br>";
        return $this;

    }

}

$post1 = new Posts("This is a Post Content");
//Print and Get the $content property from the $post1 at the same time.

echo $content = $post1->printContent()->content;