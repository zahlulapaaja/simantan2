<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin'
            ],
            ['name' => 'admin']
        );
        $role_writer = Role::updateOrCreate(
            [
                'name' => 'writer'
            ],
            ['name' => 'writer']
        );
        $role_guest = Role::updateOrCreate(
            [
                'name' => 'guest'
            ],
            ['name' => 'guest']
        );

        $permission = Permission::updateOrCreate(
            [
                'name' => 'view_dashboard',
            ],
            ['name' => 'view_dashboard']
        );

        $permission2 = Permission::updateOrCreate(
            [
                'name' => 'view_chart_on_dashboard',
            ],
            ['name' => 'view_chart_on_dashboard']
        );

        $role_admin->givePermissionTo($permission);
        $role_admin->givePermissionTo($permission2);
        $role_writer->givePermissionTo($permission2);

        $user = User::where('email', 'like', 'admin%')->first();
        // $user->assignRole(['admin', 'writer']);
        $user->assignRole(['admin']);
    }
}
