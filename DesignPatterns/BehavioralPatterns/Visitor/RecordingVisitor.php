<?php

namespace BehavioralPatterns\Visitor;

use BehavioralPatterns\Visitor\Interfaces\RoleInterface;
use BehavioralPatterns\Visitor\Interfaces\RoleVisitorInterface;

class RecordingVisitor implements RoleVisitorInterface
{
    /**
     * @var RoleInterface[]
     */
    private array $visited = [];

    /**
     * @param User $role
     * @return void
     */
    public function visitUser(User $role): void
    {
        $this->visitRole($role);
    }

    /**
     * @param Group $role
     * @return void
     */
    public function visitGroup(Group $role): void
    {
        $this->visitRole($role);
    }

    /**
     * @param RoleInterface $role
     * @return void
     */
    private function visitRole(RoleInterface $role): void
    {
        $this->visited[] = $role;
    }

    /**
     * @return RoleInterface[]
     */
    public function getVisited(): array
    {
        return $this->visited;
    }
}