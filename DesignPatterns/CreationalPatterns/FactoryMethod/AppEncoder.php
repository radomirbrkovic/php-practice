<?php

namespace CreationalPatterns\FactoryMethod;

abstract class AppEncoder
{
    /**
     * @return string
     */
    abstract public function encode(): string;
}