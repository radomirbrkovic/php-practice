<?php

namespace StructuralPatterns\Proxy;

use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    /**
     * @return void
     */
    public function testProxyWillOnlyExecuteExpensiveGetBalanceOnce()
    {
        $bankAccount = new BankAccountProxy();
        $bankAccount->deposit(30);

        $this->assertSame(30, $bankAccount->getBalance());
        $bankAccount->deposit(50);
        $this->assertSame(30, $bankAccount->getBalance());
    }
}