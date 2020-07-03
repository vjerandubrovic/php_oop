<?php 

class Bank{

    private $balance;
    
    function getBalance(){

        return $this->balance;

    }

    function __construct($balance){

        $this->balance = $balance;

    }


    function depositAmount($amount){

        $this->balance = $this->balance + $amount;

    }

    function deductAmount($amount){

        if($this->balance <= 0){

            echo "No balance in the Account. <br>";
            return $this;

        }elseif($this->balance < $amount){

            echo "Requested Amount is greater than Balance. <br>";
            return $this;

        }else{

            $this->balance = $this->balance - $amount;

        }

        
        
    }

}

$bank1= new Bank(100);

echo $bank1->getBalance() . "<br>";

$bank1->depositAmount(150);

echo $bank1->getBalance() . "<br>";

$bank1->deductAmount(200);

echo $bank1->getBalance() . "<br>";

$bank2= new Bank(100);

echo $bank2->getBalance() . "<br>";

$bank2->depositAmount(10);

echo $bank2->getBalance() . "<br>";

$bank2->deductAmount(200);

echo $bank2->getBalance() . "<br>";

?>