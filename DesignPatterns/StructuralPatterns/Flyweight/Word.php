<?php

namespace StructuralPatterns\Flyweight;

use StructuralPatterns\Flyweight\Interfaces\TextInterface;

class Word implements TextInterface
{
    /**
     * @param string $name
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
        return sprintf('Word %s with font %s', $this->name, $extrinsicState);
    }
}