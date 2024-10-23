<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'manage services',
            'manage blogs',
            'manage faqs',
            'manage partners',
            'manage contacts',
            'manage hero_sections',
            'manage fleets',
            'manage settings',
        ];

        foreach($permissions as $permission){
            Permission::firstOrCreate(
                [
                    'name' => $permission
                ]
            );
        }

        $designManagerRole = Role::firstOrCreate([
            'name' => 'designer_manager'
        ]);

        $designManagerPermissions = [
            'manage fleets',
            'manage services',
        ];

        $designManagerRole->syncPermissions($designManagerPermissions);

        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin'
        ]);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@sagalapro.com',
            'password' => bcrypt('admin123')
        ]);

        $user->assignRole($superAdminRole);
    }
}
