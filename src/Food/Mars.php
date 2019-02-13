<?php

declare(strict_types=1);

namespace App\Food;

class Mars implements FoodInterface
{
    /**@var int*/
    private $id;

    /** @var int */
    private static $count = 0;

    public function __construct()
    {
        $this->id = self::$count++;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return 'Mars';
    }
}
