<?php

namespace CreationalPatterns\AbstractFactoryPattern\BusinessClasses;

use CreationalPatterns\AbstractFactoryPattern\Implementation\AppEncoder;
use CreationalPatterns\AbstractFactoryPattern\Implementation\CommsManager;
use CreationalPatterns\AbstractFactoryPattern\Implementation\ContactEncoder;
use CreationalPatterns\AbstractFactoryPattern\Implementation\TtdEncoder;

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

    /**
     * @return TtdEncoder
     */
    public function getTtdEncoder(): TtdEncoder
    {
        return new MegaTtdEncoder();
    }

    /**
     * @return ContactEncoder
     */
    public function getContactEncoder(): ContactEncoder
    {
        return new MegaContactEncoder();
    }
}