<?php

namespace BehavioralPatterns\Mediator\Interfaces;

interface MediatorInterface
{
    /**
     * @param string $username
     * @return string
     */
    public function getUser(string $username): string;
}