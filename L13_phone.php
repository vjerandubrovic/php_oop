<?php 

interface Phone{

    function makeCall($number);

    function sendMessage($number, $message);

}

class iOS implements Phone{

    protected $number;
    protected $message;

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

$phone1 = new iOS();
$phone1->makeCall("092954390");
$phone1->sendMessage("092954390", "Hello. How are you?");


?>