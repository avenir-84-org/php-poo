<?php declare(strict_types = 1);

require("ColoredPoint2D.php");

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

$B = new Point2D(0, 0);
$B -> randomize20_30();

echo "B: " . $B . "\n";

function area(Point2D $A, Point2D $B) {
    $Bx = $B -> get_x();
    $By = $B -> get_y();
    $Ax = $A -> get_x();
    $Ay = $A -> get_y();
    return ($Bx - $Ax) * ($By - $Ay);
}

echo "Area: " . area($A, $B) . "\n";


/**
 * Exercice: créer une nouvelle classe ColoredPoint2D
 * pour représenter un point d'une couleur particulière.
 * 
 */

$colp = new ColoredPoint2D(4, 5, "Red");
echo "ColP: " . $colp . " - finally!\n";

?>