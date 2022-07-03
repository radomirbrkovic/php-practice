<?php

namespace BehavioralPatterns\Visitor;

use BehavioralPatterns\Visitor\Interfaces\RoleInterface;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    /**
     * @var RecordingVisitor
     */
    private RecordingVisitor $visitor;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->visitor = new RecordingVisitor();
    }

    /**
     * @return array
     */
    public function provideRoles(): array
    {
        return [
            [new User('Dominik')],
            [new Group('Administrators')],
        ];
    }

    /**
     * @dataProvider provideRoles
     */
    public function testVisitSomeRole(RoleInterface $role): void
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}