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
            'name'  => 'Moderator',
            'slug'  => Str::slug('Moderator')
        ]);

        Role::create([
            'name'  => 'Host',
            'slug'  => Str::slug('Host')
        ]);
    }
}
