<?php

namespace StructuralPatterns\Composite\BusinessClasses;

use StructuralPatterns\Composite\Interfaces\RenderableInterface;

class TextElement implements RenderableInterface
{
    /**
     * @param string $text
     */
    public function __construct(private string $text)
    {
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return $this->text;
    }
}