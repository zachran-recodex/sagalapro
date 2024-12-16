<?php

namespace Database\Seeders;

use App\Models\Fleet;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class FleetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fleets = [
            [
                'title' => 'Mi-8AMT',
                'slug' => Str::slug('Mi-8AMT'),
                'image' => 'fleets/fleet1.jpg',
                'gltf' => 'Mi-8t.gltf',
                'description' => 'The Mi-8AMT is a medium-sized, twin-engine helicopter designed for various missions in all weather. It has a five-bladed main rotor, a main rotor diameter of 21.294m, an empty weight of 6,350kg, and a cargo capacity of 4,000kg. Operated by a crew of three, it can carry 37 troops or 26 passengers. Key features include winch and hoist systems, an external sling for payloads, and an air-conditioning system, along with additional lighting and anti-icing equipment.',
                'practice_range' => '500',
                'cruise_speed' => '230',
                'maximum_speed' => '250',
                'normal_takeoff_weight' => '11,000',
                'max_takeoff_weight' => '13,000',
                'status' => true,
            ],
            [
                'title' => 'Mi-8MTV-1',
                'slug' => Str::slug('Mi-8MTV-1'),
                'image' => 'fleets/fleet2.jpg',
                'gltf' => 'Mi-8t.gltf',
                'description' => 'The Mi-8MTV-1  is a versatile, medium-lift transport helicopter developed in Russia, widely used for military, civilian, and transport roles. It has a length of 18.17 meters, a rotor diameter of 21.29 meters, and can carry up to 4,000 of payload, both internally and externally. Powered by two Klimov TV3-117VM engines, it reaches a top speed of 250 and has a range of 465, extendable to 1,065.',
                'practice_range' => '465',
                'cruise_speed' => '240',
                'maximum_speed' => '250',
                'normal_takeoff_weight' => '11,100',
                'max_takeoff_weight' => '13,000',
                'status' => true,
            ],
            [
                'title' => 'Mi-17-1V',
                'slug' => Str::slug('Mi-17-1V'),
                'image' => 'fleets/fleet3.jpg',
                'gltf' => 'Mi-8t.gltf',
                'practice_range' => '465',
                'cruise_speed' => '240',
                'maximum_speed' => '250',
                'normal_takeoff_weight' => '11,100',
                'max_takeoff_weight' => '13,000',
                'description' => 'The Mi-17-1V has a maximum takeoff weight of 13,000 and can carry 22 passengers along with a crew of 3. It is powered by two Motor Sich TV3-117VM engines, each producing 2,000 hp, allowing for a cruise speed between 220-250. The helicopter has a maximum range of 590.',
                'status' => true,
            ],
            [
                'title' => 'Mi-172',
                'slug' => Str::slug('Mi-172'),
                'image' => 'fleets/fleet4.jpg',
                'gltf' => 'Mi-8t.gltf',
                'description' => 'The Mi-172 has a maximum takeoff weight of 13,000 and accommodates 22 passengers with a crew of 3. It is powered by two Motor Sich TV3-117VM engines, each producing 2,200 hp, enabling a cruise speed of 240-250 and a maximum range of 620.',
                'practice_range' => '465',
                'cruise_speed' => '240',
                'maximum_speed' => '250',
                'normal_takeoff_weight' => '11,100',
                'max_takeoff_weight' => '13,000',
                'status' => true,
            ],
            [
                'title' => 'Mi-8T with STC-SBM1',
                'slug' => Str::slug('Mi-8T with STC-SBM1'),
                'image' => 'fleets/fleet5.jpg',
                'gltf' => 'Mi-8t.gltf',
                'description' => 'The Mi-8T with STC-SBM1 has a maximum takeoff weight of 12,000, it can carry 24 passengers or 4,000 of cargo. Powered by two STC-SBM1 engines, each producing 2,200 hp, it reaches a cruise speed of 230 and a maximum range of 500. The helicopter has a service ceiling of 4,500 m, making it suitable for more demanding missions in diverse environments while extending its operational lifespan.',
                'practice_range' => '465',
                'cruise_speed' => '240',
                'maximum_speed' => '250',
                'normal_takeoff_weight' => '11,100',
                'max_takeoff_weight' => '13,000',
                'status' => true,
            ],
            [
                'title' => 'Business Jet',
                'slug' => Str::slug('Business Jet'),
                'image' => 'fleets/fleet6.jpg',
                'gltf' => 'Mi-8t.gltf',
                'description' => 'The Mi-172 has a maximum takeoff weight of 13,000 and accommodates 22 passengers with a crew of 3. It is powered by two Motor Sich TV3-117VM engines, each producing 2,200 hp, enabling a cruise speed of 240-250 and a maximum range of 620.',
                'practice_range' => '465',
                'cruise_speed' => '240',
                'maximum_speed' => '250',
                'normal_takeoff_weight' => '11,100',
                'max_takeoff_weight' => '13,000',
                'status' => true,
            ],
        ];

        foreach ($fleets as $fleet) {
            Fleet::create($fleet);
        }
    }
}
