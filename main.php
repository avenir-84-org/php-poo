<?php declare(strict_types = 1);

require("Point2D.php");

$p1 = new Point2D(2, 5);
echo $p1."\n";
$p2 = new Point2D(12, 15);
echo $p2."\n";


echo $p1 -> distance($p2)."\n";

$p = new Point2D(2, 0);
$a = new Point2D(2, 0);

for ($i = 0; $i < 10; ++$i) {
    $p -> set_y($i);
    echo $p -> distance($a)."\n";
}

?>