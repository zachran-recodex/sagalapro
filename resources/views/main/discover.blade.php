@extends('layouts.main')

@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Discover Triwalana Sagala Pro's fleet of reliable aerial support vehicles, equipped for various operational needs. Learn more about our services and capabilities.">
    <meta name="keywords"
        content="{{ $fleet->title }}, Fleet, Aerial Support, Aerial Vehicles, Operational Support, Triwalana Sagala Pro, Aerial Services">
    <meta name="author" content="RECODEX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#2A6F97">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>{{ $fleet->title }} | Triwalana Sagala Pro</title>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-cover bg-center bg-no-repeat min-h-screen"
        style="background-image: url({{ asset('images/discover-bg.jpg') }}); padding-top: 85px;">
        <div class="container mx-auto text-sagala-opt-50 px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-8 text-center">{{ $fleet->title }}</h2>
            <div class="flex flex-wrap justify-between gap-8">
                <div>
                    <h5 class="text-lg font-semibold">Practice Range</h5>
                    <p>{{ $fleet->practice_range }} km</p>
                </div>
                <div>
                    <h5 class="text-lg font-semibold">Cruise Speed</h5>
                    <p>{{ $fleet->cruise_speed }} km/h</p>
                </div>
                <div>
                    <h5 class="text-lg font-semibold">Maximum Speed</h5>
                    <p>{{ $fleet->maximum_speed }} km/h</p>
                </div>
                <div>
                    <h5 class="text-lg font-semibold">Normal Takeoff Weight</h5>
                    <p>{{ $fleet->normal_takeoff_weight }} kg</p>
                </div>
                <div>
                    <h5 class="text-lg font-semibold">Max Takeoff Weight</h5>
                    <p>{{ $fleet->max_takeoff_weight }} kg</p>
                </div>
            </div>
        </div>

        <!-- 3D Helicopter -->
            <model-viewer src="{{ asset('3d/' . $fleet->gltf) }}" alt="{{ $fleet->title }}" shadow-intensity="1" camera-controls
            auto-rotate disable-tap style="width: 100%; height: 600px;" camera-orbit="0deg 90deg 5m"
            min-camera-orbit="auto 90deg auto" max-camera-orbit="auto 90deg auto">
        </model-viewer>
    </section>

    <!-- Photo & Video Section -->
    <section class="h-fit">
        <div class="grid grid-cols-1 md:grid-cols-2 justify-items-center">
            <!-- Video Section -->
            <div class="flex-shrink-0 w-full h-full relative">
                <video class="w-full h-full object-cover" autoplay muted loop>
                    <source src="{{ asset('videos/2.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <!-- Image Section -->
            <div class="flex-shrink-0 w-full h-full relative">
                <img src="{{ asset($fleet->image) }}" alt="{{ $fleet->title }}" class="w-full h-full object-cover">
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

    @stack('before-scripts')
    <!-- 3D View Script -->
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>

    <!-- Carousel Script -->
    <script>
        const slides = document.getElementById('slides');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        let index = 0;

        // Function to update the slide position
        function updateSlidePosition() {
            const totalSlides = slides.children.length;
            const slideWidth = slides.clientWidth;
            slides.style.transform = `translateX(-${index * slideWidth}px)`;
        }

        // Event listeners for navigation buttons
        prevButton.addEventListener('click', () => {
            const totalSlides = slides.children.length;
            index = (index - 1 + totalSlides) % totalSlides; // Wrap around
            updateSlidePosition();
        });

        nextButton.addEventListener('click', () => {
            const totalSlides = slides.children.length;
            index = (index + 1) % totalSlides; // Wrap around
            updateSlidePosition();
        });
    </script>
    @stack('after-scripts')
@endsection
