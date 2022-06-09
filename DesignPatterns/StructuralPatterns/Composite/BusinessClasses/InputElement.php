<?php

namespace StructuralPatterns\Composite\BusinessClasses;

use StructuralPatterns\Composite\Interfaces\RenderableInterface;

class InputElement implements RenderableInterface
{
    /**
     * @return string
     */
    public function render(): string
    {
        return '<input type="text" />';
    }
}