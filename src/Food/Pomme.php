<?php

declare(strict_types=1);

namespace App\Food;

class Pomme implements FoodInterface
{
    public function getName(): string
    {
        return 'Pomme';
    }
}
