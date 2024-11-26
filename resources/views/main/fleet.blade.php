@extends('layouts.main')

@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Explore the advanced fleet of aircraft at Triwalana Sagala Pro, equipped for aerial mapping, land surveys, and air support operations. Our diverse fleet ensures safety, efficiency, and reliability for every mission.">
    <meta name="keywords"
        content="Aerial Support Indonesia, Aerial Services, Aerial Mapping, Land Surveys, Operational Air Support, Triwalana Sagala Pro, Aerial Support Company, Air Operational Support, Aerial Technology, Reliable Aerial Services">
    <meta name="author" content="RECODEX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#2A6F97">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>Fleet | Triwalana Sagala Pro – Advanced Aerial Support Aircraft</title>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-cover bg-center bg-no-repeat h-[50vh]"
        style="background-image: url({{ asset('images/hero-about.jpg') }})">
        <div class="relative bg-sagala-opt-950/50 h-full flex items-center">
            <div class="container-main py-12">
                <div class="text-center lg:text-start">
                    <h2 class="text-4xl sm:text-6xl font-bold text-sagala-opt-50 mt-2">
                        Explore Our Exclusive Fleet
                    </h2>
                </div>
            </div>
        </div>
    </section>

    @forelse ($fleets as $index => $fleet)
        <section class="py-main">
            <div class="container-main">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
                    @if ($index % 2 === 0)
                        <!-- Gambar di kiri -->
                        <div>
                            <img src="{{ Storage::url($fleet->image) }}" alt="{{ $fleet->title }}"
                                class="w-full h-[350px] object-cover rounded-lg shadow-lg">
                        </div>
                        <div class="col-span-2">
                            <h2 class="text-sagala-600 text-2xl font-bold mb-4 pb-4 border-b-2 border-sagala-opt-950">
                                {{ $fleet->title }}
                            </h2>
                            <p class="text-sagala-opt-700 text-justify mb-6">
                                {{ $fleet->description }}
                            </p>
                            <a href="{{ route('fleet.details', $fleet->slug) }}"
                                class="inline-block py-2 border-b-2 border-sagala-opt-950">
                                Discover {{ $fleet->title }}
                            </a>
                        </div>
                    @else
                        <!-- Gambar di kanan -->
                        <div class="col-span-2">
                            <h2 class="text-sagala-600 text-2xl font-bold mb-4 pb-4 border-b-2 border-sagala-opt-950">
                                {{ $fleet->title }}
                            </h2>
                            <p class="text-sagala-opt-700 text-justify mb-6">
                                {{ $fleet->description }}
                            </p>
                            <a href="{{ route('fleet.details', $fleet->slug) }}"
                                class="inline-block py-2 border-b-2 border-sagala-opt-950">
                                Discover {{ $fleet->title }}
                            </a>
                        </div>
                        <div>
                            <img src="{{ Storage::url($fleet->image) }}" alt="{{ $fleet->title }}"
                                class="w-full h-[350px] object-cover rounded-lg shadow-lg">
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @empty
        <section class="py-main">
            <div class="container-main">
                <p class="text-center text-sagala-opt-700">No fleet data available.</p>
            </div>
        </section>
    @endforelse

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
    <x-faq-section :faqs="$faqs" />

    <!-- Blog Section -->
    <x-blog-section :blogs="$blogs" />

    @stack('before-scripts')

    @stack('after-scripts')
@endsection
