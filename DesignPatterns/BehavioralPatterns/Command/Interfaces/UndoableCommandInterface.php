<?php

namespace BehavioralPatterns\Command\Interfaces;

interface UndoableCommandInterface extends CommandInterface
{
    /**
     * @return void
     */
    public function undo(): void;
}