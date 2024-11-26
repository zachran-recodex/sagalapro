<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'title' => 'What types of aircraft do you provide for leasing?',
                'description' => 'We offer both dry and wet leasing options for a variety of aircraft, including helicopters and private jets, tailored to meet your specific needs.',
                'status' => true,
            ],
            [
                'title' => 'How do I know which service is right for me?',
                'description' => 'We offer both dry and wet leasing options for a variety of aircraft, including helicopters and private jets, tailored to meet your specific needs.',
                'status' => true,
            ],
            [
                'title' => 'What safety measures do you have in place?',
                'description' => 'We offer both dry and wet leasing options for a variety of aircraft, including helicopters and private jets, tailored to meet your specific needs.',
                'status' => true,
            ],
            [
                'title' => 'Can you assist with urgent cargo transport?',
                'description' => 'We offer both dry and wet leasing options for a variety of aircraft, including helicopters and private jets, tailored to meet your specific needs.',
                'status' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
