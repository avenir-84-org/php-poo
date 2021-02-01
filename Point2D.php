<?php declare(strict_types = 1);

class Point2D {

    private int $x;
    private int $y;

    public function __construct(int $x, int $y) {
        $this -> x = $x;
        $this -> y = $y;
    }

    public function __toString() {
        return "(" . $this -> x . ", " . $this -> y . ")";
    }

}



?>