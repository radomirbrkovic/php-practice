<?php

namespace CreationalPatterns\FactoryMethod\BusinessClasses;

use CreationalPatterns\FactoryMethod\Implementation\AppEncoder;
use CreationalPatterns\FactoryMethod\Implementation\CommsManager;

class MegaCommsManager extends CommsManager
{
    /**
     * @return string
     */
    public function getHeaderText(): string
    {
       return "Mega header";
    }

    /**
     * @return AppEncoder
     */
    public function getAppEncoder(): AppEncoder
    {
        return new MegaAppEncoder();
    }

    /**
     * @return string
     */
    public function getFooterText(): string
    {
        return "Mega footer";
    }
}