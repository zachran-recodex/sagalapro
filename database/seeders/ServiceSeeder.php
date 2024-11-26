<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Aircraft & Helicopter Acquisition',
                'slug' => Str::slug('Aircraft & Helicopter Acquisition'),
                'description' => 'We specialize in the acquisition of aircraft and helicopters tailored to your specific needs. Whether you are looking to purchase new or pre-owned aircraft, our team will guide you through the entire process, from initial consultation to final delivery.',
                'image' => 'services/service1.jpg',
                'status' => true,
            ],
            [
                'title' => 'Aerial Fire-Fighting Consultant & Operation',
                'slug' => Str::slug('Aerial Fire-Fighting Consultant & Operation'),
                'description' => 'SagalaPro provides a range of helicopters for various needs, from commercial and recreational to travel and fire-fighting operations. Our helicopters are ideal for reaching remote or congested areas quickly and safely.',
                'image' => 'services/service2.jpg',
                'status' => true,
            ],
            [
                'title' => 'Heavy & Outsized Cargo Service',
                'slug' => Str::slug('Heavy & Outsized Cargo Service'),
                'description' => 'Transporting heavy and outsized cargo requires expertise and precision. SagalaPro leverages in-depth knowledge of cargo aircraft capabilities to arrange the transportation of large and bulky items efficiently and safely. Need immediate delivery? Contact us, and we will handle the rest.',
                'image' => 'services/service3.jpg',
                'status' => true,
            ],
            [
                'title' => 'Private Jet Charters & Flights',
                'slug' => Str::slug('Private Jet Charters & Flights'),
                'description' => 'Experience the ultimate in luxury travel with SagalaPro’s private jet charters. Whether for business or leisure, our charters provide a flexible, on-demand solution that puts your comfort and convenience first.',
                'image' => 'services/service4.jpg',
                'status' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
