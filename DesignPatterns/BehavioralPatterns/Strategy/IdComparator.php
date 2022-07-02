<?php

namespace BehavioralPatterns\Strategy;

use BehavioralPatterns\Strategy\Interfaces\ComparatorInterface;

class IdComparator implements ComparatorInterface
{
    /**
     * @param mixed $a
     * @param mixed $b
     * @return int
     */
    public function compare(mixed $a, mixed $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}