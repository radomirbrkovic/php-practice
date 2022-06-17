<?php

namespace StructuralPatterns\Facade;

use StructuralPatterns\Facade\Implementation\Circle;
use StructuralPatterns\Facade\Implementation\Rectangle;
use StructuralPatterns\Facade\Implementation\Square;

class ShapeFacade
{
    /**
     * @param float $side
     * @return float
     */
    public function getSquareArea(float $side): float
    {
        $square = new Square($side);
        return $square->calculateArea();
    }

    /**
     * @param float $a
     * @param float $b
     * @return float
     */
    public function getRectangleArea(float $a, float $b): float
    {
        $rectangle = new Rectangle($a, $b);
        return $rectangle->calculateArea();
    }

    /**
     * @param float $radius
     * @return float
     */
    public function getCircleArea(float $radius): float
    {
        $circle = new Circle($radius);
        return $circle->calculateArea();
    }
}