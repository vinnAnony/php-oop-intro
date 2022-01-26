<?php
require 'Audi.php';
require 'Bmw.php';
require 'Ford.php';

abstract class Car
{
    abstract public function showCar();
}

function showCar($cars)
{
    foreach ($cars as $car) {
        echo $car->showCar() . "\n";
    }
}

$cars = [
    new Audi(),
    new Bmw(),
    new Ford()
];

showCar($cars);