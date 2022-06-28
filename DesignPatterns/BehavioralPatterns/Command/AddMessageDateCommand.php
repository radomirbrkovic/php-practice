<?php

namespace BehavioralPatterns\Command;

use BehavioralPatterns\Command\Interfaces\UndoableCommandInterface;

class AddMessageDateCommand implements UndoableCommandInterface
{
    /**
     * @param Receiver $receiver
     */
    public function __construct(private Receiver $receiver)
    {
    }

    /**
     * @return void
     */
    public function execute(): void
    {
        $this->receiver->enableDate();
    }

    /**
     * @return void
     */
    public function undo(): void
    {
       $this->receiver->disableDate();
    }
}