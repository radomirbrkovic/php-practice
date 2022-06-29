<?php

namespace BehavioralPatterns\Observer;

use SplSubject;
use SplObjectStorage;
use SplObserver;

class User implements SplSubject
{

    /**
     * @var SplObjectStorage
     */
    private SplObjectStorage $observers;

    /**
     * @var string
     */
    private string $email;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    /**
     * @param string $email
     * @return void
     */
    public function changeEmail(string $email): void
    {
        $this->email = $email;
        $this->notify();
    }

    /**
     * @return void
     */
    public function notify(): void
    {
        /** @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}