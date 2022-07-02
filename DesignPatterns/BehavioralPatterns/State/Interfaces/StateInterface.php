<?php

namespace BehavioralPatterns\State\Interfaces;

use BehavioralPatterns\State\OrderContext;

interface StateInterface
{

    /**
     * @param OrderContext $context
     * @return void
     */
    public function proceedToNext(OrderContext $context): void;

    /**
     * @return string
     */
    public function toString(): string;
}