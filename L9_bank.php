<?php 

class Bank{

    public $accon;

    public $name;

    public $balance = 0;

    function __construct($accon, $name){

        $this->accon = $accon;

        $this->name = $name;

    }

    function depositAmount($amount){

        //
        $this->balance = $this->balance + $amount;
        return $this;

    }

    function deductAmount($amount){

        if($this->balance >= $amount){

            $this->balance = $this->balance - $amount;
            return $this;

        }else{

            echo "Not enough balance to deduct <br>";
            return $this;

        }

    }

    function checkBalance(){

        echo "$this->name has $this->balance money. <br>";
        return $this;

    }

}

$user = new Bank(1, "Marko");

$user->depositAmount(100)->checkBalance();

echo $user->deductAmount(30)->checkBalance()->balance . "<br>";


$user1 = new Bank(2, "Slavko");

$user1->depositAmount(100)->checkBalance();

$user1->depositAmount(100)->checkBalance();

$user1->deductAmount(220)->checkBalance();


?>