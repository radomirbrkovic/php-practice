<?php

namespace BehavioralPatterns\Mediator;

use BehavioralPatterns\Mediator\Interfaces\MediatorInterface;

abstract class Colleague
{
    /**
     * @var MediatorInterface
     */
    protected MediatorInterface $mediator;

    /**
     * @param MediatorInterface $mediator
     * @return void
     */
    final public function setMediator(MediatorInterface $mediator): void
    {
        $this->mediator = $mediator;
    }

}