<?php

namespace StructuralPatterns\Proxy;

use StructuralPatterns\Proxy\Interfaces\BankAccountInterface;

class HeavyBankAccount implements BankAccountInterface
{
    /**
     * @var array
     */
    private array $transactions = [];

    /**
     * @param int $amount
     * @return void
     */
    public function deposit(int $amount): void
    {
        $this->transactions[] = $amount;
    }

    /**
     * @return int
     */
    public function getBalance(): int
    {
        return array_sum($this->transactions);
    }
}