<?php

namespace CreationalPatterns\AbstractFactoryPattern\BusinessClasses;

use CreationalPatterns\AbstractFactoryPattern\Implementation\AppEncoder;

class MegaAppEncoder extends AppEncoder
{
    /**
     * @return string
     */
    public function encode(): string
    {
        return "Mega encoder";
    }
}