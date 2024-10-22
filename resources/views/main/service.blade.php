@extends('layouts.main')

@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Explore Triwalana Sagala Pro's range of aerial support services, including aerial mapping, land surveys, and operational air support. Trusted solutions tailored to meet your industry's needs in Indonesia.">
    <meta name="keywords"
        content="{{ $service->title }}, Aerial Support Services, Aerial Mapping, Land Surveys, Operational Air Support, Triwalana Sagala Pro, Aerial Technology, Reliable Aerial Services, Aerial Solutions in Indonesia">
    <meta name="author" content="RECODEX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#2A6F97">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>{{ $service->title }} | Triwalana Sagala Pro</title>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-cover bg-center bg-no-repeat h-screen"
        style="background-image: url({{ Storage::url($service->image) }})">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative h-full flex items-center">
            <div class="container-main py-12">
                <div class="text-center lg:text-start">
                    <p class="leading-relaxed text-white text-lg md:text-xl">
                        Sagala Pro Aerial Support
                    </p>
                    <h2 class="text-4xl sm:text-6xl font-bold text-white mt-2">
                        {{ $service->title }}
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
                    <img class="w-full h-auto object-cover" src="{{ Storage::url($service->image) }}"
                        alt="{{ $service->title }}">
                </div>
                <!-- Text Section -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-[#2A6F97] text-title">{{ $service->title }}</h2> <!-- Judul layanan -->
                    <p class="mb-4 text-justify">{{ $service->description }}</p> <!-- Deskripsi layanan -->

                    <a href="{{ route('fleet') }}"
                        class="inline-flex text-white bg-[#2A6F97] border-0 py-2 px-10 focus:outline-none text-sm rounded-full transition hover:bg-[#1d5e7a]">
                        See Catalog
                    </a>
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

    <!-- Service Section -->
    <section class="lg:h-[390px] bg-gray-100">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Gambar 1 -->
            @forelse ($services as $service)
                <a href="{{ route('service.details', $service->slug) }}" class="relative">
                    <img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}"
                        class="w-full h-[390px] object-cover">
                    <div
                        class="absolute inset-0 flex flex-col justify-end items-start bg-black hover:bg-[#2A6F97] bg-opacity-50 hover:bg-opacity-65 pb-[55px] pl-10">
                        <p class="text-white text-lg font-semibold mb-1">{{ $service->title }}</p>
                        <svg class="w-[56px] h-[16px] text-[#2A6F97] hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="56" height="16" fill="none"
                            viewBox="0 0 56 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M52 8H4m48 0-4 4m4-4-4-4" />
                        </svg>
                    </div>
                </a>
            @empty
                <a href="#" class="relative">
                    <img src="#" alt="No Data" class="w-full h-[390px] object-cover">
                    <div
                        class="absolute inset-0 flex flex-col justify-end items-start bg-black hover:bg-[#2A6F97] bg-opacity-50 hover:bg-opacity-65 pb-[55px] pl-10">
                        <p class="text-white text-lg font-semibold mb-1">No Data</p>
                        <svg class="w-[56px] h-[16px] text-[#2A6F97] hover:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="56" height="16" fill="none"
                            viewBox="0 0 56 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M52 8H4m48 0-4 4m4-4-4-4" />
                        </svg>
                    </div>
                </a>
            @endforelse
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
@endsection
