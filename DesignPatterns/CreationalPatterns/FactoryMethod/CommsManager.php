<?php

namespace CreationalPatterns\FactoryMethod;

abstract class CommsManager
{
    /**
     * @return string
     */
    abstract public function getHeaderText(): string;

    /**
     * @return AppEncoder
     */
    abstract public function getAppEncoder(): AppEncoder;

    /**
     * @return string
     */
    abstract public function getFooterText(): string;
}
