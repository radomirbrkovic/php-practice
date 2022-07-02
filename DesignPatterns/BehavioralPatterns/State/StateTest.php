<?php

namespace BehavioralPatterns\State;

use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    /**
     * @return void
     */
    public function testIsCreatedWithStateCreated(): void
    {
        $orderContext = OrderContext::create();
        $this->assertSame('created', $orderContext->toString());
    }

    /**
     * @return void
     */
    public function testCanProceedToStateShipped(): void
    {
        $contextOrder = OrderContext::create();
        $contextOrder->proceedToNext();

        $this->assertSame('shipped', $contextOrder->toString());
    }

    /**
     * @return void
     */
    public function testCanProceedToStateDone(): void
    {
        $contextOrder = OrderContext::create();
        $contextOrder->proceedToNext();
        $contextOrder->proceedToNext();

        $this->assertSame('done', $contextOrder->toString());
    }

    /**
     * @return void
     */
    public function testStateDoneIsTheLastPossibleState(): void
    {
        $contextOrder = OrderContext::create();
        $contextOrder->proceedToNext();
        $contextOrder->proceedToNext();
        $contextOrder->proceedToNext();

        $this->assertSame('done', $contextOrder->toString());
    }

}