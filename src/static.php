<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Model\Person;

// On ne peut pas instancier Person directement car il est privé
new Person();

//On a créer deux constructeur nommé (Il sont static, et renvoi une nouvelle instance de l'objet)
Person::create('pierre');
Person::createAnonymous();

//$count est dans une memoire partager par les instances, Il me permet de compté le nombre de personnage créer.
echo Person::$count;
