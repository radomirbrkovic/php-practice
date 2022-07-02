<?php

namespace BehavioralPatterns\State;

use BehavioralPatterns\State\Interfaces\StateInterface;

class StateShipped implements StateInterface
{
    /**
     * @param OrderContext $context
     * @return void
     */
    public function proceedToNext(OrderContext $context): void
    {
        $context->setState(new StateDone());
    }

    /**
     * @return string
     */
    public function toSting(): string
    {
        return 'shipped';
    }
}