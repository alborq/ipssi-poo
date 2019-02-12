<?php

declare(strict_types=1);

namespace App\Model;

class Person
{
    /** @var string */
    public $name;

    /** @var int */
    public static $count = 0;

    private function __construct() {
        self::$count++;
    }

    public static function create($name): self {
        $person = new self();
        $person->name = $name;

        return $person;
    }

    public static function createAnonymous(): self {
        return new self();
    }
}

