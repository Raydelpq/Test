<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = ['manager', 'revisor', 'comprador'];

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        }

        User::factory()
            ->count(100)
            ->create()
            ->each(function ($user) use ($roles) {
                $user->assignRole($roles[array_rand($roles)]);
            });
    }
}
