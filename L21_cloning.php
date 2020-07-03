<?php 

class Posts{

    public $post;

    function __construct($post){

        $this->post = $post;

    }

}

$post1 = new Posts("This is the First Post.");

$post2 = $post1; // Copy by Reference

$post1->post = "This is Modified";

echo "$post2->post <br>";

// oba se mjenjaju

$post2->post = "This is Modified TOO";

echo "$post1->post <br>";

// cloniranje copy

$post1 = new Posts("This is the First Post.");

$post2 = clone $post1; // Cloning

$post1->post = "This is Modified";

echo "$post2->post <br>";



?>