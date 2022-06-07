<?php

namespace StructuralPatterns\Adapter\BusinessClasses;

use StructuralPatterns\Adapter\Interfaces\BookInterface;

class Book implements BookInterface
{
    /**
     * @var int
     */
    private int $page = 1;

    /**
     * @return void
     */
    public function turnPage(): void
    {
        $this->page++;
    }

    /**
     * @return void
     */
    public function open(): void
    {
        $this->page = 1;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
}