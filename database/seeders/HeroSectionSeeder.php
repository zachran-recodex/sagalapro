<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hero_sections = [
            [
                'title' => 'Triwalana Sagala Pro',
                'image' => 'hero_sections/service1.jpg',
                'status' => 'active',
            ],
            [
                'title' => 'Private Jet Charters & Flights',
                'image' => 'hero_sections/service2.jpg',
                'status' => 'active',
            ],
            [
                'title' => 'Heavy & Outsized Cargo Service',
                'image' => 'hero_sections/service3.jpg',
                'status' => 'active',
            ],
        ];

        foreach ($hero_sections as $hero_section) {
            HeroSection::create($hero_section);
        }
    }
}
