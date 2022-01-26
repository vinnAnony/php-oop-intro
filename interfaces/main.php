<?php

interface Vehicle {
    public function setModel($name);

    public function getModel();
}

interface Motor extends Vehicle
{
    public function setIsAutomatic($bool);

    public function getIsAutomatic();
}

class Car implements Motor {
    private $model;
    private $isAutomatic;

    public function setModel($name)
    {
        $this -> model = $name;
    }

    public function getModel()
    {
        return $this -> model;
    }

    public function setIsAutomatic($bool)
    {
        $this -> isAutomatic = $bool;
    }

    public function getIsAutomatic()
    {
        return ($this -> isAutomatic)? "Automatic" : "Manual";
    }
}

$mercedes = new Car();
$mercedes->setIsAutomatic(true);
$mercedes->setModel("C200");


echo "Model: ".$mercedes->getModel() . "\n";
echo "Transmission: ".$mercedes->getIsAutomatic() . "\n";
