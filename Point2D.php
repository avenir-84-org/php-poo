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

    public function get_x() : int {
        return $this -> x;
    }

    public function set_x(int $x) : void {
        $this -> x = $x;
    }

    public function get_y() : int {
        return $this -> y;
    }

    public function set_y(int $y) : void {
        $this -> y = $y;
    }


    public function distance2D_v3(Point2D $b) : float {
        $xa = $this -> x;
        $xb = $b -> get_x();
        $ya = $this -> y;
        $yb = $b -> get_y();
        return sqrt(($xa-$xb) ** 2 + ($ya-$yb) ** 2);
    }

}



?>