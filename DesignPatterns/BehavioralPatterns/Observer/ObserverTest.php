<?php

namespace BehavioralPatterns\Observer;

use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    /**
     * @return void
     */
    public function testChangeInUserLeadsToUserObserverBeingNotified(): void
    {
        $observer = new UserObserver();

        $user = new User();
        $user->attach($observer);

        $user->changeEmail('foo@bar.com');
        $this->assertCount(1, $observer->getChangedUsers());
    }

}