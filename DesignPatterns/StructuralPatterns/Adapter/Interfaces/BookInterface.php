<?php

namespace StructuralPatterns\Adapter\Interfaces;

interface BookInterface
{
    /**
     * @return void
     */
    public function turnPage(): void;

    /**
     * @return void
     */
    public function open(): void;

    /**
     * @return int
     */
    public function getPage(): int;
}