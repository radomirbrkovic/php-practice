<?php

namespace StructuralPatterns\Proxy\Interfaces;

interface BankAccountInterface
{
    /**
     * @param int $amount
     * @return void
     */
    public function deposit(int $amount): void;

    /**
     * @return int
     */
    public function getBalance(): int;
}