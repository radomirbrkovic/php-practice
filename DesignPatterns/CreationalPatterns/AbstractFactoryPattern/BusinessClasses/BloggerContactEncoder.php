<?php

namespace CreationalPatterns\AbstractFactoryPattern\BusinessClasses;

use CreationalPatterns\AbstractFactoryPattern\Implementation\ContactEncoder;

class BloggerContactEncoder extends ContactEncoder
{
    /**
     * @return string
     */
    public function encode(): string
    {
       return "Blogger Encoder";
    }
}
