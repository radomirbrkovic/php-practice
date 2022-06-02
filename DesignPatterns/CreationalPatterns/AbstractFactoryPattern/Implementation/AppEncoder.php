<?php

namespace CreationalPatterns\AbstractFactoryPattern\Implementation;

abstract class AppEncoder
{
    /**
     * @return string
     */
    abstract public function encode(): string;
}