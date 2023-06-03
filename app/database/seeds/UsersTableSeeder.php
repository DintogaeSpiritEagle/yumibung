<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'UnleaSH23 Admin',
                'email'          => 'admin@unleash23.com',
                'password'       => bcrypt('unl3@SH'),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'UnleaSH23 User',
                'email'          => 'user@unleash23.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
            ],
            [
                'id'             => 3,
                'name'           => 'Admin User 2',
                'email'          => 'admin2@unleash23.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
