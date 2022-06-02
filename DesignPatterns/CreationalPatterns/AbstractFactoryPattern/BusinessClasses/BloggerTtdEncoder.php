<?php

namespace CreationalPatterns\AbstractFactoryPattern\BusinessClasses;

use CreationalPatterns\AbstractFactoryPattern\Implementation\TtdEncoder;

class BloggerTtdEncoder extends TtdEncoder
{
    /**
     * @return string
     */
    public function encode(): string
    {
       return "Blogger Encoder";
    }
}
