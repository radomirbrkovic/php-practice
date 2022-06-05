<?php

namespace CreationalPatterns\ServiceLocator;

use OutOfRangeException;
use InvalidArgumentException;

class ServiceLocator
{
    /**
     * @var string[][]
     */
    private array $services = [];

    /**
     * @var ServiceInterface[]
     */
    private array $instantiated = [];

    /**
     * @param string $class
     * @param ServiceInterface $service
     * @return void
     */
    public function addInstance(string $class, ServiceInterface $service)
    {
        $this->instantiated[$class] = $service;
    }

    /**
     * @param string $class
     * @param array $params
     * @return void
     */
    public function addClass(string $class, array $params)
    {
        $this->services[$class] = $params;
    }

    /**
     * @param string $interface
     * @return bool
     */
    public function has(string $interface): bool
    {
        return isset($this->services[$interface]) || isset($this->instantiated[$interface]);
    }

    /**
     * @param string $class
     * @return ServiceInterface
     */
    public function get(string $class): ServiceInterface
    {
        if (isset($this->instantiated[$class])) {
            return $this->instantiated[$class];
        }

        $args = $this->services[$class];

        switch (count($args)) {
            case 0:
                $object = new $class();
                break;
            case 1:
                $object = new $class($args[0]);
                break;
            case 2:
                $object = new $class($args[0], $args[1]);
                break;
            case 3:
                $object = new $class($args[0], $args[1], $args[2]);
                break;
            default:
                throw new OutOfRangeException('Too many arguments given');
        }

        if (!$object instanceof ServiceInterface) {
            throw new InvalidArgumentException('Could not register service: is no instance of Service');
        }

        $this->instantiated[$class] = $object;

        return $object;
    }

}