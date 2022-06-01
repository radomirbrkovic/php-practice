<?php

namespace CreationalPatterns\FactoryMethod\BusinessClasses;

use CreationalPatterns\FactoryMethod\Implementation\AppEncoder;

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