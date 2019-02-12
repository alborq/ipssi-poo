<?php
declare(strict_types=1);
require_once __DIR__.'/../../vendor/autoload.php';

use App\Food\Mars as MarsFood;
use App\Planet\Mars as MarsPlanet;
use App\Food\Pomme;
use App\Model\Astronaut;
use App\Exception\TooHungryException;

$john = new Astronaut('John');

for($i = 0; $i <6; $i++) {
    $john->eat(new MarsFood());
}

$mars = new MarsPlanet(123516);

try {
    while(true) {
        $john->goto($mars);
    }
} catch (TooHungryException $e) {
    echo '[Earth] : Houston we have a problem...' . "\n";
}
