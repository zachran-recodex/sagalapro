@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <section class="bg-cover bg-center bg-no-repeat h-screen" style="background-image: url({{ asset('images/hero.png') }})">
        <div class="h-full flex items-center">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="text-center lg:text-start">
                    <p class="leading-relaxed text-white text-lg md:text-xl">
                        AERIAL SUPPORT
                    </p>
                    <h1 class="text-4xl sm:text-6xl font-bold text-white mb-6 mt-2">
                        Sagala Pro
                    </h1>
                    <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                        <a href="{{ route('about') }}"
                            class="inline-flex text-white bg-[#2A6F97] border-0 py-2 px-6 focus:outline-none text-lg transition hover:bg-[#1d5e7a]">
                            About Us
                        </a>
                        <a href="{{ route('contact') }}"
                            class="inline-flex text-white border border-white py-2 px-6 focus:outline-none text-lg transition hover:bg-white hover:text-[#2A6F97]">
                            Get a Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Section -->
    <section class="lg:h-screen">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Service 1 -->
            <a href="{{ route('acquisition') }}" class="relative">
                <div>
                    <img src="{{ asset('images/air.jpg') }}" alt="Image 1" class="w-full h-screen object-cover">
                    <div
                        class="absolute inset-0 flex flex-col justify-end items-start bg-black hover:bg-[#2A6F97] bg-opacity-50 hover:bg-opacity-65 pb-[125px] pl-10">
                        <p class="text-white text-lg font-semibold mb-1">Aircraft and Helicopter<br>Acquisition</p>
                        <svg class="w-[56px] h-[16px] text-[#2A6F97] hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="56" height="16" fill="none"
                            viewBox="0 0 56 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M52 8H4m48 0-4 4m4-4-4-4" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Service 2 -->
            <a href="{{ route('aerial') }}" class="relative">
                <div>
                    <img src="{{ asset('images/aerial.jpg') }}" alt="Image 2" class="w-full h-screen object-cover">
                    <div
                        class="absolute inset-0 flex flex-col justify-end items-start bg-black hover:bg-[#2A6F97] bg-opacity-50 hover:bg-opacity-65 pb-[125px] pl-10">
                        <p class="text-white text-lg font-semibold mb-1">Aerial Fire-Fighting<br>Consultant & Operation</p>
                        <svg class="w-[56px] h-[16px] text-[#2A6F97] hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="56" height="16" fill="none"
                            viewBox="0 0 56 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M52 8H4m48 0-4 4m4-4-4-4" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Service 3 -->
            <a href="{{ route('cargo') }}" class="relative">
                <div>
                    <img src="{{ asset('images/cargo.jpeg') }}" alt="Image 3" class="w-full h-screen object-cover"
                        style="object-position: 100%;">
                    <div
                        class="absolute inset-0 flex flex-col justify-end items-start bg-black hover:bg-[#2A6F97] bg-opacity-50 hover:bg-opacity-65 pb-[125px] pl-10">
                        <p class="text-white text-lg font-semibold mb-1">Heavy & Outsized Cargo<br>Service</p>
                        <svg class="w-[56px] h-[16px] text-[#2A6F97] hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="56" height="16" fill="none"
                            viewBox="0 0 56 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M52 8H4m48 0-4 4m4-4-4-4" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Service 4 -->
            <a href="{{ route('charter') }}" class="relative">
                <div>
                    <img src="{{ asset('images/pj.jpg') }}" alt="Image 4" class="w-full h-screen object-cover"
                        style="object-position: 15%;">
                    <div
                        class="absolute inset-0 flex flex-col justify-end items-start bg-black hover:bg-[#2A6F97] bg-opacity-50 hover:bg-opacity-65 pb-[125px] pl-10">
                        <p class="text-white text-lg font-semibold mb-1">Private Jet Charters &<br>Flights</p>
                        <svg class="w-[56px] h-[16px] text-[#2A6F97] hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="56" height="16" fill="none"
                            viewBox="0 0 56 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M52 8H4m48 0-4 4m4-4-4-4" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-8 sm:py-12 lg:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-[#2A6F97] text-xl sm:text-2xl font-semibold mb-4">
                Why Choose Us?
            </h3>
            <p class="text-lg sm:text-xl md:text-2xl text-justify mb-6">
                At Sagala Pro, we are committed to exceeding our clients' expectations in the aviation industry. Our mission
                is to provide top-notch consulting services tailored to the unique needs of each client, ensuring a superior
                experience every time.
            </p>
            <a href="{{ route('about') }}"
                class="inline-flex items-center border border-black py-2 px-4 sm:py-3 sm:px-6 focus:outline-none text-sm sm:text-lg transition hover:bg-black hover:text-white">
                More About Us
                <svg class="w-5 h-5 sm:w-6 sm:h-6 text-[#2A6F97] ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 12H5m14 0-4 4m4-4-4-4" />
                </svg>
            </a>
        </div>
    </section>

    <!-- Point Section -->
    <section class="bg-[#F6F6F6] py-8 sm:py-12 lg:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="text-center p-4">
                    <img src="{{ asset('images/icon1.png') }}" alt="Experienced Team"
                        class="mx-auto mb-4 w-16 h-16 sm:w-24 sm:h-24">
                    <h3 class="text-[#2A6F97] text-2xl sm:text-3xl font-semibold mb-2">Experienced Team</h3>
                    <p class="text-base sm:text-lg">
                        Our team has extensive experience in the aviation industry.
                    </p>
                </div>
                <div class="text-center p-4">
                    <img src="{{ asset('images/icon2.png') }}" alt="Custom Solutions"
                        class="mx-auto mb-4 w-16 h-16 sm:w-24 sm:h-24">
                    <h3 class="text-[#2A6F97] text-2xl sm:text-3xl font-semibold mb-2">Custom Solutions</h3>
                    <p class="text-base sm:text-lg">
                        We offer tailored services to fit each client's specific needs.
                    </p>
                </div>
                <div class="text-center p-4">
                    <img src="{{ asset('images/icon3.png') }}" alt="Safety First"
                        class="mx-auto mb-4 w-16 h-16 sm:w-24 sm:h-24">
                    <h3 class="text-[#2A6F97] text-2xl sm:text-3xl font-semibold mb-2">Safety First</h3>
                    <p class="text-base sm:text-lg">
                        We prioritize safety in all our operations to ensure peace of mind.
                    </p>
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

    <!-- Gallery Section -->
    <section class="relative h-screen overflow-hidden">
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="relative w-full h-full">
                <!-- Slider Container -->
                <div id="carousel" class="relative w-full h-full">
                    <!-- Slides -->
                    <div class="overflow-hidden relative w-full h-full">
                        <div class="flex transition-transform duration-500 ease-in-out w-full h-full" id="slides">
                            <div class="flex-shrink-0 w-full h-full relative">
                                <video class="w-full h-full object-cover" autoplay muted loop>
                                    <source src="{{ asset('videos/2.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                                <!-- Text Overlay -->
                                <div
                                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white">
                                    <h2 class="text-4xl sm:text-8xl font-light mb-4">Aerial Fire Fighter Consultant &
                                        Operation</h2>
                                </div>
                            </div>
                            <div class="flex-shrink-0 w-full h-full relative">
                                <video class="w-full h-full object-cover" autoplay muted loop>
                                    <source src="{{ asset('videos/1.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                                <!-- Text Overlay -->
                                <div
                                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white">
                                    <h2 class="text-4xl sm:text-8xl font-light mb-4">Private Jet Charters & Flights</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation Buttons -->
                    <button id="prev"
                        class="absolute left-16 top-1/2 transform -translate-y-1/2 bg-[#242424]/40 text-white p-2">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="next"
                        class="absolute right-16 top-1/2 transform -translate-y-1/2 bg-[#242424]/40 text-white p-2">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="bg-cover lg:bg-contain bg-no-repeat bg-right pt-8 sm:pt-12 lg:pt-16"
        style="background-image: linear-gradient(to right, #FFFFFF 30%, rgba(255, 255, 255, 0) 100%), url({{ asset('images/faq.jpg') }})">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Left Section -->
                <div class="flex flex-col justify-center">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-4 text-black">What our clients say about us
                    </h2>
                    <p class="text-gray-500 text-base sm:text-lg">2,345 people have said how good Sagala Pro</p>
                </div>

                <!-- Scrollable Section - Display only on larger screens -->
                <div class="hidden sm:flex flex-col gap-6 overflow-y-auto max-h-[670px] pr-4">
                    <!-- Testimonial 1 -->
                    <figure class="flex flex-col px-6 py-4 bg-[#F0F0F0] gap-5 rounded-2xl">
                        <figcaption class="flex items-center">
                            <img class="rounded-full w-12 h-12"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium text-left ms-3">
                                <div>Bonnie Green</div>
                                <div class="text-sm text-gray-500">Developer at Open AI</div>
                            </div>
                        </figcaption>
                        <blockquote class="text-gray-500">
                            <p>I am extremely satisfied with the services provided by Sagala Pro. The team was highly
                                professional, and the results exceeded my expectations. The work was completed on time and
                                with exceptional quality.</p>
                        </blockquote>
                    </figure>

                    <!-- Testimonial 2 -->
                    <figure class="flex flex-col px-6 py-4 bg-[#2A6F97] gap-5 rounded-2xl text-white">
                        <figcaption class="flex items-center">
                            <img class="rounded-full w-12 h-12"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium text-left ms-3">
                                <div>Bonnie Green</div>
                                <div class="text-sm">Developer at Open AI</div>
                            </div>
                        </figcaption>
                        <blockquote>
                            <p>I am extremely satisfied with the services provided by Sagala Pro. The team was highly
                                professional, and the results exceeded my expectations. The work was completed on time and
                                with exceptional quality.</p>
                        </blockquote>
                    </figure>

                    <!-- Testimonial 1 -->
                    <figure class="flex flex-col px-6 py-4 bg-[#F0F0F0] gap-5 rounded-2xl">
                        <figcaption class="flex items-center">
                            <img class="rounded-full w-12 h-12"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium text-left ms-3">
                                <div>Bonnie Green</div>
                                <div class="text-sm text-gray-500">Developer at Open AI</div>
                            </div>
                        </figcaption>
                        <blockquote class="text-gray-500">
                            <p>I am extremely satisfied with the services provided by Sagala Pro. The team was highly
                                professional, and the results exceeded my expectations. The work was completed on time and
                                with exceptional quality.</p>
                        </blockquote>
                    </figure>
                </div>

                <!-- Scrollable Section - Display only on mobile screens -->
                <div class="hidden lg:flex flex-col gap-6 overflow-y-auto max-h-[670px] pr-4">
                    <!-- Testimonial 2 -->
                    <figure class="flex flex-col px-6 py-4 bg-[#2A6F97] gap-5 rounded-2xl text-white">
                        <figcaption class="flex items-center">
                            <img class="rounded-full w-12 h-12"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium text-left ms-3">
                                <div>Bonnie Green</div>
                                <div class="text-sm">Developer at Open AI</div>
                            </div>
                        </figcaption>
                        <blockquote>
                            <p>I am extremely satisfied with the services provided by Sagala Pro. The team was highly
                                professional, and the results exceeded my expectations. The work was completed on time and
                                with exceptional quality.</p>
                        </blockquote>
                    </figure>

                    <!-- Testimonial 1 -->
                    <figure class="flex flex-col px-6 py-4 bg-[#F0F0F0] gap-5 rounded-2xl">
                        <figcaption class="flex items-center">
                            <img class="rounded-full w-12 h-12"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium text-left ms-3">
                                <div>Bonnie Green</div>
                                <div class="text-sm text-gray-500">Developer at Open AI</div>
                            </div>
                        </figcaption>
                        <blockquote class="text-gray-500">
                            <p>I am extremely satisfied with the services provided by Sagala Pro. The team was highly
                                professional, and the results exceeded my expectations. The work was completed on time and
                                with exceptional quality.</p>
                        </blockquote>
                    </figure>

                    <!-- Testimonial 2 -->
                    <figure class="flex flex-col px-6 py-4 bg-[#2A6F97] gap-5 rounded-2xl text-white">
                        <figcaption class="flex items-center">
                            <img class="rounded-full w-12 h-12"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium text-left ms-3">
                                <div>Bonnie Green</div>
                                <div class="text-sm">Developer at Open AI</div>
                            </div>
                        </figcaption>
                        <blockquote>
                            <p>I am extremely satisfied with the services provided by Sagala Pro. The team was highly
                                professional, and the results exceeded my expectations. The work was completed on time and
                                with exceptional quality.</p>
                        </blockquote>
                    </figure>
                </div>
            </div>
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
    <script>
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const slides = document.getElementById('slides');
        let index = 0;

        function updateSlidePosition() {
            const slideWidth = slides.children[0].clientWidth;
            slides.style.transform = `translateX(-${index * slideWidth}px)`;
        }

        prevButton.addEventListener('click', () => {
            index = (index > 0) ? index - 1 : slides.children.length - 1;
            updateSlidePosition();
        });

        nextButton.addEventListener('click', () => {
            index = (index < slides.children.length - 1) ? index + 1 : 0;
            updateSlidePosition();
        });

        window.addEventListener('resize', updateSlidePosition);
    </script>

    <script>
        document.querySelectorAll('.toggle-faq').forEach(button => {
            button.addEventListener('click', () => {
                const target = document.getElementById(button.dataset.target);
                const isExpanded = button.getAttribute('aria-expanded') === 'true';
                target.classList.toggle('hidden', isExpanded);
                button.textContent = isExpanded ? '+' : '×'; // Change button symbol based on state
                button.setAttribute('aria-expanded', !isExpanded); // Update aria-expanded attribute
            });
        });
    </script>

    @stack('after-scripts')
@endsection
