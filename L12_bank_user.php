<?php 

final class Bank{

    private $balance;

    final function __construct($balance){
        $this->balance = $balance;
    }

    final function getBalance(){
        echo "$this->balance <br>";
        return $this;
    }

    final function depostiAmount($amount){

        $this->balance = $this->balance + $amount;
        return $this;

    }

    final function deductAmount($amount){

        if($this->balance > $amount){
            $this->balance = $this->balance - $amount;
            return $this;
        }else{
            echo "Not enough money <br>";
        }
        
    }
    
}

// class User extends Bank{

//     // function depostiAmount($amount){

//     //     $this->balance = $this->balance * $amount;
//     //     return $this;

//     // }
    
// }

$bank = new Bank(0);

$bank->depostiAmount(1000)->getBalance();
$bank->deductAmount(300)->getBalance();

// $user = new User(0);
// $user->depostiAmount(1000)->getBalance();

//echo $user->balance;

?>