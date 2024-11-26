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
        // Daftar permission yang akan dibuat
        $permissions = [
            'manage services',
            'manage blogs',
            'manage faqs',
            'manage partners',
            'manage contacts',
            'manage hero sections',
            'manage fleets',
            'manage settings',
        ];

        // Membuat permission jika belum ada
        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
            ]);
        }

        // Membuat role 'admin'
        $adminRole = Role::firstOrCreate([
            'name' => 'admin',
        ]);

        // Membuat user Admin jika belum ada
        $admin = User::firstOrCreate(
            ['email' => 'admin@sagalapro.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('admin123'),
            ]
        );

        // Assign role 'admin' ke Admin
        $admin->assignRole($adminRole);

        // Membuat user Sylvia jika belum ada
        $sylvia = User::firstOrCreate(
            ['email' => 'sylvia@sagalapro.com'],
            [
                'name' => 'Sylvia',
                'password' => bcrypt('sylvia123'),
            ]
        );

        // Assign role 'admin' ke Sylvia
        $sylvia->assignRole($adminRole);
    }
}
