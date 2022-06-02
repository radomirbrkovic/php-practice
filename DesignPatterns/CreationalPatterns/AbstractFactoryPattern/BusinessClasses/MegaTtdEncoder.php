<?php

namespace CreationalPatterns\AbstractFactoryPattern\BusinessClasses;

use CreationalPatterns\AbstractFactoryPattern\Implementation\TtdEncoder;

class MegaTtdEncoder extends TtdEncoder
{
    /**
     * @return string
     */
    public function encode(): string
    {
        return "Mega encoder";
    }
}