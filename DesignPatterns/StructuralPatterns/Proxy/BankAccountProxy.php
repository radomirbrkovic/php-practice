<?php

namespace StructuralPatterns\Proxy;

class BankAccountProxy extends HeavyBankAccount
{
    /**
     * @var int|null
     */
    private ?int $balance = null;

    /**
     * @return int
     */
    public function getBalance(): int
    {
        if($this->balance === null) {
            $this->balance = parent::getBalance();
        }

        return $this->balance;
    }
}