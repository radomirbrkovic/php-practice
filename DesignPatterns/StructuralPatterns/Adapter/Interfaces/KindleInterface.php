<?php

namespace StructuralPatterns\Adapter\Interfaces;

interface KindleInterface
{
    /**
     * @return void
     */
    public function unlock(): void;

    /**
     * @return void
     */
    public function pressNext(): void;

    /**
     * @return array
     */
    public function getPage(): array;
}