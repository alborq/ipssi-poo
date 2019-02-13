<?php

declare(strict_types=1);


namespace App\Planet;


class Mars implements PlanetInterface
{
    /**@var int*/
    private $id;

    /** @var int  */
    private static $count = 0;

    /**@var int*/
    private $size;

    public function __construct(int $size)
    {
        $this->id = self::$count++;
        $this->size = $size;
    }

    public function getName(): string
    {
        return 'Mars';
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getId(): int
    {
        return $this->id;
    }

}
