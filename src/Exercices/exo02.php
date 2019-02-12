<?php
require_once __DIR__.'/../../vendor/autoload.php';

use App\Model\Astronaut;

$mutta = new Astronaut("Mutta");
$hibito = new Astronaut("Hibito");
echo $mutta->getId() . "\n";
echo $hibito->getId() . "\n";
dump($mutta);
