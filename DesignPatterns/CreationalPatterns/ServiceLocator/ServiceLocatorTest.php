<?php

namespace CreationalPatterns\ServiceLocator;

use PHPUnit\Framework\TestCase;

class ServiceLocatorTest extends TestCase
{
    /**
     * @var ServiceLocator
     */
    private ServiceLocator $serviceLocator;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->serviceLocator = new ServiceLocator();
    }

    /**
     * @return void
     */
    public function testHasServices()
    {
        $this->serviceLocator->addInstance(LogService::class, new LogService());

        $this->assertTrue($this->serviceLocator->has(LogService::class));
        $this->assertFalse($this->serviceLocator->has(self::class));
    }

    /**
     * @return void
     */
    public function testGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYet()
    {
        $this->serviceLocator->addClass(LogService::class, []);
        $logger = $this->serviceLocator->get(LogService::class);

        $this->assertInstanceOf(LogService::class, $logger);
    }
}