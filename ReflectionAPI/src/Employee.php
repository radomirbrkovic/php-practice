<?php

namespace ReflectionAPI;

use ReflectionAPI\AbstractClasses\PersonAbstract;

class Employee extends PersonAbstract
{

    /**
     *  Constructor of Employee class
     *
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param float $salary
     */
    public function __construct(
        string $firstName,
        string $lastName,
        protected string $email,
        protected float $salary
    )
    {
        parent::__construct($firstName, $lastName);
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $email
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param float $salary
     * @return void
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }
}