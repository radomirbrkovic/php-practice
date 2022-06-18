<?php

namespace StructuralPatterns\Flyweight;

use StructuralPatterns\Flyweight\Interfaces\TextInterface;

class TextFactory implements \Countable
{
    /**
     * @var array
     */
    private array $charPool = [];

    /**
     * @param string $name
     * @return TextInterface
     */
    public function get(string $name): TextInterface
    {
        if (!isset($this->charPool[$name])) {
            $this->charPool[$name] = $this->create($name);
        }

        return $this->charPool[$name];
    }

    /**
     * @param string $name
     * @return TextInterface
     */
    private function create(string $name): TextInterface
    {
        if (strlen($name) == 1) {
            return new Character($name);
        } else {
            return new Word($name);
        }
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->charPool);
    }
}