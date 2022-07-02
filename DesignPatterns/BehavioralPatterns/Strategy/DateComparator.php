<?php

namespace BehavioralPatterns\Strategy;

use BehavioralPatterns\Strategy\Interfaces\ComparatorInterface;
use DateTime;

class DateComparator implements ComparatorInterface
{
    /**
     * @param mixed $a
     * @param mixed $b
     * @return int
     * @throws \Exception
     */
    public function compare(mixed $a, mixed $b): int
    {
        $aDate = new DateTime($a['date']);
        $bDate = new DateTime($b['date']);

        return $aDate <=> $bDate;
    }
}