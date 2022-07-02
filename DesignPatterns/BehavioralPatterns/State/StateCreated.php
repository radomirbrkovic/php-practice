<?php

namespace BehavioralPatterns\State;

use BehavioralPatterns\State\Interfaces\StateInterface;

class StateCreated implements StateInterface
{

    /**
     * @param OrderContext $context
     * @return void
     */
    public function proceedToNext(OrderContext $context): void
    {
        $context->setState(new StateShipped());
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return 'created';
    }
}