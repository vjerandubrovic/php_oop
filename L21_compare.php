<?php 

class Posts{

    public $post;

    function __construct($post){

        $this->post = $post;

    }

}

// identity operator ===
function compare1(&$obj1, &$obj2){
    if($obj1 === $obj2){
        return true;
    }else{
        return false;
    }
}

// comparison operator ==
function compare2(&$obj1, &$obj2){
    if($obj1 == $obj2){
        return true;
    }else{
        return false;
    }
}

$post1 = new Posts("This is the First Posts");

$post2 = new Posts("This is the First Posts");

echo compare1($post1, $post2) ? "SAME" : "DIFFRENT"; // diffrent druga instanca(objekt)

echo "<br>";

$post3 = $post1;

echo compare1($post1, $post3) ? "SAME" : "DIFFRENT"; // same ista instanca(objekt)

echo "<br>";


$post4 = clone $post1;

echo compare1($post1, $post4) ? "SAME" : "DIFFRENT"; // diffrent druga instanca clone

echo "<br>";

echo compare2($post1, $post2) ? "SAME" : "DIFFRENT"; // same isti property ==

echo "<br>";



?>