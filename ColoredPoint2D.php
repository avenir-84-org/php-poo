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
            "Black" => "\u001b[30m",
            "Red" => "\u001b[31m",
            "Green" => "\u001b[32m",
            "Yellow" => "\u001b[33m",
            "Blue" => "\u001b[34m",
            "Magenta" => "\u001b[35m",
            "Cyan" => "\u001b[36m",
            "White" => "\u001b[37m",
            "Reset" => "\u001b[0m"
        );

        if (array_key_exists($this -> color, $colors)) {
            $c = $colors[$this -> color];
            var_dump($c);
            $t = $colors["Reset"];
            return $c . "(" . $this -> get_x() . ", " . $this -> get_y() . ")" . $t;
        }

        return "[" . $this -> color . "] - (" . $this -> get_x() . 
               ", " . $this -> get_y() . ")";
    }

}


?>