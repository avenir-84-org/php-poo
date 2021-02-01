<?php declare(strict_types = 1);

require("Point2D.php");

/*
Exercice: écrivez un programme qui génère:
-> 1 point A dont x est dans [0, 10] et y dans [0, 10] (random)
-> 1 point B dont x est dans [20, 30] et y dans [20, 30] (random)
-> écrivez une fonction qui calcule l'aire du rectangle dont
   le coin suppérieur gauche est A et dont le coin inférieur
   droit est B.
*/

$A = new Point2D(0, 0);
$A -> randomize();

echo "A: " . $A . "\n";


?>