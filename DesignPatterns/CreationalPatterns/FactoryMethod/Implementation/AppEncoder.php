<?php

namespace CreationalPatterns\FactoryMethod\Implementation;

abstract class AppEncoder
{
    /**
     * @return string
     */
    abstract public function encode(): string;
}