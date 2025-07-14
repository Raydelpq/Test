<?php

namespace App\Domain\User\Services;

use App\Models\User;
use App\Domain\User\Contracts\UserServiceInterface;

class UserService implements UserServiceInterface
{
    public function getAllUsers(int $size = 20)
    {
        return User::with('roles')->paginate($size);
    }

    public function getUsersByRole($role, int $size = 20)
    {
        return User::role($role)->with('roles')->paginate($size);
    }

    public function getUserStatsByRole()
    {
        return User::with('roles')
            ->get()
            ->flatMap->roles
            ->groupBy('name')
            ->map->count();
    }
}