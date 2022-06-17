<?php

namespace StructuralPatterns\Decorator;

class InputData
{
    /**
     * @param array $data
     */
    public function __construct(private array $data)
    {
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array  $data): void
    {
        $this->data = $data;
    }

}