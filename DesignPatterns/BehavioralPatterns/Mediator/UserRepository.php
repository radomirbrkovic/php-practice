<?php

namespace BehavioralPatterns\Mediator;

class UserRepository extends Colleague
{
    /**
     * @param string $user
     * @return string
     */
    public function getUserName(string $user): string
    {
        return 'User: '.$user;
    }
}