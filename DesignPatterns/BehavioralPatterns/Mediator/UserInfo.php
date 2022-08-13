<?php

namespace BehavioralPatterns\Mediator;

class UserInfo extends Colleague
{
    /**
     * @param string $sting
     * @return void
     */
    public function outputUserInfo(string $sting): void
    {
        echo $this->mediator->getUser($sting);
    }
}