<?php

declare(strict_types=1);

namespace App\Model;

use App\Exception\TooHungryException;
use App\Food\FoodInterface;
use App\Planet\PlanetInterface;

class Astronaut
{
    /** @var int*/
    private static $count = 0;

    /** @var int*/
    private $id;

    /** @var string*/
    private $name;

    /** @var int*/
    private $ration;

    public function __construct(string $name)
    {
        $this->id = self::$count++;
        $this->name = $name;
        $this->ration = 0;

        echo "$this->name ready for launch \n";
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRation(): int
    {
        return $this->ration;
    }

    public function eat(FoodInterface $food) : void
    {
        echo "Yum Yum It's very good {$food->getName()} \n";
        $this->ration++;
    }

    public function goto(PlanetInterface $planet): void
    {
        if($this->ration < 2) {
            throw new TooHungryException(
                'You can\'t go to' . $planet->getName() . ', you need more energy'
            );
        }

        $this->ration -= 2;
        echo 'de '. $planet->getName() . ' vers l\'infini ! et au delà !' ."\n";
    }
}
