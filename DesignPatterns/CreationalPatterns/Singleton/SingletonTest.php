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

    /**
     * @return void
     */
    public function testSetData()
    {
        $preference = Preference::getInstance();
        $preference->setProperty('name', 'John');
        $this->assertEquals('John', $preference->getProperty('name'));
    }

    /**
     * @return void
     */
    public function testReadOnlyData()
    {
        $preference = Preference::getInstance();
        $this->assertEquals('John', $preference->getProperty('name'));
    }

    public function testOverrideData()
    {
        $preference = Preference::getInstance();
        $preference->setProperty('name', 'John 2');
        $this->assertEquals('John 2', $preference->getProperty('name'));
    }
}