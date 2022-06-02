<?php

namespace CreationalPatterns\AbstractFactoryPattern\BusinessClasses;

use CreationalPatterns\AbstractFactoryPattern\Implementation\AppEncoder;

class BloggerAppEncoder extends AppEncoder
{
    /**
     * @return string
     */
    public function encode(): string
    {
       return "Blogger Encoder";
    }
}
