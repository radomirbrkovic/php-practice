<?php

namespace StructuralPatterns\Decorator\Json;

use StructuralPatterns\Decorator\InputData;
use StructuralPatterns\Decorator\Interfaces\RenderInterface;

class JsonRender implements RenderInterface
{
    /**
     * @param InputData $inputData
     */
    public function __construct(private InputData $inputData)
    {
    }

    /**
     * @return string
     */
    public function renderData(): string
    {
        return json_encode($this->inputData->getData());
    }
}