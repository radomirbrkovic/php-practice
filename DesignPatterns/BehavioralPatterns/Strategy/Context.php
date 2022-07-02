<?php

namespace BehavioralPatterns\Strategy;

use BehavioralPatterns\Strategy\Interfaces\ComparatorInterface;

class Context
{
    /**
     * @param ComparatorInterface $comparator
     */
    public function __construct(private ComparatorInterface $comparator)
    {
    }

    /**
     * @param array $elements
     * @return array
     */
    public function executeStrategy(array $elements): array
    {
        uasort($elements, [$this->comparator, 'compare']);

        return $elements;
    }
}