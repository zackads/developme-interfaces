<?php

namespace App\Shapes;

class Square implements ShapeInterface
{
    private $sideLength;

    public function __construct(float $side)
    {
        $this->sideLength = $side;
    }

    public function area(): float
    {
        return pow($this->sideLength, 2);
    }
}
