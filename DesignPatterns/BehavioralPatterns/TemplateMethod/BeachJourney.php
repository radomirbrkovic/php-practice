<?php

namespace BehavioralPatterns\TemplateMethod;

class BeachJourney extends Journey
{
    /**
     * @return string
     */
    protected function enjoyVacation(): string
    {
        return "Swimming and sun-bathing";
    }
}