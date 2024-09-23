@extends('layouts.main')

@section('content')
    <!-- Title Section -->
    <section class="py-8 sm:py-12 lg:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
                <div class="col-span-2">
                    <h3 class="text-[#2A6F97] text-7xl font-light">Explore Our Exclusive Fleet.</h3>
                </div>
                <div class="">
                    <p class="text-end border-b-2 border-black pb-4">
                        Equipped for rapid response and precision, our helicopters are built to combat wildfires
                        efficiently, protecting lives and landscapes with cutting-edge aerial fire-fighting technology.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fleet Section 1: Mi-8AMT -->
    <section class="py-8 sm:py-12 lg:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
                <div>
                    <img src="{{ asset('images/heli1.png') }}" alt="Mi-8AMT Helicopter"
                        class="w-full h-auto rounded-lg shadow-lg">
                </div>
                <div class="col-span-2">
                    <h2 class="text-[#2A6F97] text-2xl font-bold mb-4 pb-4 border-b-2 border-black">Mi-8AMT</h2>
                    <p class="text-gray-700 text-justify mb-6">
                        The Mi-8AMT is a medium-sized, twin-engine helicopter designed for various missions in all weather.
                        It has a five-bladed main rotor, a main rotor diameter of 21.294m, an empty weight of 6,350kg, and a
                        cargo capacity of 4,000kg. Operated by a crew of three, it can carry 37 troops or 26 passengers. Key
                        features include winch and hoist systems, an external sling for payloads, and an air-conditioning
                        system, along with additional lighting and anti-icing equipment.
                    </p>
                    <a href="#" class="inline-block py-2 border-b-2 border-black">
                        Discover Mi-8AMT
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Fleet Section 2: Mi-8MTV-1 -->
    <section class="py-8 sm:py-12 lg:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
                <div class="col-span-2">
                    <h2 class="text-[#2A6F97] text-2xl font-bold mb-4 pb-4 border-b-2 border-black">Mi-8MTV-1</h2>
                    <p class="text-gray-700 text-justify mb-6">
                        The Mi-8MTV-1 is a versatile, medium-lift transport helicopter developed in Russia, widely used for
                        military, civilian, and transport roles. It has a length of 18.17 meters, a rotor diameter of 21.29
                        meters, and can carry up to 4,000 kg of payload, both internally and externally. Powered by two
                        Klimov TV3-117VM engines, it reaches a top speed of 250 km/h and has a range of 465 km, extendable
                        to 1,065 km.
                    </p>
                    <a href="#" class="inline-block py-2 border-b-2 border-black">
                        Discover Mi-8MTV-1
                    </a>
                </div>
                <div>
                    <img src="{{ asset('images/heli2.png') }}" alt="Mi-8MTV-1 Helicopter"
                        class="w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Fleet Section 3: Mi-17-1V -->
    <section class="py-8 sm:py-12 lg:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
                <div>
                    <img src="{{ asset('images/heli3.png') }}" alt="Mi-17-1V Helicopter"
                        class="w-full h-auto rounded-lg shadow-lg">
                </div>
                <div class="col-span-2">
                    <h2 class="text-[#2A6F97] text-2xl font-bold mb-4 pb-4 border-b-2 border-black">Mi-17-1V</h2>
                    <p class="text-gray-700 text-justify mb-6">
                        The Mi-17-1V has a maximum takeoff weight of 13,000 kg and can carry 22 passengers along with a crew
                        of 3. It is powered by two Motor Sich TV3-117VM engines, each producing 2,000 hp, allowing for a
                        cruise speed between 220-250 km/h. The helicopter has a maximum range of 590 km.
                    </p>
                    <a href="#" class="inline-block py-2 border-b-2 border-black">
                        Discover Mi-17-1V
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Request a Quote Section -->
    <section class="bg-[#2A6F97] py-8 sm:py-12 lg:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-white lg:text-start text-center">
            <h3 class="text-2xl sm:text-3xl font-semibold mb-4">
                Request a Quote
            </h3>
            <p class="text-base sm:text-lg md:text-xl mb-6 text-justify">
                Looking for tailored aviation solutions? Request a quote today and get a customized solution that meets your
                needs. Fill out our form or contact us directly for a quick response.
            </p>
            <a href="{{ route('contact') }}"
                class="inline-flex items-center border border-white py-2 px-4 sm:py-3 sm:px-6 text-base sm:text-lg transition hover:bg-white hover:text-[#2A6F97]">
                Get a Quote
            </a>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-8 sm:py-12 lg:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Section -->
                <div class="lg:col-span-1 flex flex-col justify-center">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-4 text-black">Frequently Asked Questions</h2>
                    <a href="{{ route('contact') }}" class="text-blue-500 underline">Contact Support</a>
                </div>

                <!-- Right Section -->
                <div class="lg:col-span-2">
                    <div class="divide-y divide-gray-200">
                        <!-- FAQ 1 -->
                        <div class="py-4">
                            <div class="flex justify-between items-center">
                                <h3 class="font-semibold text-lg">What types of aircraft do you provide for leasing?</h3>
                                <button class="text-xl toggle-faq" data-target="faq-1" aria-expanded="false">+</button>
                            </div>
                            <p class="mt-2 text-gray-500 faq-content hidden" id="faq-1">
                                We offer both dry and wet leasing options for a variety of aircraft, including helicopters
                                and private jets, tailored to meet your specific needs.
                            </p>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="py-4">
                            <div class="flex justify-between items-center">
                                <h3 class="font-semibold text-lg">How do I know which service is right for me?</h3>
                                <button class="text-xl toggle-faq" data-target="faq-2" aria-expanded="false">+</button>
                            </div>
                            <p class="mt-2 text-gray-500 faq-content hidden" id="faq-2">
                                Our team will assess your specific needs and recommend the best service for your situation.
                            </p>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="py-4">
                            <div class="flex justify-between items-center">
                                <h3 class="font-semibold text-lg">What safety measures do you have in place?</h3>
                                <button class="text-xl toggle-faq" data-target="faq-3" aria-expanded="false">+</button>
                            </div>
                            <p class="mt-2 text-gray-500 faq-content hidden" id="faq-3">
                                We follow stringent safety protocols that comply with international aviation safety
                                standards.
                            </p>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="py-4">
                            <div class="flex justify-between items-center">
                                <h3 class="font-semibold text-lg">Can you assist with urgent cargo transport?</h3>
                                <button class="text-xl toggle-faq" data-target="faq-4" aria-expanded="false">+</button>
                            </div>
                            <p class="mt-2 text-gray-500 faq-content hidden" id="faq-4">
                                Yes, we offer urgent cargo transport solutions with quick turnarounds.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News and Blog Section -->
    <section class="bg-[#F9F9F9] py-8 sm:py-12 lg:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-8 text-black">Latest News and Blog</h2>
        </div>
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
                <div class="flex gap-6 whitespace-nowrap mb-8">

                    <div class="min-w-[300px] bg-white border border-gray-200">
                        <a href="#">
                            <img class="object-cover h-36 w-full" src="{{ asset('images/1.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <div class="flex justify-between">
                                <p class="mb-3 font-normal text-gray-700">News</p>
                                <p class="mb-3 font-normal text-gray-700">August 22, 2024</p>
                            </div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-wrap">
                                    All you need to know about Ground Handling
                                </h5>
                            </a>
                        </div>
                    </div>

                    <div class="min-w-[300px] bg-white border border-gray-200">
                        <a href="#">
                            <img class="object-cover h-36 w-full" src="{{ asset('images/1.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <div class="flex justify-between">
                                <p class="mb-3 font-normal text-gray-700">News</p>
                                <p class="mb-3 font-normal text-gray-700">August 22, 2024</p>
                            </div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-wrap">
                                    All you need to know about Ground Handling
                                </h5>
                            </a>
                        </div>
                    </div>

                    <div class="min-w-[300px] bg-white border border-gray-200">
                        <a href="#">
                            <img class="object-cover h-36 w-full" src="{{ asset('images/1.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <div class="flex justify-between">
                                <p class="mb-3 font-normal text-gray-700">News</p>
                                <p class="mb-3 font-normal text-gray-700">August 22, 2024</p>
                            </div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-wrap">
                                    All you need to know about Ground Handling
                                </h5>
                            </a>
                        </div>
                    </div>

                    <div class="min-w-[300px] bg-white border border-gray-200">
                        <a href="#">
                            <img class="object-cover h-36 w-full" src="{{ asset('images/1.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <div class="flex justify-between">
                                <p class="mb-3 font-normal text-gray-700">News</p>
                                <p class="mb-3 font-normal text-gray-700">August 22, 2024</p>
                            </div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-wrap">
                                    All you need to know about Ground Handling
                                </h5>
                            </a>
                        </div>
                    </div>

                    <div class="min-w-[300px] bg-white border border-gray-200">
                        <a href="#">
                            <img class="object-cover h-36 w-full" src="{{ asset('images/1.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <div class="flex justify-between">
                                <p class="mb-3 font-normal text-gray-700">News</p>
                                <p class="mb-3 font-normal text-gray-700">August 22, 2024</p>
                            </div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-wrap">
                                    All you need to know about Ground Handling
                                </h5>
                            </a>
                        </div>
                    </div>

                    <div class="min-w-[300px] bg-white border border-gray-200">
                        <a href="#">
                            <img class="object-cover h-36 w-full" src="{{ asset('images/1.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <div class="flex justify-between">
                                <p class="mb-3 font-normal text-gray-700">News</p>
                                <p class="mb-3 font-normal text-gray-700">August 22, 2024</p>
                            </div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-wrap">
                                    All you need to know about Ground Handling
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @stack('before-scripts')


    @stack('after-scripts')
@endsection
