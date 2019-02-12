<?php

declare(strict_types=1);

namespace App\Model;

class Vehicule
{
    //Pour que les objet enfants puissent accéder a cette propriété je la rend protected, Privé sauf a moi et mes enfants
    protected $wheelsNumber;

    public function __construct($nbRoue)
    {
        $this->wheelsNumber = $nbRoue;
    }

    public function start() {
        echo 'Let\'s start ! ';
    }
}

//Dans chaque enfants, je peut surcharger des logiques du parent
//Je peut définir d'autre comportement (methode) et attributs
class Car extends Vehicule {
    /** @var string */
    private $color;

    //Le constructeur n'est pas forcé de respecter le même prototype contrairement au autre methodes
    public function __construct(string $color)
    {
        //Il faut toujours appelez le constructeur parent, et en premier
        parent::__construct(4);
        echo 'A new car is born with ' . $this->wheelsNumber . ' wheels' . "\n";
        $this->color = $color;
    }
}

//SUV est un Car qui est par extension un Vehicule, un SUV est donc un Vehicule
class Suv extends Car {
    public function radio() {
        echo 'Music ! ';
    }

    public function start()
    {
        //Je récupère la logique du parent, et execute le même code
        parent::start();
        $this->radio();
    }
}
