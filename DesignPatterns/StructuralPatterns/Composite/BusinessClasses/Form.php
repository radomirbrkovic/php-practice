<?php

namespace StructuralPatterns\Composite\BusinessClasses;

use StructuralPatterns\Composite\Interfaces\RenderableInterface;

class Form implements RenderableInterface
{

    /**
     * @var RenderableInterface[]
     */
    private array $elements;

    /**
     * @return string
     */
    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        return $formCode . '</form>';
    }

    /**
     * @param RenderableInterface $element
     * @return void
     */
    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }
}