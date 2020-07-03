<?php 

class Chainmethods{

    function method1(){

        echo "Hello from Method1 <br>";
        return $this;

    }

    function method2(){

        echo "Hello from Method2 <br>";
        
    }

}

$cm = new Chainmethods();

$cm->method1()->method2();


?>