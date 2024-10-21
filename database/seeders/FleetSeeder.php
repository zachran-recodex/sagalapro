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
                'gltf' => '3d/Mi-8t.gltf',
                'description' => 'The Mi-8AMT is a medium-sized, twin-engine helicopter designed for various missions in all weather. It has a five-bladed main rotor, a main rotor diameter of 21.294m, an empty weight of 6,350kg, and a cargo capacity of 4,000kg. Operated by a crew of three, it can carry 37 troops or 26 passengers. Key features include winch and hoist systems, an external sling for payloads, and an air-conditioning system, along with additional lighting and anti-icing equipment.',
                'status' => 'active',
            ],
            [
                'title' => 'Mi-8MTV-1',
                'slug' => Str::slug('Mi-8MTV-1'),
                'image' => 'fleets/fleet2.jpg',
                'gltf' => '3d/Mi-8t.gltf',
                'description' => 'The Mi-8MTV-1  is a versatile, medium-lift transport helicopter developed in Russia, widely used for military, civilian, and transport roles. It has a length of 18.17 meters, a rotor diameter of 21.29 meters, and can carry up to 4,000 kg of payload, both internally and externally. Powered by two Klimov TV3-117VM engines, it reaches a top speed of 250 km/h and has a range of 465 km, extendable to 1,065 km.',
                'status' => 'active',
            ],
            [
                'title' => 'Mi-17-1V',
                'slug' => Str::slug('Mi-17-1V'),
                'image' => 'fleets/fleet3.jpg',
                'gltf' => '3d/Mi-8t.gltf',
                'description' => 'The Mi-17-1V has a maximum takeoff weight of 13,000 kg and can carry 22 passengers along with a crew of 3. It is powered by two Motor Sich TV3-117VM engines, each producing 2,000 hp, allowing for a cruise speed between 220-250 km/h. The helicopter has a maximum range of 590 km.',
                'status' => 'active',
            ],
            [
                'title' => 'Mi-172',
                'slug' => Str::slug('Mi-172'),
                'image' => 'fleets/fleet4.jpg',
                'gltf' => '3d/Mi-8t.gltf',
                'description' => 'The Mi-172 has a maximum takeoff weight of 13,000 kg and accommodates 22 passengers with a crew of 3. It is powered by two Motor Sich TV3-117VM engines, each producing 2,200 hp, enabling a cruise speed of 240-250 km/h and a maximum range of 620 km.',
                'status' => 'active',
            ],
            [
                'title' => 'Mi-8T with STC-SBM1',
                'slug' => Str::slug('Mi-8T with STC-SBM1'),
                'image' => 'fleets/fleet5.jpg',
                'gltf' => '3d/Mi-8t.gltf',
                'description' => 'The Mi-8T with STC-SBM1 has a maximum takeoff weight of 12,000 kg, it can carry 24 passengers or 4,000 kg of cargo. Powered by two STC-SBM1 engines, each producing 2,200 hp, it reaches a cruise speed of 230 km/h and a maximum range of 500 km. The helicopter has a service ceiling of 4,500 m, making it suitable for more demanding missions in diverse environments while extending its operational lifespan.',
                'status' => 'active',
            ],
            [
                'title' => 'Business Jet',
                'slug' => Str::slug('Business Jet'),
                'image' => 'fleets/fleet6.jpg',
                'gltf' => '3d/Mi-8t.gltf',
                'description' => 'The Mi-172 has a maximum takeoff weight of 13,000 kg and accommodates 22 passengers with a crew of 3. It is powered by two Motor Sich TV3-117VM engines, each producing 2,200 hp, enabling a cruise speed of 240-250 km/h and a maximum range of 620 km.',
                'status' => 'active',
            ],
        ];

        foreach ($fleets as $fleet) {
            Fleet::create($fleet);
        }
    }
}
