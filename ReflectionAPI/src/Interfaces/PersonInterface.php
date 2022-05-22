<?php

namespace ReflectionAPI\Interfaces;

interface PersonInterface
{
    /**
     * @param string $firstName
     * @return void
     */
    public function setFirstName(string $firstName): void;

    /**
     * @return string
     */
    public function getFirstName(): string;

    /**
     * @param string $lastName
     * @return void
     */
    public function setLastName(string $lastName): void;

    /**
     * @return string
     */
    public function getLastName(): string;
}