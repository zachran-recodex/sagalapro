<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolePermissionSeeder::class,
            ServiceSeeder::class,
            HeroSectionSeeder::class,
            PartnerSeeder::class,
            FaqSeeder::class,
            FleetSeeder::class,
            SettingSeeder::class,
        ]);
    }
}
