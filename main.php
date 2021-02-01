<?php declare(strict_types = 1);

require("Point2D.php");

$p1 = new Point2D(2, 5);
echo $p1."\n";
$p2 = new Point2D(12, 15);
echo $p2."\n";


echo $p1 -> distance($p2)."\n";

$points = [];
for ($i = 0; $i < 10; ++$i) {
    $p = new Point2D(0, 0);
    $p -> randomize();
    $points[$i] = $p;
}

foreach ($points as $p) {
    echo $p."\n";
}

/*
Exercice: écrivez un programme qui génère:
-> 1 point A dont x est dans [0, 10] et y dans [0, 10] (random)
-> 1 point B dont x est dans [20, 30] et y dans [20, 30] (random)
-> écrivez une fonction qui calcule l'aire du rectangle dont
   le coin suppérieur gauche est A et dont le coin inférieur
   droit est B.
*/


?>