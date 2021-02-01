<?php declare(strict_types = 1);

require("Point2D.php");

$p1 = new Point2D(2, 5);
echo $p1."\n";
$p2 = new Point2D(12, 15);
echo $p2."\n";

function distance2D($xa, $xb, $ya, $yb) {
    return sqrt(($xa-$xb) ** 2 + ($ya-$yb) ** 2);
}

function distance2D_v2(Point2D $a, Point2D $b) : float {
    $xa = $a -> get_x();
    $xb = $b -> get_x();
    $ya = $a -> get_y();
    $yb = $b -> get_y();
    return sqrt(($xa-$xb) ** 2 + ($ya-$yb) ** 2);
}

echo distance2D(2, 12, 5, 15)."\n";
echo distance2D_v2($p1, $p2)."\n";

?>