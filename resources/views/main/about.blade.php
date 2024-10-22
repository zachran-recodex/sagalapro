@extends('layouts.main')

@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Learn more about Triwalana Sagala Pro, a trusted aerial support company in Indonesia. With years of experience, we offer aerial mapping, land surveys, and air support solutions tailored to your industry.">
    <meta name="keywords"
        content="Aerial Support Indonesia, Aerial Services, Aerial Mapping, Land Surveys, Operational Air Support, Triwalana Sagala Pro, Aerial Support Company, Air Operational Support, Aerial Technology, Reliable Aerial Services">
    <meta name="author" content="RECODEX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#2A6F97">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>About Triwalana Sagala Pro | Leading Aerial Support Company in Indonesia</title>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-cover bg-center bg-no-repeat h-screen"
        style="background-image: url({{ asset('images/hero-about.jpg') }})">
        <div class="absolute inset-0 bg-sagala-opt-950 opacity-50"></div>
        <div class="relative h-full flex items-center">
            <div class="container-main py-12">
                <div class="text-center lg:text-start">
                    <p class="leading-relaxed text-sagala-opt-50 text-lg md:text-xl">
                        Sagala Pro Aerial Support
                    </p>
                    <h1 class="text-4xl sm:text-6xl font-bold text-sagala-opt-50 mt-2">
                        About Us
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Owner Section -->
    <section class="bg-cover lg:bg-contain bg-no-repeat bg-left h-[616px]"
        style="background-image: linear-gradient(to left, #FFFFFF 50%, rgba(255, 255, 255, 0) 100%), url({{ asset('images/ceo.jpg') }})">
        <div class="container-main h-full flex items-center justify-end">
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
        <div class="bg-sagala-opt-950 bg-opacity-20 h-full">
            <div class="container-main h-full flex items-center">
                <div class="lg:w-1/2 text-sagala-opt-50 flex flex-col gap-2">

                    <!-- Vision Section -->
                    <div id="vision" class="animate-fade-up animate-duration-[1500ms] animate-ease-in-out">
                        <h4 class="text-lg font-semibold text-sagala-600">Path To Success</h4>
                        <h3 class="text-title">Our Vision</h3>
                        <p class="text-desc">
                            To be a leading provider of exceptional aviation services, consistently delivering outstanding
                            solutions that meet and surpass our clients' needs and expectations.
                        </p>
                    </div>

                    <!-- Mission Section -->
                    <div id="mission" class="hidden animate-fade-up animate-duration-[1500ms] animate-ease-in-out">
                        <h4 class="text-lg font-semibold text-sagala-600">Path To Success</h4>
                        <h3 class="text-title">Our Mission</h3>
                        <p class="text-desc">
                            Understanding that aviation services come with high costs, SagalaPro offers free consultations
                            to prospective clients to help them make informed decisions. Our goal is to assist as many
                            clients as possible by providing the right information to meet their specific needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner Section -->
    <section class="py-main">
        <div class="container-main">
            <h3 class="text-center text-title text-sagala-600">We Work with the Best Partners</h3>

            <div x-data="{}" x-init="$nextTick(() => {
                let ul = $refs.logos;
                ul.insertAdjacentHTML('afterend', ul.outerHTML);
                ul.nextSibling.setAttribute('aria-hidden', 'true');
            })"
                class="flex overflow-hidden mt-8 [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-200px),transparent_100%)]">
                <ul x-ref="logos" class="inline-flex items-center justify-center md:justify-start animate-infinite-scroll">
                    @forelse ($partners as $partner)
                        <li
                            class="w-[250px] h-[100px] p-4 bg-sagala-opt-50 flex items-center justify-center shadow rounded me-8">
                            <img src="{{ Storage::url($partner->image) }}" alt="{{ $partner->id }}">
                        </li>
                    @empty
                        <li
                            class="w-[250px] h-[100px] p-4 bg-sagala-opt-50 flex items-center justify-center shadow rounded me-8">
                            NO DATA
                        </li>
                    @endforelse
                </ul>
            </div>
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
    <section class="bg-sagala-opt-50 py-main">
        <div class="container-main">
            <h2 class="text-title">Latest News and Blog</h2>
        </div>
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
                <div class="flex gap-6 whitespace-nowrap mb-8">
                    @forelse ($blogs as $blog)
                        <a href="{{ route('blog.details', $blog->slug) }}"
                            class="min-w-[300px] bg-sagala-opt-50 border border-gray-200 shadow">
                            <img class="object-cover h-36 w-full" src="{{ Storage::url($blog->image) }}"
                                alt="{{ $blog->title }}" />
                            <div class="p-5">
                                <div class="flex justify-between">
                                    <p class="mb-3 font-light text-gray-700">{{ $blog->author }}</p>
                                    <p class="mb-3 font-light text-gray-700">{{ $blog->created_at->format('M d, Y') }}
                                    </p>
                                </div>
                                <h5 class="mb-2 text-lg font-normal tracking-tight text-sagala-600 text-wrap">
                                    {{ $blog->title }}
                                </h5>
                            </div>
                        </a>
                    @empty
                        <a href="" class="min-w-[300px] bg-sagala-opt-50 border border-gray-200 shadow">
                            <img class="object-cover h-36 w-full" src="" alt="" />
                            <div class="p-5">
                                <div class="flex justify-between">
                                    <p class="mb-3 font-light text-gray-700">News</p>
                                    <p class="mb-3 font-light text-gray-700">August 22, 2024</p>
                                </div>
                                <h5 class="mb-2 text-lg font-normal tracking-tight text-sagala-600 text-wrap">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let vision = document.getElementById('vision');
            let mission = document.getElementById('mission');
            let isVisionVisible = true;

            // Function to toggle visibility
            function toggleVisionMission() {
                if (isVisionVisible) {
                    vision.classList.add('hidden');
                    mission.classList.remove('hidden');
                } else {
                    vision.classList.remove('hidden');
                    mission.classList.add('hidden');
                }
                isVisionVisible = !isVisionVisible;
            }

            // Toggle every 5 seconds
            setInterval(toggleVisionMission, 5000);
        });
    </script>

    @stack('after-scripts')
@endsection
