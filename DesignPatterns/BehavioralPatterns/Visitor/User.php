<?php

namespace BehavioralPatterns\Visitor;

use BehavioralPatterns\Visitor\Interfaces\RoleInterface;
use BehavioralPatterns\Visitor\Interfaces\RoleVisitorInterface;

class User implements RoleInterface
{
    /**
     * @param string $name
     */
    public function __construct(private string $name)
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return sprintf('User %s', $this->name);
    }

    /**
     * @param RoleVisitorInterface $visitor
     * @return void
     */
    public function accept(RoleVisitorInterface $visitor): void
    {
        $visitor->visitUser($this);
    }
}