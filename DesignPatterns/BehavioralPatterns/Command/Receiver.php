<?php

namespace BehavioralPatterns\Command;

class Receiver
{
    /**
     * @var bool
     */
    private bool $enableDate = false;

    /**
     * @var array
     */
    private array $output = [];

    /**
     * @param string $str
     * @return void
     */
    public function write(string $str): void
    {
        if ($this->enableDate) {
            $str .= ' [' . date('Y-m-d') . ']';
        }

        $this->output[] = $str;
    }

    /**
     * @return string
     */
    public function getOutput(): string
    {
        return join("\n", $this->output);
    }

    /**
     * @return void
     */
    public function enableDate(): void
    {
        $this->enableDate = true;
    }

    /**
     * @return void
     */
    public function disableDate(): void
    {
        $this->enableDate = false;
    }
}