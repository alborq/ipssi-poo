<?php

$a = 6;
$divisedBy = 0;
try {
    echo 'bonjour' . "\n";

    if(INF === $a/$divisedBy) {
        throw new DivisionByZeroError('Invalid, divisedBy as value set to 0');
    }

    echo 'le resultat est ' . $a/$divisedBy;

} catch (\ArithmeticError $exception) { // On peut mettre plussieur catch
    echo 'Une erreur arithmetique est survenu ...' . "\n";
    dump($exception);
} catch (\Error|\Exception $exception) { // Ou plussieur exception dans le même catch
    //Ne se produit que si les catch précédent n'ont pas intercepter l'erreur
    echo 'Une erreur tout court ...' . "\n";
    dump($exception);
}

//Ce code est executer dans tout les cas, car l'exception a été arréter
echo 'hello';

