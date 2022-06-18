<?php

namespace StructuralPatterns\Flyweight;

use StructuralPatterns\Flyweight\Interfaces\TextInterface;

class Character implements TextInterface
{
    /**
     * @param string $name
     * @return void
     */
    public function __construct(private string $name)
    {
    }

    /**
     * @param string $extrinsicState
     * @return string
     */
    public function render(string $extrinsicState): string
    {
        return sprintf('Character %s with font %s', $this->name, $extrinsicState);
    }
}