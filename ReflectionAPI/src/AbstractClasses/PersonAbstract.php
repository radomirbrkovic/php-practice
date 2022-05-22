<?php

namespace ReflectionAPI\AbstractClasses;

use ReflectionAPI\Interfaces\PersonInterface;

abstract class PersonAbstract implements PersonInterface
{
    /**
     * Constructor of PersonAbstract class
     *
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(protected string $firstName, protected string $lastName)
    {
    }

    /**
     * @return string
     */
    protected function getFullName(): string
    {
        return $this->getFirstName()." ".$this->getLastName();
    }

}