<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'logo' => 'logo.png',
            'favicon' => 'favicon.ico',
            'phone_one' => '+62-21-22580028',
            'phone_two' => '+62-21-22580028',
            'email_one' => 'office@sagalapro.com',
            'email_two' => 'sales@sagalapro.com',
            'address' => 'PT. Triwalana Sagala Pro STC Senayan 2nd Floor – Room 89 Jln. Asia Afrika Pintu IX, Gelora Senayan, Jakarta Pusat - 10270',
            'operational_address' => 'Jl. Sultan Iskandar Muda (Arteri Pondok Indah) No.12 Lantai 2, RT.11/RW.09 Kebayoran Lama, Jakarta Selatan - 12240',
            'footer_text' => 'We offer comprehensive aviation services, including aircraft leasing, cargo transport, aerial surveillance, and private jet charters. We are dedicated to safety, reliability, and customer satisfaction. Contact us to learn more about our services.',
        ]);
    }
}
