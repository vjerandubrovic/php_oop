<?php 

class Calculator{

    public $a;
    public $b;
    public $result;

    function __construct($a, $b){
     
        if(is_float($a) || is_int($a) && is_float($b) || is_int($b) ){

            $this->a = $a;
            $this->b = $b;

        }else{

            echo"Put number in field! <br>";

        }

    }

    function addOperator($operator){

        if($operator === "+"){

           return $this->result = $this->a + $this->b . "<br>";
           return $this;

        }elseif($operator === "-"){

            return $this->result = $this->a - $this->b . "<br>";
            return $this;


        }elseif($operator === "*"){

            return $this->result = $this->a * $this->b . "<br>";
            return $this;


        }elseif($operator === "/"){

            return $this->result = $this->a / $this->b . "<br>";
            return $this;


        }else{
            
            return "Enter valid operator";
            return $this;


        }

    }

    function getResults(){

        echo $this->result;

    }

    function __destruct(){

        $this->a = 0;
        $this->b = 0;
        $this->result = 0; 
        echo "RESET <br>";

    }

}


$calc1 = new Calculator(10,2.5);

$calc1->addOperator("+")->getResults();

$calc1->addOperator("-");

$calc1->addOperator("*");

$calc1->addOperator("/");

$calc1->addOperator("a");

$calc2 = new Calculator(10,"2.5");

?>