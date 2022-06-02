<?php

namespace CreationalPatterns\AbstractFactoryPattern\BusinessClasses;

use CreationalPatterns\AbstractFactoryPattern\Implementation\AppEncoder;
use CreationalPatterns\AbstractFactoryPattern\Implementation\CommsManager;
use CreationalPatterns\AbstractFactoryPattern\Implementation\ContactEncoder;
use CreationalPatterns\AbstractFactoryPattern\Implementation\TtdEncoder;

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

    /**
     * @return TtdEncoder
     */
    public function getTtdEncoder(): TtdEncoder
    {
        return new BloggerTtdEncoder();
    }

    /**
     * @return ContactEncoder
     */
    public function getContactEncoder(): ContactEncoder
    {
        return new BloggerContactEncoder();
    }
}