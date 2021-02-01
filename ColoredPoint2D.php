<?php

require("Point2D.php");

class ColoredPoint2D extends Point2D {

    private string $color;

    public function __construct(int $x, int $y, string $color) {
        parent::__construct($x, $y);
        $this -> color = $color;
    }

    public function __toString() {

        $colors = array(
            "Black" => "\033[30m",
            "Red" => "\033[31m",
            "Green" => "\033[32m",
            "Yellow" => "\033[33m",
            "Blue" => "\033[34m",
            "Magenta" => "\033[35m",
            "Cyan" => "\033[36m",
            "White" => "\033[37m",
            "Reset" => "\033[0m"
        );

        if (array_key_exists($this -> color, $colors)) {
            $c = $colors[$this -> color];
            $t = $colors["Reset"];
            return $c . "(" . $this -> get_x() . ", " . $this -> get_y() . ")" . $t;
        }

        return "[" . $this -> color . "] - (" . $this -> get_x() . 
               ", " . $this -> get_y() . ")";
    }

}


?>