<?php

namespace StructuralPatterns\Decorator\Interfaces;

interface RenderInterface
{
    /**
     * @return string
     */
    public function renderData(): string;
}