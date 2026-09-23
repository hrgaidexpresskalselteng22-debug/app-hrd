<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'role_id' => 1,
            'name' => 'Administrator',
            'email' => 'admin@hrd.test',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Manager',
            'email' => 'manager@hrd.test',
            'password' => Hash::make('password'),
        ]);
    }
}
