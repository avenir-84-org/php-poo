<?php declare(strict_types = 1);

require("Point2D.php");

$p1 = new Point2D(2, 5);
echo $p1."\n";
$p2 = new Point2D(12, 15);
echo $p2."\n";


echo $p1 -> distance($p2)."\n";

$points = [];
for ($i = 0; $i < 10; ++$i) {
    $p = new Point2D(random_int(0, 10), -random_int(0, 10));
    $points[$i] = $p;
}

foreach ($points as $p) {
    echo $p."\n";
}


?>