<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            [
                'image' => 'partners/service1.jpg',
                'status' => true,
            ],
            [
                'image' => 'partners/service2.jpg',
                'status' => true,
            ],
            [
                'image' => 'partners/service3.jpg',
                'status' => true,
            ],
            [
                'image' => 'partners/service4.jpg',
                'status' => true,
            ],
            [
                'image' => 'partners/service5.jpg',
                'status' => true,
            ],
            [
                'image' => 'partners/service6.jpg',
                'status' => true,
            ],
            [
                'image' => 'partners/service7.jpg',
                'status' => true,
            ],
            [
                'image' => 'partners/service8.jpg',
                'status' => true,
            ],
            [
                'image' => 'partners/service9.jpg',
                'status' => true,
            ],
            [
                'image' => 'partners/service10.jpg',
                'status' => true,
            ],
            [
                'image' => 'partners/service11.jpg',
                'status' => true,
            ],
            [
                'image' => 'partners/service12.jpg',
                'status' => true,
            ],
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
