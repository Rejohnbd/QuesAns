<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id'   => 1,
            'name'      => 'Admin User',
            'email'     => 'admin@mail.com',
            'password'  => Hash::make('password')
        ]);

        User::create([
            'role_id'   => 2,
            'name'      => 'Client User',
            'email'     => 'client@mail.com',
            'password'  => Hash::make('password')
        ]);

        User::create([
            'role_id'   => 3,
            'name'      => 'Employee User',
            'email'     => 'employee@mail.com',
            'password'  => Hash::make('password')
        ]);
    }
}
