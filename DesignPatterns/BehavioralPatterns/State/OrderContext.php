<?php

namespace BehavioralPatterns\State;

use BehavioralPatterns\State\Interfaces\StateInterface;

class OrderContext
{
    /**
     * @var StateInterface
     */
    private StateInterface $state;

    public static function create(): OrderContext
    {

    }
}