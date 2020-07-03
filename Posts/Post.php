<?php

require_once("Database.php");

class Post{

    private $db;

    function __construct(){

        $this->db = new Database();

    }

    function getPosts(){
        $this->db->query("SELECT * FROM tbl_posts");
        return $this->db->resultSet();
    }

    function getPostById($id){

        $this->db->query("SELECT * FROM tbl_posts WHERE id = :id");

        $this->db->bind(":id", $id);

        return $this->db->single();

    }

    function addPost($data){
        $this->db->query("INSERT INTO tbl_posts (title, content) VALUES(:title, :content)");

        $this->db->bind(":title", $data["title"]);
        $this->db->bind(":content", $data["content"]);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    function updatePost($data){
        $this->db->query("UPDATE tbl_posts SET title = :title, content = :content WHERE id = :id");

        $this->db->bind(":id", $data["id"]);
        $this->db->bind(":title", $data["title"]);
        $this->db->bind(":content", $data["content"]);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }

    function deletePost($id){

        $this->db->query("DELETE FROM tbl_posts WHERE id = :id");

        $this->db->bind(":id", $data["id"]);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }

}

?>