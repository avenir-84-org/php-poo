<?php

require("Point2D.php");

class ColoredPoint2D extends Point2D {

    private string $color;

    public function __construct(int $x, int $y, string $color) {
        parent::__construct($x, $y);
        $this -> color = $color;
    }

    public function __toString() {
        return "[" . $this -> color . "] - (" . $this -> get_x() . 
               ", " . $this -> get_y() . ")";
    }

}


?>