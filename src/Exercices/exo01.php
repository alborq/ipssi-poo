<?php

declare(strict_types=1);

use App\Model\Mars;

require_once __DIR__.'/../../vendor/autoload.php';

$rocks = new Mars();
$lite = new Mars();
$snack = new Mars();

echo $rocks->getId() . "\n";
echo $lite->getId()."\n";
echo $snack->getId()."\n";
