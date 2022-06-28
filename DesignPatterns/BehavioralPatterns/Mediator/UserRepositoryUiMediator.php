<?php

namespace BehavioralPatterns\Mediator;

use BehavioralPatterns\Mediator\Interfaces\MediatorInterface;

class UserRepositoryUiMediator implements MediatorInterface
{

    /**
     * @param UserRepository $userRepository
     * @param Ui $ui
     */
    public function __construct(private UserRepository $userRepository, private Ui $ui)
    {
        $this->userRepository->setMediator($this);
        $this->ui->setMediator($this);
    }

    /**
     * @param string $user
     * @return void
     */
    public function printInfoAbout(string $user)
    {
        $this->ui->outputUserInfo($user);
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