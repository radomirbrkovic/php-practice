<?php

namespace BehavioralPatterns\Memento;


/**
 * Ticket is the "Originator" in this implementation
 */
class Ticket
{
    /**
     * @var State
     */
    private State $currentState;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->currentState = new State(State::STATE_CREATED);
    }

    /**
     * @return void
     */
    public function open(): void
    {
        $this->currentState = new State(State::STATE_OPENED);
    }

    /**
     * @return void
     */
    public function assign(): void
    {
        $this->currentState = new State(State::STATE_ASSIGNED);
    }

    /**
     * @return void
     */
    public function close(): void
    {
        $this->currentState = new State(State::STATE_CLOSED);
    }

    /**
     * @return Memento
     */
    public function saveToMemento(): Memento
    {
        return new Memento(clone $this->currentState);
    }

    /**
     * @param Memento $memento
     * @return void
     */
    public function restoreFromMemento(Memento $memento)
    {
        $this->currentState = $memento->getState();
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->currentState;
    }
}