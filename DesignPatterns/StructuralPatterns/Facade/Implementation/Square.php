<?php

namespace StructuralPatterns\Facade\Implementation;

use StructuralPatterns\Facade\Implementation\Interfaces\ShapeInterface;

class Square implements ShapeInterface
{
    /**
     * @param float $side
     */
    public function __construct(private float $side = 0)
    {
    }

    /**
     * @return float
     */
    public function calculateArea(): float
    {
        return round(pow($this->side, 2), 2);
    }
}