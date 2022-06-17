<?php

namespace StructuralPatterns\Decorator\XML;

use StructuralPatterns\Decorator\InputData;
use StructuralPatterns\Decorator\Interfaces\RenderInterface;

class XMLRender implements RenderInterface
{

    /**
     * @param InputData $inputData
     */
    public function __construct(private InputData $inputData)
    {
    }

    /**
     * @return string
     * @throws \DOMException
     */
    public function renderData(): string
    {
        $doc = new \DOMDocument();
        foreach ($this->inputData->getData() as $key => $value){
            $doc->appendChild($doc->createElement($key, $value));
        }

        return $doc->saveXML();
    }
}