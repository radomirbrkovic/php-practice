<?php

namespace CreationalPatterns\AbstractFactoryPattern\Implementation;

abstract class ContactEncoder
{
    /**
     * @return string
     */
    abstract public function encode(): string;
}