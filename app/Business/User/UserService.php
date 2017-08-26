<?php

namespace App\Business\User;

use App\Business\User\Persistence\Entity\User;
use App\Business\User\Persistence\UserRepository;

/**
 * This service handles all logic and repository calls for the user entity.
 */
class UserService
{
    private $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Return all persisted users.
     *
     * @return \App\Business\User\Persistence\Entity\User|static[]
     */
    public function findAll() {
        return $this->userRepository->findAll();
    }

    /**
     * Return a persisted user with given username.
     *
     * @param $username
     * @return \App\Business\User\Persistence\Entity\User
     */
    public function findByUsername($username) {
        return $this->userRepository->findByUsername($username);
    }
}