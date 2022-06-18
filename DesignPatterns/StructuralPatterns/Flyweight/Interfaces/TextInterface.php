<?php

namespace StructuralPatterns\Flyweight\Interfaces;

interface TextInterface
{
    /**
     * @param string $extrinsicState
     * @return string
     */
    public function render(string $extrinsicState): string;
}