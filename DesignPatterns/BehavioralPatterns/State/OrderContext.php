<?php

namespace BehavioralPatterns\State;

use BehavioralPatterns\State\Interfaces\StateInterface;

class OrderContext
{
    /**
     * @var StateInterface
     */
    private StateInterface $state;

    /**
     * @return OrderContext
     */
    public static function create(): OrderContext
    {
        $order = new self();
        $order->state = new StateCreated();

        return $order;
    }

    /**
     * @param StateInterface $state
     * @return void
     */
    public function setState(StateInterface $state)
    {
        $this->state = $state;
    }

    /**
     * @return void
     */
    public function proceedToNext()
    {
        $this->state->proceedToNext($this);
    }

    /**
     * @return mixed
     */
    public function toString()
    {
        return $this->state->toString();
    }
}