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
        $heroSections = [
            [
                'title' => 'Triwalana Sagala Pro',
                'image' => 'hero-sections/service1.jpg',
                'status' => true,
            ],
            [
                'title' => 'Private Jet Charters & Flights',
                'image' => 'hero-sections/service2.jpg',
                'status' => true,
            ],
            [
                'title' => 'Heavy & Outsized Cargo Service',
                'image' => 'hero-sections/service3.jpg',
                'status' => true,
            ],
        ];

        foreach ($heroSections as $heroSection) {
            HeroSection::create($heroSection);
        }
    }
}
