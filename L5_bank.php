<?php 

class Bank{

    public $accon;

    public $name;

    public $balance = 0;

    function depositAmount($amount){

        //
        $this->balance = $this->balance + $amount;

    }

    function deductAmount($amount){

        if($this->balance >= $amount){

            $this->balance = $this->balance - $amount;

        }else{

            echo "NEMAS TOLIKO PARA DA UZMEŠ! <br>";

        }

        

    }

    function checkBalance(){

        echo "$this->name has $this->balance money. <br>";

    }

}

$user = new Bank();
$user->accon = 1;
$user->name = "Marko";
$user->depositAmount(100);
$user->deductAmount(30);
$user->checkBalance();

$user1 = new Bank();
$user1->accon = 2;
$user1->name = "Slavko";
$user1->depositAmount(100);
$user1->depositAmount(100);
$user1->deductAmount(120);
$user1->checkBalance();

?>