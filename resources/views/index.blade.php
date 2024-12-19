@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="Triwalana Sagala Pro specializes in providing reliable aerial support services in Indonesia, including aerial mapping, surveys, and operational air support.">
    <meta name="keywords"
          content="Aerial Support Indonesia, Aerial Services, Aerial Mapping, Land Surveys, Operational Air Support, Triwalana Sagala Pro, Aerial Support Company, Air Operational Support, Aerial Technology, Reliable Aerial Services">
    <meta name="author" content="RECODEX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#2A6F97">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>Triwalana Sagala Pro | Reliable Aerial Support Services in Indonesia</title>
@endsection

<x-layout.main>
    <!-- Start: Hero Section -->
    <section id="carousel" class="h-screen z-10" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-screen overflow-hidden">
            @forelse ($heroSections as $heroSection)
                <!-- Carousel Item -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset($heroSection->image) }}"
                         class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                         alt="{{ $heroSection->title }}">

                    <div class="absolute inset-0 bg-sagala-opt-950 opacity-50"></div>

                    <div class="relative h-full flex items-center">
                        <div class="container mx-auto px-4 py-12 sm:px-6 lg:px-8">
                            <div class="text-center lg:text-start">
                                <h2 class="leading-relaxed text-lg sm:text-xl text-sagala-opt-50">Welcome To Aerial Website
                                </h2>
                                <h1 class="mb-6 mt-2 text-4xl sm:text-5xl lg:text-6xl font-bold text-sagala-opt-50">
                                    {{ $heroSection->title }}</h1>
                                <div class="flex flex-col gap-4 sm:flex-row justify-center lg:justify-start">
                                    <a href="{{ route('about') }}"
                                       class="inline-flex py-2 px-6 text-lg text-sagala-opt-50 transition bg-sagala-600 border-0 hover:bg-sagala-700 focus:outline-none">About
                                        Us</a>
                                    <a href="{{ route('contact') }}"
                                       class="inline-flex py-2 px-6 text-lg text-sagala-opt-50 transition border border-sagala-opt-50 hover:bg-sagala-opt-50 hover:text-sagala-600 focus:outline-none">Get
                                        a Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <!-- Default Item when no carousel items are available -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/default.jpg') }}"
                         class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                         alt="Hero Image">

                    <div class="absolute inset-0 bg-sagala-opt-950 opacity-50"></div>

                    <div class="relative h-full flex items-center">
                        <div class="container mx-auto px-4 py-12 sm:px-6 lg:px-8">
                            <div class="text-center lg:text-start">
                                <h2 class="leading-relaxed text-lg sm:text-xl text-sagala-opt-50">No Available Carousel
                                    Items</h2>
                                <h1 class="mb-6 mt-2 text-4xl sm:text-5xl lg:text-6xl font-bold text-sagala-opt-50">Welcome
                                </h1>
                                <div class="flex flex-col gap-4 sm:flex-row justify-center lg:justify-start">
                                    <a href="{{ route('about') }}"
                                       class="inline-flex py-2 px-6 text-lg text-sagala-opt-50 transition bg-sagala-600 border-0 hover:bg-sagala-700 focus:outline-none">About
                                        Us</a>
                                    <a href="{{ route('contact') }}"
                                       class="inline-flex py-2 px-6 text-lg text-sagala-opt-50 transition border border-sagala-opt-50 hover:bg-sagala-opt-50 hover:text-sagala-600 focus:outline-none">Get
                                        a Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </section>

    <!-- Partner Section -->
    <x-section.partner-section :partners="$partners" />

    <!-- Service Section -->
    <section class="lg:h-screen">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
            @forelse($services as $service)
                <a href="{{ route('service.details', $service->slug) }}" class="relative">
                    <div>
                        <img src="{{ asset($service->image) }}" alt="{{ $service->title }}"
                             class="w-full h-screen object-cover">
                        <div
                            class="absolute inset-0 flex flex-col justify-end items-start bg-sagala-opt-950 hover:bg-sagala-700 bg-opacity-50 hover:bg-opacity-65 pb-[125px] pl-10">
                            <h3 class="text-sagala-opt-50 text-lg font-medium mb-1">{{ $service->title }}</h3>
                            <svg class="w-[56px] h-[16px] text-sagala-600 hover:text-sagala-opt-50" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" width="56" height="16" fill="none"
                                 viewBox="0 0 56 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M52 8H4m48 0-4 4m4-4-4-4" />
                            </svg>
                        </div>
                    </div>
                </a>
            @empty
                <div class="col-span-1 text-center text-sagala-opt-500">
                    <p>No services available at the moment.</p>
                </div>
            @endforelse
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-main">
        <div class="container-main">
            <h2 class="text-sagala-600 text-title mb-4">
                Why Choose Us?
            </h2>
            <p class="text-desc mb-6">
                At Sagala Pro, we are committed to exceeding our clients' expectations in the aviation industry. Our mission
                is to provide top-notch consulting services tailored to the unique needs of each client, ensuring a superior
                experience every time.
            </p>
            <div class="flex justify-center sm:justify-start">
                <a href="{{ route('about') }}"
                   class="inline-flex items-center border border-sagala-opt-400 py-2 px-4 sm:py-3 sm:px-6 focus:outline-none text-sm sm:text-lg transition hover:bg-sagala-opt-950 hover:text-sagala-opt-50">
                    More About Us
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-sagala-600 ml-2" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 12H5m14 0-4 4m4-4-4-4" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Video Section -->
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
                                <div class="absolute inset-0 bg-sagala-opt-950 bg-opacity-20"></div>
                                <!-- Text Overlay -->
                                <div
                                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-sagala-opt-50 px-4">
                                    <h2 class="text-4xl sm:text-8xl font-light mb-4">Aerial Fire Fighter Consultant &
                                        Operation</h2>
                                </div>
                            </div>
                            <div class="flex-shrink-0 w-full h-full relative">
                                <video class="w-full h-full object-cover" autoplay muted loop>
                                    <source src="{{ asset('videos/1.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="absolute inset-0 bg-sagala-opt-950 bg-opacity-20"></div>
                                <!-- Text Overlay -->
                                <div
                                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-sagala-opt-50 px-4">
                                    <h2 class="text-4xl sm:text-8xl font-light mb-4">Private Jet Charters & Flights</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation Buttons -->
                    <button id="prev"
                            class="absolute left-4 md:left-8 top-1/2 transform -translate-y-1/2 bg-sagala-opt-950 text-sagala-opt-50 p-2 shadow-md">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="next"
                            class="absolute right-4 md:right-8 top-1/2 transform -translate-y-1/2 bg-sagala-opt-950 text-sagala-opt-50 p-2 shadow-md">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Request a Quote Section -->
    <section class="bg-sagala-600 py-main">
        <div class="container-main text-sagala-opt-50 lg:text-start text-center px-4">
            <h2 class="text-title">
                Request a Quote
            </h2>
            <p class="text-desc">
                <strong class="underline">Need a personalized aviation solution?</strong> We're here to provide you with
                exactly what you need. Request a customized quote today, and let our experts craft the perfect solution
                tailored to your specific requirements. Whether you're filling out the form or reaching out directly, expect
                a prompt and professional response from our team.
            </p>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center border border-sagala-opt-50 py-2 px-6 text-base transition hover:bg-sagala-opt-50 hover:text-sagala-600 rounded-md">
                Get a Quote
            </a>
        </div>
    </section>

    <!-- FAQ Section -->
    <x-section.faq-section :faqs="$faqs" />

    <!-- Blog Section -->
    <x-section.blog-section :blogs="$blogs" />
</x-layout.main>
