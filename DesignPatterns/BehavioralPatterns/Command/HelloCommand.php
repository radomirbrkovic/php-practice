<?php

namespace BehavioralPatterns\Command;

use BehavioralPatterns\Command\Interfaces\CommandInterface;

class HelloCommand implements CommandInterface
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
        $this->receiver->write('Hello World');
    }
}