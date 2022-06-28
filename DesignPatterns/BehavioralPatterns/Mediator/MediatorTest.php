<?php

namespace BehavioralPatterns\Mediator;

use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    /**
     * @return void
     */
    public function testUserMediator()
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());

        $this->expectOutputString('User: Dominik');
        $mediator->printInfoAbout('Dominik');
    }
}