<?php

declare(strict_types=1);

namespace App\Model;

class Command
{
    public const STATUS_PAYMENT_WAITING = 'en attente de paiement';
    public const STATUS_PREPARE_WAITING = 'en attente de préparation';
    public const STATUS_PREPARED = 'preparer';
    public const STATUS_DELIVRY = 'en livraison';

    /** @var int */
    private $price;

    /** @var Article[] */
    private $articles;

    /** @var string */
    private $status;

    public function __construct(array $articles, int $price)
    {
        $this->articles = $articles;
        $this->price = $price;
        $this->status = self::STATUS_PAYMENT_WAITING;
    }

    public function pay()
    {
        if($this->status !== self::STATUS_PAYMENT_WAITING) {
            throw new \CantPayTwiceCommandException();
        }

        $this->status = self::STATUS_PREPARE_WAITING;
    }



    public function getPrice(): int
    {
        return $this->price;
    }

    /** @return Article[] */
    public function getArticles(): array
    {
        return $this->articles;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
