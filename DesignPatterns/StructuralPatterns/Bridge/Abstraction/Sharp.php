<?php

namespace StructuralPatterns\Bridge\Abstraction;

use StructuralPatterns\Bridge\Interfaces\CircleInterface;

abstract class Sharp
{
    /**
     * @param CircleInterface $circle
     */
    public function __construct(protected CircleInterface $circle)
    {
    }

    /**
     * @return void
     */
    public abstract function draw(): void;

    /**
     * @return CircleInterface
     */
    public function getCircle(): CircleInterface
    {
        return $this->circle;
    }
}