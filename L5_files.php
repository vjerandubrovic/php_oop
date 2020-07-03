<?php 

class Files{

    public $file;

    function getContent($filename){

       $this->file = file_get_contents($filename);

    }

    function displayContent(){
    
        if(!empty($this->file)){
            
            echo $this->file . "<br>";

        }else{

            echo"Upload file first!!! <br>";
            
        }
        

    }

    


}

$test = new Files();
$test->getContent("Test.txt");
$test->displayContent();

$test1 = new Files();
$test1->getContent("Test1.txt");
$test1->displayContent();

$test2 = new Files();
$test2->displayContent();

class Filez{

    function displayContent($filename){

        if(!file_exists($filename)){

            echo "$filename does not exists! <br>";

        }else{

            echo file_get_contents($filename) . "<br>";

        }

    }

    function getContent($filename){

        if(!file_exists($filename)){

            echo "$filename does not exists! <br>";

        }else{

            return file_get_contents($filename) . "<br>";

        }

    }

}

$test3 = new Filez();
$test3->displayContent("Test.txt");
echo $test3->getContent('Test.txt');

?>