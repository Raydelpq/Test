<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['manager', 'revisor', 'comprador'];

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        }

        foreach (range(1, 100) as $i) {
            $user = User::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => bcrypt('password'),
            ]);

            $user->assignRole($roles[array_rand($roles)]);
        }
    }
}
