<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'  => 'Admin',
            'slug'  => Str::slug('Admin')
        ]);

        Role::create([
            'name'  => 'Client',
            'slug'  => Str::slug('Client')
        ]);

        Role::create([
            'name'  => 'Employee',
            'slug'  => Str::slug('Employee')
        ]);
    }
}
