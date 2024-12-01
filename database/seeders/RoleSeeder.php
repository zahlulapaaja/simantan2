<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate(
            [
                'name' => 'admin'
            ],
            ['name' => 'admin']
        );
        Role::updateOrCreate(
            [
                'name' => 'writer'
            ],
            ['name' => 'writer']
        );
        Role::updateOrCreate(
            [
                'name' => 'guest'
            ],
            ['name' => 'guest']
        );
    }
}
