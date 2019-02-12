<?php

declare(strict_types=1);


namespace App\Model;


//Une interface défini un contract, Les prototypes des methodes sans leur implémentation
interface Animal
{
    public function eat(Food $food): void;

}

class Quadriped implements Animal {

    public function walk() {
        echo 'paglop';
    }
}

class Pony implements Animal, \Traversable {

    public function eat(Food $food): void
    {
        // TODO: Implement eat() method.
    }
}
