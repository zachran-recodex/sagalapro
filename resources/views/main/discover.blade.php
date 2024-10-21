@extends('layouts.main')

@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Triwalana Sagala Pro">
    <meta name="keywords" content="Aerial Support">
    <meta name="author" content="Zachran Razendra">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#2A6F97">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>Triwalana Sagala Pro</title>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-cover bg-center bg-no-repeat min-h-screen"
        style="background-image: url({{ asset('images/discover-bg.jpg') }}); padding-top: 85px;">
        <div class="container mx-auto text-white px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-8 text-center">{{ $fleet->title }}</h2>
            <div class="flex flex-wrap justify-between gap-8">
                <div class="">
                    <h5 class="text-lg font-semibold">Practice Range</h5>
                    <p>610 km</p>
                </div>
                <div class="">
                    <h5 class="text-lg font-semibold">Cruise Speed</h5>
                    <p>230 km/h</p>
                </div>
                <div class="">
                    <h5 class="text-lg font-semibold">Maximum Speed</h5>
                    <p>250 km/h</p>
                </div>
                <div class="">
                    <h5 class="text-lg font-semibold">Normal Takeoff Weight</h5>
                    <p> 11.100 kg</p>
                </div>
                <div class="">
                    <h5 class="text-lg font-semibold">Max Takeoff Weight</h5>
                    <p>13.000 kg</p>
                </div>
            </div>
        </div>
        <!-- 3D Helicopter -->
        <model-viewer src="{{ asset('3d/Mi-8t.gltf') }}" alt="{{ $fleet->title }}" shadow-intensity="1" camera-controls
            auto-rotate disable-tap style="width: 100%; height: 600px;" camera-orbit="0deg 90deg 5m"
            min-camera-orbit="auto 90deg auto" max-camera-orbit="auto 90deg auto">
        </model-viewer>
    </section>

    <!-- Photo & Video Section -->
    <section class="h-[700px]">
        <div class="grid grid-cols-1 md:grid-cols-2 justify-items-center">
            <div class="flex-shrink-0 w-full h-full relative">
                <video class="w-full h-full object-cover" autoplay muted loop>
                    <source src="{{ asset('videos/2.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div id="carousel" class="relative w-full h-full">
                <div class="overflow-hidden relative w-full h-full">
                    <div class="flex transition-transform duration-500 ease-in-out w-full h-full" id="slides">
                        <img src="{{ Storage::url($fleet->image) }}" alt=""
                            class="flex-shrink-0 w-full h-full relative object-cover">
                        <img src="{{ asset('images/cargo.jpeg') }}" alt=""
                            class="flex-shrink-0 w-full h-full relative object-cover">
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
    </section>

    <!-- Spesification Section -->
    <section class="py-main">
        <div class="container-main">
            <div class="flex justify-between mb-4">
                <span>Spesification</span>
                <span>Mi-8AMT</span>
            </div>
            <div class="mb-8">
                <div class="flex flex-wrap justify-center -mb-px">
                    <a href="#cabin"
                        class="inline-block py-4 px-6 border-b-2 border-transparent font-medium text-lg leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300"
                        aria-selected="false">
                        Cabin
                    </a>
                    <a href="#performance"
                        class="inline-block py-4 px-6 border-b-2 border-transparent font-medium text-lg leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300"
                        aria-selected="false">
                        Performance
                    </a>
                </div>
            </div>
            <div id="cabin-and-performance-content">
                <div id="cabin" class="hidden">
                    <table class="table-auto w-full">
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 font-medium text-gray-900">Payload</td>
                                <td class="py-2 px-4">Up to 4.000 Kg</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 font-medium text-gray-900">Hold Size (LxWxH)</td>
                                <td class="py-2 px-4">5.34 m x 2.34 m x 1.8 m</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 font-medium text-gray-900">Door Size</td>
                                <td class="py-2 px-4">1.25 m x 1.6 m</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="performance" class="hidden">
                    <table class="table-auto w-full">
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 font-medium text-gray-900">Load Volume</td>
                                <td class="py-2 px-4">23 cubic meters</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 font-medium text-gray-900">Fuel Tank</td>
                                <td class="py-2 px-4">500 Km</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 font-medium text-gray-900">Fuel Tank (Additional)</td>
                                <td class="py-2 px-4">1.065 Km</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Request a Quote Section -->
    <section class="bg-[#2A6F97] py-main">
        <div class="container-main text-white lg:text-start text-center">
            <h3 class="text-title">
                Request a Quote
            </h3>
            <p class="text-desc">
                <strong class="underline">Need a personalized aviation solution?</strong> We're here to provide you with
                exactly what you need. Request a customized quote today, and let our experts craft the perfect solution
                tailored to your specific requirements. Whether you're filling out the form or reaching out directly, expect
                a prompt and professional response from our team.
            </p>
            <a href="{{ route('contact') }}"
                class="inline-flex items-center border border-white py-[10px] px-[26px] text-base transition hover:bg-white hover:text-[#2A6F97]">
                Get a Quote
            </a>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-main">
        <div class="container-main">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Section -->
                <div class="lg:col-span-1 flex flex-col justify-between">
                    <h2 class="text-title text-black">Frequently Asked Questions</h2>
                    <a href="{{ route('contact') }}" class="text-[#2A6F97] font-light underline">Contact Support</a>
                </div>

                <!-- Right Section -->
                <div class="lg:col-span-2">
                    <div class="divide-y divide-[#2A6F97]">
                        @forelse ($faqs as $faq)
                            <!-- FAQ Item -->
                            <div class="py-4">
                                <div class="flex justify-between items-center">
                                    <h3 class="font-semibold text-lg">{{ $faq->title }}</h3>
                                    <button class="text-xl toggle-faq" data-target="faq-{{ $loop->index }}"
                                        aria-expanded="false">+</button>
                                </div>
                                <p class="mt-2 text-gray-500 faq-content hidden" id="faq-{{ $loop->index }}">
                                    {{ $faq->description }}
                                </p>
                            </div>
                        @empty
                            <div class="py-4">
                                <p class="text-gray-500">No FAQs available at the moment.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News and Blog Section -->
    <section class="bg-[#F9F9F9] py-main">
        <div class="container-main">
            <h2 class="text-title">Latest News and Blog</h2>
        </div>
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
                <div class="flex gap-6 whitespace-nowrap mb-8">
                    @forelse ($blogs as $blog)
                        <a href="{{ route('blog.details', $blog->slug) }}"
                            class="min-w-[300px] bg-white border border-gray-200 shadow">
                            <img class="object-cover h-36 w-full" src="{{ Storage::url($blog->image) }}"
                                alt="{{ $blog->title }}" />
                            <div class="p-5">
                                <div class="flex justify-between">
                                    <p class="mb-3 font-light text-gray-700">{{ $blog->author }}</p>
                                    <p class="mb-3 font-light text-gray-700">{{ $blog->created_at->format('M d, Y') }}
                                    </p>
                                </div>
                                <h5 class="mb-2 text-lg font-normal tracking-tight text-[#2A6F97] text-wrap">
                                    {{ $blog->title }}
                                </h5>
                            </div>
                        </a>
                    @empty
                        <a href="" class="min-w-[300px] bg-white border border-gray-200 shadow">
                            <img class="object-cover h-36 w-full" src="" alt="" />
                            <div class="p-5">
                                <div class="flex justify-between">
                                    <p class="mb-3 font-light text-gray-700">News</p>
                                    <p class="mb-3 font-light text-gray-700">August 22, 2024</p>
                                </div>
                                <h5 class="mb-2 text-lg font-normal tracking-tight text-[#2A6F97] text-wrap">
                                    All you need to know about Ground Handling
                                </h5>
                            </div>
                        </a>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    @stack('before-scripts')
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>

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

    @stack('after-scripts')
@endsection
