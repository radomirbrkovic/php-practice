<?php

namespace CreationalPatterns\Singleton;

use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    /**
     * @return void
     */
    public function testGetInstance()
    {
        $preference = Preference::getInstance();
        $this->assertTrue($preference instanceof Preference);
    }
}