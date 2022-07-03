<?php

namespace BehavioralPatterns\Visitor\Interfaces;

use BehavioralPatterns\Visitor\Group;
use BehavioralPatterns\Visitor\User;

interface RoleVisitorInterface
{
    /**
     * @param User $role
     * @return void
     */
    public function visitUser(User $role): void;

    /**
     * @param Group $role
     * @return void
     */
    public function visitGroup(Group $role): void;
}