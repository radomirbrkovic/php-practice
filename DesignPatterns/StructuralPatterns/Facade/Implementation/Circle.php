<?php

namespace StructuralPatterns\Facade\Implementation;

use StructuralPatterns\Facade\Implementation\Interfaces\ShapeInterface;

class Circle implements ShapeInterface
{
    /**
     * @param float $radius
     */
    public function __construct(private float $radius = 0)
    {
    }

    /**
     * @return float
     */
    public function calculateArea(): float
    {
        return round(pow($this->radius, 2) * pi(), 2);
    }
}