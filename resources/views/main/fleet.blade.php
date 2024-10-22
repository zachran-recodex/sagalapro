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
                        <div>
                            <img src="{{ Storage::url($fleet->image) }}" alt="{{ $fleet->title }}"
                                class="w-full h-[350px] object-cover rounded-lg shadow-lg">
                        </div>
                        <div class="col-span-2">
                            <h2 class="text-sagala-500 text-2xl font-bold mb-4 pb-4 border-b-2 border-sagala-opt-950">
                                {{ $fleet->title }}</h2>
                            <p class="text-sagala-opt-700 text-justify mb-6">
                                {{ $fleet->description }}
                            </p>
                            <a href="{{ route('fleet.details', $fleet->slug) }}"
                                class="inline-block py-2 border-b-2 border-sagala-opt-950">
                                Discover {{ $fleet->title }}
                            </a>
                        </div>
                    @else
                        <div class="col-span-2">
                            <h2 class="text-sagala-500 text-2xl font-bold mb-4 pb-4 border-b-2 border-sagala-opt-950">
                                {{ $fleet->title }}</h2>
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
        <p>No fleet data available.</p>
    @endforelse

    <!-- Request a Quote Section -->
    <section class="bg-sagala-500 py-main">
        <div class="container-main text-sagala-opt-50 lg:text-start text-center">
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
                class="inline-flex items-center border border-sagala-opt-50 py-[10px] px-[26px] text-base transition hover:bg-sagala-opt-50 hover:text-sagala-500">
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
                    <h2 class="text-title text-sagala-opt-950">Frequently Asked Questions</h2>
                    <a href="{{ route('contact') }}" class="text-sagala-600 font-light underline">Contact Support</a>
                </div>

                <!-- Right Section -->
                <div class="lg:col-span-2">
                    <div class="divide-y divide-sagala-600">
                        @forelse ($faqs as $faq)
                            <!-- FAQ Item -->
                            <div class="py-4">
                                <div class="flex justify-between items-center">
                                    <h3 class="font-semibold text-lg">{{ $faq->title }}</h3>
                                    <button class="text-xl toggle-faq" data-target="faq-{{ $loop->index }}"
                                        aria-expanded="false">+</button>
                                </div>
                                <p class="mt-2 text-sagala-opt-500 faq-content hidden" id="faq-{{ $loop->index }}">
                                    {{ $faq->description }}
                                </p>
                            </div>
                        @empty
                            <div class="py-4">
                                <p class="text-sagala-opt-500">No FAQs available at the moment.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News and Blog Section -->
    <section class="bg-sagala-opt-50 py-main">
        <div class="container-main">
            <h2 class="text-title">Latest News and Blog</h2>
        </div>
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
                <div class="flex gap-6 whitespace-nowrap mb-8">
                    @forelse ($blogs as $blog)
                        <a href="{{ route('blog.details', $blog->slug) }}"
                            class="min-w-[300px] bg-sagala-opt-50 border border-sagala-opt-200 shadow">
                            <img class="object-cover h-36 w-full" src="{{ Storage::url($blog->image) }}"
                                alt="{{ $blog->title }}" />
                            <div class="p-5">
                                <div class="flex justify-between">
                                    <p class="mb-3 font-light text-sagala-opt-700">{{ $blog->author }}</p>
                                    <p class="mb-3 font-light text-sagala-opt-700">
                                        {{ $blog->created_at->format('M d, Y') }}
                                    </p>
                                </div>
                                <h5 class="mb-2 text-lg font-normal tracking-tight text-sagala-500 text-wrap">
                                    {{ $blog->title }}
                                </h5>
                            </div>
                        </a>
                    @empty
                        <a href="" class="min-w-[300px] bg-sagala-opt-50 border border-sagala-opt-200 shadow">
                            <img class="object-cover h-36 w-full" src="" alt="" />
                            <div class="p-5">
                                <div class="flex justify-between">
                                    <p class="mb-3 font-light text-sagala-opt-700">News</p>
                                    <p class="mb-3 font-light text-sagala-opt-700">August 22, 2024</p>
                                </div>
                                <h5 class="mb-2 text-lg font-normal tracking-tight text-sagala-500 text-wrap">
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
