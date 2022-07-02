<?php

namespace BehavioralPatterns\State;

use BehavioralPatterns\State\Interfaces\StateInterface;

class StateDone implements StateInterface
{

    /**
     * @param OrderContext $context
     * @return void
     */
    public function proceedToNext(OrderContext $context): void
    {
        // there is nothing more to do
    }

    /**
     * @return string
     */
    public function toSting(): string
    {
        return 'done';
    }
}