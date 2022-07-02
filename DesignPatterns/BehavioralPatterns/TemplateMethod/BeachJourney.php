<?php

namespace BehavioralPatterns\TemplateMethod;

class BeachJourney
{
    /**
     * @return string
     */
    protected function enjoyVacation(): string
    {
        return "Swimming and sun-bathing";
    }
}