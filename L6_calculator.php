<?php 

class Calculator{

    public $a;
    public $b;
    public $result = 0;

    function getA(){
        
        return $this->a;

    }

    function setA($set_a){

        $this->a = $set_a;

    }

    function getB(){

        return $this->b;

    }

    function setB($set_b){
        
        $this->b = $set_b;

    }

    function addMethod($method){

        if($method === "+"){

            $this->result = $this->a + $this->b;

        }elseif($method === "-"){

            $this->result = $this->a - $this->b;

        }elseif($method === "*"){

            $this->result = $this->a * $this->b;

        }elseif($method === "/"){

            $this->result = $this->a / $this->b;

        }else{
            
            $this->result = 0;
            echo "Enter valid operator <br>";

        }

    }

    function getResults(){

        echo $this->result . "<br>";

    }

}


$calc1 = new Calculator();

$calc1->setA(5);
$calc1->setB(2);
$calc1->addMethod("+");
$calc1->getResults();

$calc1->addMethod("-");
$calc1->getResults();

$calc1->addMethod("*");
$calc1->getResults();

$calc1->addMethod("/");
$calc1->getResults();

$calc1->addMethod("a");
$calc1->getResults();

?>