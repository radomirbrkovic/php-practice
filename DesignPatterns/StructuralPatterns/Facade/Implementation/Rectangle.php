<?php

namespace StructuralPatterns\Facade\Implementation;

use StructuralPatterns\Facade\Implementation\Interfaces\ShapeInterface;

class Rectangle implements ShapeInterface
{
    /**
     * @param float $a
     * @param float $b
     */
    public function __construct(private float $a = 0, private float $b = 0)
    {
    }

    /**
     * @return float
     */
    public function calculateArea(): float
    {
        return round($this->a * $this->b, 2);
    }
}