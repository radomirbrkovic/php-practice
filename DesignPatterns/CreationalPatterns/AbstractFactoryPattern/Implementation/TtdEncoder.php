<?php

namespace CreationalPatterns\AbstractFactoryPattern\Implementation;

abstract class TtdEncoder
{
    /**
     * @return string
     */
    abstract public function encode(): string;
}