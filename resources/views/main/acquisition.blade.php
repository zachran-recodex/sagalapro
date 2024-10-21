@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <section class="bg-cover bg-center bg-no-repeat h-screen" style="background-image: url({{ asset('images/air.jpg') }})">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative h-full flex items-center">
            <div class="container-main py-12">
                <div class="text-center lg:text-start">
                    <p class="leading-relaxed text-white text-lg md:text-xl">
                        Sagala Pro Aerial Support
                    </p>
                    <h2 class="text-4xl sm:text-6xl font-bold text-white mt-2">
                        Aircraft & Helicopter Acquisition
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Description Section -->
    <section class="py-main">
        <div class="container-main">
            <div class="flex flex-wrap lg:flex-nowrap gap-8 items-center">
                <!-- Image Section -->
                <div class="w-full lg:w-1/2">
                    <img class="w-full h-auto object-cover" src="{{ asset('images/yow.jpg') }}"
                        alt="Aircraft & Helicopter Acquisition">
                </div>
                <!-- Text Section -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-[#2A6F97] text-title">Aircraft & Helicopter Acquisition</h2>
                    <p class="mb-4 text-justify">
                        We specialize in the acquisition of aircraft and helicopters tailored to your specific needs.
                        Whether you are looking to purchase new or pre-owned aircraft, our team will guide you through the
                        entire process, from initial consultation to final delivery.
                    </p>
                    <p class="mb-4 text-justify">
                        <span class="text-[#2A6F97] font-semibold">Personalized Consultation: </span>
                        We provide expert advice and customized options to ensure you select the right aircraft or
                        helicopter for your requirements.
                    </p>
                    <p class="mb-4 text-justify">
                        <span class="text-[#2A6F97] font-semibold">End-to-End Service: </span>
                        Our comprehensive service covers everything from market research and negotiations to inspection and
                        delivery, ensuring a seamless acquisition process.
                    </p>
                    <p class="mb-4 text-justify">
                        <span class="text-[#2A6F97] font-semibold">Global Network: </span>
                        Leveraging our global network of manufacturers, sellers, and financiers, we offer a wide range of
                        aircraft and helicopter options to meet diverse needs and budgets.
                    </p>
                    <a href=""
                        class="inline-flex text-white bg-[#2A6F97] border-0 py-2 px-10 focus:outline-none text-sm rounded-full transition hover:bg-[#1d5e7a]">See
                        Catalog
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Request a Quote Section -->
    <section class="bg-[#2A6F97] py-main">
        <div class="container-main text-white lg:text-start text-center">
            <h3 class="text-2xl sm:text-3xl font-semibold mb-4">
                Request a Quote
            </h3>
            <p class="text-base sm:text-lg md:text-xl mb-6 text-justify">
                Looking for tailored aviation solutions? Request a quote today and get a customized solution that meets your
                needs. Fill out our form or contact us directly for a quick response.
            </p>
            <a href="#"
                class="inline-flex items-center border border-white py-2 px-4 sm:py-3 sm:px-6 text-base sm:text-lg transition hover:bg-white hover:text-[#2A6F97]">
                Get a Quote
            </a>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-main">
        <div class="container-main">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Section -->
                <div class="lg:col-span-1 flex flex-col justify-center">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-4 text-black">Frequently Asked Questions</h2>
                    <a href="#" class="text-blue-500 underline">Contact Support</a>
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

    <!-- Service Section -->
    <section class="lg:h-[390px] bg-gray-100">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Gambar 1 -->
            <div class="relative">
                <img src="{{ asset('images/air.jpg') }}" alt="Image 1" class="w-full h-[390px] object-cover">
                <div
                    class="absolute inset-0 flex flex-col justify-end items-start bg-black hover:bg-[#2A6F97] bg-opacity-50 hover:bg-opacity-65 pb-[55px] pl-10">
                    <p class="text-white text-lg font-semibold mb-1">Aircraft and Helicopter<br>Acquisition</p>
                    <svg class="w-[56px] h-[16px] text-[#2A6F97] hover:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="56" height="16" fill="none" viewBox="0 0 56 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M52 8H4m48 0-4 4m4-4-4-4" />
                    </svg>
                </div>
            </div>

            <!-- Gambar 2 -->
            <div class="relative">
                <img src="{{ asset('images/aerial.jpg') }}" alt="Image 2" class="w-full h-[390px] object-cover">
                <div
                    class="absolute inset-0 flex flex-col justify-end items-start bg-black hover:bg-[#2A6F97] bg-opacity-50 hover:bg-opacity-65 pb-[55px] pl-10">
                    <p class="text-white text-lg font-semibold mb-1">Aerial Fire-Fighting<br>Consultant & Operation</p>
                    <svg class="w-[56px] h-[16px] text-[#2A6F97] hover:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="56" height="16" fill="none"
                        viewBox="0 0 56 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M52 8H4m48 0-4 4m4-4-4-4" />
                    </svg>
                </div>
            </div>

            <!-- Gambar 3 -->
            <div class="relative">
                <img src="{{ asset('images/cargo.jpeg') }}" alt="Image 3" class="w-full h-[390px] object-cover"
                    style="object-position: 100%;">
                <div
                    class="absolute inset-0 flex flex-col justify-end items-start bg-black hover:bg-[#2A6F97] bg-opacity-50 hover:bg-opacity-65 pb-[55px] pl-10">
                    <p class="text-white text-lg font-semibold mb-1">Heavy & Outsized Cargo<br>Service</p>
                    <svg class="w-[56px] h-[16px] text-[#2A6F97] hover:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="56" height="16" fill="none"
                        viewBox="0 0 56 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M52 8H4m48 0-4 4m4-4-4-4" />
                    </svg>
                </div>
            </div>

            <!-- Gambar 4 -->
            <div class="relative">
                <img src="{{ asset('images/pj.jpg') }}" alt="Image 4" class="w-full h-[390px] object-cover"
                    style="object-position: 15%;">
                <div
                    class="absolute inset-0 flex flex-col justify-end items-start bg-black hover:bg-[#2A6F97] bg-opacity-50 hover:bg-opacity-65 pb-[55px] pl-10">
                    <p class="text-white text-lg font-semibold mb-1">Private Jet Charters &<br>Flights</p>
                    <svg class="w-[56px] h-[16px] text-[#2A6F97] hover:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="56" height="16" fill="none"
                        viewBox="0 0 56 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M52 8H4m48 0-4 4m4-4-4-4" />
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News and Blog Section -->
    <section class="bg-[#F9F9F9] py-main">
        <div class="container-main">
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
@endsection
