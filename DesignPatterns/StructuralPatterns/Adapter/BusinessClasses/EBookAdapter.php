<?php

namespace StructuralPatterns\Adapter\BusinessClasses;

use StructuralPatterns\Adapter\Interfaces\BookInterface;
use StructuralPatterns\Adapter\Interfaces\KindleInterface;

class EBookAdapter implements BookInterface
{
    /**
     * @param KindleInterface $kindle
     */
    public function __construct(private KindleInterface $kindle)
    {
    }

    /**
     * @return void
     */
    public function turnPage(): void
    {
        $this->kindle->pressNext();
    }

    /**
     * @return void
     */
    public function open(): void
    {
        $this->kindle->unlock();
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->kindle->getPage()[0];
    }
}