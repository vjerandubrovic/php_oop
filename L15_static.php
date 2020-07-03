<?php 

class Calculator{

    static public $result;

    static function add($a, $b) : int{

        $result = $a + $b;
        return $result;

    }

}

Calculator::$result = Calculator::add(2,5);

echo Calculator::$result . "<br>";

echo Calculator::add(2,5) . "<br>";

?>