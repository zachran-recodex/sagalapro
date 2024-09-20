@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <section class="bg-cover bg-center bg-no-repeat h-screen"
        style="background-image: url({{ asset('images/hero-about.jpg') }})">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative h-full flex items-center">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="text-center lg:text-start">
                    <p class="leading-relaxed text-white text-lg md:text-xl">
                        Sagala Pro Aerial Support
                    </p>
                    <h1 class="text-4xl sm:text-6xl font-bold text-white mt-2">
                        About Us
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Owner Section -->
    <section class="bg-cover lg:bg-contain bg-no-repeat bg-left h-[616px]"
        style="background-image: linear-gradient(to left, #FFFFFF 50%, rgba(255, 255, 255, 0) 100%), url({{ asset('images/ceo.jpg') }})">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center justify-end">
            <div class="lg:w-1/2">
                <img class="h-10 mb-4" src="{{ asset('images/quote-icon.png') }}" alt="Quote Icon">
                <blockquote class="text-lg font-semibold">
                    <p>With our experience and dedication, PT Triwalana Sagala Pro is ready to meet your aviation needs with
                        the highest standards.</p>
                </blockquote>
                <p class="mt-4 text-base font-medium">Agus Kurniawan, Founder and Chairman</p>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="bg-cover bg-center h-[616px]" style="background-image: url({{ asset('images/visi-misi.jpg') }});">
        <div class="bg-black bg-opacity-20 h-full">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
                <div class="lg:w-1/2 text-white flex flex-col gap-2">
                    <h4 class="text-lg font-semibold text-[#2A6F97]">Path To Success</h4>
                    <h3 class="text-4xl font-bold">Our Vision</h3>
                    <p class="text-lg text-justify leading-relaxed">To be a leading provider of exceptional aviation
                        services, consistently delivering outstanding solutions that meet and surpass our clients' needs and
                        expectations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner Section -->
    <section class="py-8 sm:py-12 lg:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-center text-2xl font-bold mb-8">We Work with the Best Partners</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 justify-items-center">
                <div class="w-[250px] h-[81px] py-4 px-7 bg-[#F6F6F6] flex items-center justify-center shadow rounded">
                    <img class="max-h-full max-w-full object-contain" src="{{ asset('images/p1.png') }}" alt="Partner 1">
                </div>
                <div class="w-[250px] h-[81px] py-4 px-7 bg-[#F6F6F6] flex items-center justify-center shadow rounded">
                    <img class="max-h-full max-w-full object-contain" src="{{ asset('images/p2.png') }}" alt="Partner 2">
                </div>
                <div class="w-[250px] h-[81px] py-4 px-7 bg-[#F6F6F6] flex items-center justify-center shadow rounded">
                    <img class="max-h-full max-w-full object-contain" src="{{ asset('images/p3.png') }}" alt="Partner 3">
                </div>
                <div class="w-[250px] h-[81px] py-4 px-7 bg-[#F6F6F6] flex items-center justify-center shadow rounded">
                    <img class="max-h-full max-w-full object-contain" src="{{ asset('images/p4.png') }}" alt="Partner 4">
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
