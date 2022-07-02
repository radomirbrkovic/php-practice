<?php

namespace BehavioralPatterns\State\Interfaces;

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
    public function toSting(): string;
}