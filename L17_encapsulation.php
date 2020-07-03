<?php 

class Post{

    private $post = "";

    function setPost($post){
        $this->post = $post;
    }

    function getPost() : string{

        return $this->post;

    }

}

$post1 = new Post();
$post1->setPost("This is first post!");
echo $post1->getPost();

?>