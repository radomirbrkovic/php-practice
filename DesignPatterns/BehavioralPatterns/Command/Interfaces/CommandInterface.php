<?php

namespace BehavioralPatterns\Command\Interfaces;

interface CommandInterface
{
    /**
     * @return void
     */
    public function execute(): void;
}