<?php

namespace App\Business\User\Persistence;

use App\Business\User\Persistence\Entity\User;

/**
 * This repository handles all database operations for the user entity.
 *
 * Class UserRepository
 * @package App\Business\User\Persistence
 */
class UserRepository
{

    /**
     * Return all persisted users.
     *
     * @return \App\Business\User\Persistence\Entity\User|static[]
     */
    public function findAll(){
        return User::all();
    }

    /**
     * Query all persisted users where 'name' equals given username.
     *
     * @param $username
     * @return \App\Business\User\Persistence\Entity\User|null|static
     */
    public function findByUsername($username) {
        return User::where('name', $username)->first();
    }
}