<?php

namespace App\Domain\User\Contracts;

interface UserServiceInterface
{
    public function getAllUsers();
    public function getUsersByRole(string $role);
    public function getUserStatsByRole();
}