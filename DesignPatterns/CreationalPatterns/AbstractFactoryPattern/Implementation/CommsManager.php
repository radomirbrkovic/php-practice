<?php

namespace CreationalPatterns\AbstractFactoryPattern\Implementation;

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
     * @return TtdEncoder
     */
    abstract public function getTtdEncoder(): TtdEncoder;

    /**
     * @return ContactEncoder
     */
    abstract public function getContactEncoder(): ContactEncoder;

    /**
     * @return string
     */
    abstract public function getFooterText(): string;
}
