<?php

namespace CreationalPatterns\AbstractFactoryPattern\BusinessClasses;

use CreationalPatterns\AbstractFactoryPattern\Implementation\ContactEncoder;

class MegaContactEncoder extends ContactEncoder
{
    /**
     * @return string
     */
    public function encode(): string
    {
        return "Mega encoder";
    }
}