<?php

namespace App\Business\User\Web;

use \App\Http\Controllers\Controller;
use \App\Business\User\UserService;

/**
 * This controller handles all api requests for the user entity.
 *
 * Class UserApiController
 * @package App\Business\User\Web
 */
class UserApiController extends Controller
{
    private $userService;

    function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Return all persisted users.
     *
     * @return \App\Business\User\Persistence\Entity\User|static[]
     */
    public function findAll() {
        return $this->userService->findAll();
    }

    /**
     * Return a single persisted user with given username.
     *
     * @param $username
     * @return \App\Business\User\Persistence\Entity\User
     */
    public function findByUsername($username) {
        return $this->userService->findByUsername($username);
    }

}