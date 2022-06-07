<?php

namespace StructuralPatterns\Adapter\BusinessClasses;

use StructuralPatterns\Adapter\Interfaces\KindleInterface;

class Kindle implements KindleInterface
{
    /**
     * @var int
     */
    private int $page = 1;

    /**
     * @var int
     */
    private int $totalPage = 100;

    /**
     * @return void
     */
    public function unlock(): void
    {
        $this->page = 1;
    }

    /**
     * @return void
     */
    public function pressNext(): void
    {
        $this->page++;
    }

    /**
     * @return array
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPage];
    }
}