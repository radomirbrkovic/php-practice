<?php

namespace BehavioralPatterns\Command;

use BehavioralPatterns\Command\Interfaces\CommandInterface;

class Invoker
{
    /**
     * @var CommandInterface
     */
    private CommandInterface $command;

    /**
     * @param CommandInterface $command
     * @return void
     */
    public function setCommand(CommandInterface $command): void
    {
        $this->command = $command;
    }

    /**
     * @return void
     */
    public function run(): void
    {
        $this->command->execute();
    }
}