<?php

namespace Database\Seeders;

use App\Enums\User\UserStatuses;
use App\Enums\User\UserTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()
            ->create([
                'first_name' => 'admin',
                'status' => UserStatuses::ACTIVE,
                'type' => UserTypes::ADMIN,
                'last_name' => 'admin',
                'email' => 'a@a.ru',
                'password' => Hash::make('admin'),
                'permissions' => json_encode([
                    'platform.systems.roles' => true,
                    'platform.systems.users' => true,
                    'platform.systems.attachment' => true,
                    'platform.index' => true
                ])
            ]);
    }
}
