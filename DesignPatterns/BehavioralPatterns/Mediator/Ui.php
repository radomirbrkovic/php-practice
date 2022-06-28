<?php

namespace BehavioralPatterns\Mediator;

class Ui extends Colleague
{
    /**
     * @param string $sting
     * @return string
     */
    public function outputUserInfo(string $sting): string
    {
        return $this->mediator->getUser($sting);
    }
}