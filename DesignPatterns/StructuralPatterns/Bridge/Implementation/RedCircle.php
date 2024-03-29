<?php

namespace StructuralPatterns\Bridge\Implementation;

use StructuralPatterns\Bridge\Interfaces\CircleInterface;

class RedCircle implements CircleInterface
{
    /**
     * @var float
     */
    private float $radius = 0;
    /**
     * @var int
     */
    private int $x = 0;
    /**
     * @var int
     */
    private int $y = 0;
    /**
     * @var string
     */
    private string $color = 'red';

    /**
     * @param float $radius
     * @param int $x
     * @param int $y
     */
    public function draw(float $radius, int $x, int $y): void
    {
        $this->radius = $radius;
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @return string
     */
    public function getCenter(): string
    {
        return $this->x." x ".$this->y;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return  $this->color;
    }
}