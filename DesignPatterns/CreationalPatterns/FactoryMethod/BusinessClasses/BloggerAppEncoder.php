<?php

namespace CreationalPatterns\FactoryMethod\BusinessClasses;

use CreationalPatterns\FactoryMethod\Implementation\AppEncoder;

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
