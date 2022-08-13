<?php

namespace BehavioralPatterns\Mediator;

use BehavioralPatterns\Mediator\Interfaces\MediatorInterface;

class UserRepositoryUiMediator implements MediatorInterface
{

    /**
     * @param UserRepository $userRepository
     * @param UserInfo $userInfo
     */
    public function __construct(private UserRepository $userRepository, private UserInfo $userInfo)
    {
        $this->userRepository->setMediator($this);
        $this->userInfo->setMediator($this);
    }

    /**
     * @param string $user
     * @return void
     */
    public function printInfoAbout(string $user)
    {
        $this->userInfo->outputUserInfo($user);
    }

    /**
     * @param string $username
     * @return string
     */
    public function getUser(string $username): string
    {
        return $this->userRepository->getUserName($username);
    }
}