<?php

use App\Model\Article;
use App\Model\Command;

require __DIR__ . '/../vendor/autoload.php';

//Model Riche
//n'a pas de setters, mais des methode metier

$command = new Command([
        new Article('chips'),
        new Article('croissant'),
], 15);
$command->pay(); //des methodes qui porte la logique metier, lance des exception

//Model Anémique
//n'a que des getters & setters

//$command
//    ->setPrice(15)
//    ->setStatus(Command::STATUS_DELIVRY)
//    ->setStatus(Command::STATUS_PAYMENT_WAITING)
//    ->setArticles()
//;

foreach ($command->getArticles() as $article) {
    echo $article->getName();
}
