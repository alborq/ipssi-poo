<?php

use App\Model\Car;
use App\Model\Suv;

require __DIR__ . '/../vendor/autoload.php';

function startACar(Car $car) {
    //Je ne peut pas utiliser les methode de SUV (radio) car il n'appartiennt pas a Car
    $car->start();
}

$car = new Suv('red');
// Un SUV est une voiture, je peut donc la passé a StartACar
startACar($car);
