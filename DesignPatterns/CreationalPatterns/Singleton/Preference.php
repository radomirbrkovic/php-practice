<?php

namespace DesignPattern\CreationalPatterns\Singleton;

class Preference
{
    /**
     * @var array
     */
    private array $props = [];

    /**
     * @var Preference
     */
    private static Preference $instance;

    /**
     * Making a private constructor we remove possibility to make direct instance of the class
     */
    private function __construct()
    {
    }

    /**
     * @return Preference
     */
    public static function getInstance(): Preference
    {
        if(empty(self::$instance)) {
            self::$instance = new Preference();
        }

        return self::$instance;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function setProperty(string $key, mixed $value): void
    {
        $this->props[$key] = $value;
    }

    /**
     * @param string $key
     * @return mixed|null
     */
    public function getProperty(string $key)
    {
        if(!empty($this->props[$key])) {
            return $this->props[$key];
        }

        return null;
    }
}