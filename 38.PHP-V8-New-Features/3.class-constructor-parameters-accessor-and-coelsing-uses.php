<?php

class Point
{
    public function __construct(
        private int $x = 2,
        private int $y = 32,
        public ?float $default = null
    ) {
        // to have null as default value float type need coercion
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }
}

$point = new Point(10, 20, 3.14);
echo "X: " . $point->getX() . PHP_EOL; // Outputs: X: 10
echo "Y: " . $point->getY() . PHP_EOL; // Outputs: Y: 20
echo "Default: " . $point->default . PHP_EOL; // Outputs: Default: 3.14
