<?php

namespace BehavioralPatterns\Visitor\Interfaces;

interface RoleInterface
{
    /**
     * @param RoleVisitorInterface $visitor
     * @return void
     */
    public function accept(RoleVisitorInterface $visitor): void;
}