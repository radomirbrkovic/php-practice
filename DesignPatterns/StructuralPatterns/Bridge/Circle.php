<?php

namespace StructuralPatterns\Bridge;

use StructuralPatterns\Bridge\Abstraction\Sharp;
use StructuralPatterns\Bridge\Interfaces\CircleInterface;

class Circle extends Sharp
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
     * Circle constructor.
     * @param float $radius
     * @param int $x
     * @param int $y
     * @param CircleInterface $circle
     */
    public function __construct(float $radius, int $x, int $y, CircleInterface $circle)
    {   $this->radius = $radius;
        $this->x = $x;
        $this->y = $y;
        parent::__construct($circle);
    }

    /**
     * @return void
     */
    public function draw(): void
    {
        $this->circle->draw($this->radius, $this->x, $this->y);
    }
}