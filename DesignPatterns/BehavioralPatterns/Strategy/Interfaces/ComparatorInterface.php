<?php

namespace BehavioralPatterns\Strategy\Interfaces;

interface ComparatorInterface
{
    /**
     * @param mixed $a
     * @param mixed $b
     * @return int
     */
    public function compare(mixed $a, mixed $b): int;
}