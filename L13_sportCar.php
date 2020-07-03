<?php 

require_once "L13_car.php";
require_once "L13_carModel.php";

class SportCar implements Car, CarModel{

    public $model;

    public function applyBreak(){

        echo "Applying Breaks <br>";

    }

    public function increaseSpeed(){

        echo "Increasing Speed <br>";

    }

    public function decreaseSpeed(){

        echo "Decreasing Speed <br>";
        
    }

    public function setModel($model){

        $this->model = $model;

    }

    public function getModel():string{

        return $this->model;

    }

}

?>