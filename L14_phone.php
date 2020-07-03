<?php 

abstract class Phone{

    private $number;
    private $message;

    abstract function makeCall($number);

    abstract function sendMessage($number, $message);

}

class iOS extends Phone{

    function makeCall($number){

        $this->number = $number;
        echo "Calling $this->number <br>";

    }

    function sendMessage($number, $message){

        $this->number = $number;
        $this->message = $message;
        echo "Message sent to $this->number <br>";
        echo "$this->message <br>";

    }

}

$phone = new iOS();
$phone->makeCall("093243435");
$phone->sendMessage("093243435", "Hi. What are you doing?");

?>