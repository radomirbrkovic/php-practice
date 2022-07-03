<?php

namespace BehavioralPatterns\Visitor\Interfaces;

use BehavioralPatterns\Visitor\Group;
use BehavioralPatterns\Visitor\User;

interface RoleVisitorInterface
{
    /**
     * @param User $role
     * @return mixed
     */
    public function visitUser(User $role);

    /**
     * @param Group $role
     * @return mixed
     */
    public function visitGroup(Group $role);
}