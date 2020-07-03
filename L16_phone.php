<?php 

interface Phone{

    function makeCall($number);

    function sendMessage($number, $message);

}

class iOS implements Phone{

    private $number;
    private $message;

    function makeCall($number){
        $this->number = $number;
        echo "Calling number $this->number <br>";

    }

    function sendMessage($number, $message){

        $this->number = $number;
        $this->message = $message;
        echo "Message was sent to $this->number <br>";
        echo "$this->message <br>";

    }

}

class Android implements Phone{

    private $number;
    private $message;

    function makeCall($number){

        $this->number = $number;
        echo "Calling $this->number <br>";

    }

    function sendMessage($number, $message){

        $this->number = $number;
        $this->message = $message;
        echo "Your message has been sent to $this->number <br>";
        echo "$this->message <br>";
        
    }

}

$iOS = new iOS();
$Android = new Android();

$iOS->makeCall("09892212");
$iOS->sendMessage("09892212", "Hello there!");

$Android->makeCall("09892212");
$Android->sendMessage("09892212", "Hello there!");

?>