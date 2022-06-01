<?php

namespace CreationalPatterns\FactoryMethod\BusinessClasses;

use CreationalPatterns\FactoryMethod\Implementation\AppEncoder;
use CreationalPatterns\FactoryMethod\Implementation\CommsManager;

class BloggerCommsManager extends CommsManager
{
    /**
     * @return string
     */
    public function getHeaderText(): string
    {
       return "Blogger header";
    }

    /**
     * @return AppEncoder
     */
    public function getAppEncoder(): AppEncoder
    {
        return new BloggerAppEncoder();
    }

    /**
     * @return string
     */
    public function getFooterText(): string
    {
        return "Blogger footer";
    }
}