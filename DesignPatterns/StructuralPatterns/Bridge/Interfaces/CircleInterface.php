<?php

namespace StructuralPatterns\Bridge\Interfaces;

interface CircleInterface
{
    /**
     * @param float $radius
     * @param int $x
     * @param int $y
     * @return void
     */
    public function draw(float $radius, int $x, int $y): void;

    /**
     * @return float
     */
    public function getRadius(): float;

    /**
     * @return string
     */
    public function getCenter(): string;

    /**
     * @return string
     */
    public function getColor(): string;

}