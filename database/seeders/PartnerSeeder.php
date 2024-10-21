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
                'status' => 'active',
            ],
            [
                'image' => 'partners/service2.jpg',
                'status' => 'active',
            ],
            [
                'image' => 'partners/service3.jpg',
                'status' => 'active',
            ],
            [
                'image' => 'partners/service4.jpg',
                'status' => 'active',
            ],
            [
                'image' => 'partners/service5.jpg',
                'status' => 'active',
            ],
            [
                'image' => 'partners/service6.jpg',
                'status' => 'active',
            ],
            [
                'image' => 'partners/service7.jpg',
                'status' => 'active',
            ],
            [
                'image' => 'partners/service8.jpg',
                'status' => 'active',
            ],
            [
                'image' => 'partners/service9.jpg',
                'status' => 'active',
            ],
            [
                'image' => 'partners/service10.jpg',
                'status' => 'active',
            ],
            [
                'image' => 'partners/service11.jpg',
                'status' => 'active',
            ],
            [
                'image' => 'partners/service12.jpg',
                'status' => 'active',
            ],
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
