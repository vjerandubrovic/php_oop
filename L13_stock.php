<?php 

interface Stock{

    function showWoodStock();

    function addWoodStock($wood);

    function deductWoodStock($wood);

}

class MyStock implements Stock{

    private $woodStock;

    function showWoodStock(){
        echo "$this->woodStock <br>";
        return $this;
    }

    function addWoodStock($wood){
        $this->woodStock = $this->woodStock + $wood;
        return $this;
    }

    function deductWoodStock($wood){
        $this->woodStock = $this->woodStock - $wood;
        return $this;
    }

}

$wood = new MyStock();

$wood->addWoodStock(100)->showWoodStock();
$wood->deductWoodStock(10)->showWoodStock();


?>