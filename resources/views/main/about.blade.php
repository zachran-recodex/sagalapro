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
                <div class="lg:w-1/2 text-sagala-opt-50 flex flex-col gap-6 px-4">

                    <!-- Vision Section -->
                    <div id="vision" class="animate-fade-up animate-duration-[1500ms] animate-ease-in-out">
                        <h4 class="text-lg font-semibold text-sagala-600">Path To Success</h4>
                        <h3 class="text-4xl font-bold">Our Vision</h3>
                        <p class="text-xl leading-relaxed text-justify">
                            To be a leading provider of exceptional aviation services, consistently delivering outstanding
                            solutions that meet and surpass our clients' needs and expectations.
                        </p>
                    </div>

                    <!-- Mission Section -->
                    <div id="mission" class="hidden animate-fade-up animate-duration-[1500ms] animate-ease-in-out">
                        <h4 class="text-lg font-semibold text-sagala-600">Path To Success</h4>
                        <h3 class="text-4xl font-bold">Our Mission</h3>
                        <p class="text-xl leading-relaxed text-justify">
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
            <h2 class="text-center text-title text-sagala-600">We Work with the Best Partners</h2>

            <div x-data="{}" x-init="$nextTick(() => {
                let ul = $refs.logos;
                ul.insertAdjacentHTML('afterend', ul.outerHTML);
                ul.nextSibling.setAttribute('aria-hidden', 'true');
            })"
                class="flex overflow-hidden mt-8 [mask-image:_linear-gradient(to_right,transparent_0,_white_128px,_white_calc(100%-200px),transparent_100%)]">
                <ul x-ref="logos"
                    class="flex items-center justify-center md:justify-start animate-infinite-scroll space-x-4">
                    @forelse ($partners as $partner)
                        <li
                            class="flex-shrink-0 w-[150px] h-[100px] p-4 bg-sagala-opt-50 flex items-center justify-center shadow rounded">
                            <img src="{{ Storage::url($partner->image) }}" alt="{{ $partner->id }}"
                                class="max-w-full max-h-full object-contain">
                        </li>
                    @empty
                        <li
                            class="flex-shrink-0 w-[150px] h-[100px] p-4 bg-sagala-opt-50 flex items-center justify-center shadow rounded">
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

    <!-- Blog Section -->
    <section class="bg-sagala-opt-50 py-main">
        <div class="container-main">
            <h2 class="text-title">Latest News and Blog</h2>
        </div>
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
                <div class="flex gap-6 overflow-x-auto mb-8 p-6">
                    @forelse ($blogs as $blog)
                        <a href="{{ route('blog.details', $blog->slug) }}"
                            class="min-w-[300px] bg-sagala-opt-50 border border-sagala-opt-200 shadow rounded-lg transition-transform transform hover:scale-105">
                            <img class="object-cover h-36 w-full rounded-t-lg" src="{{ Storage::url($blog->image) }}"
                                alt="{{ $blog->title }}" />
                            <div class="p-5">
                                <div class="flex justify-between">
                                    <p class="mb-3 font-light text-sagala-opt-700">{{ $blog->author }}</p>
                                    <p class="mb-3 font-light text-sagala-opt-700">
                                        {{ $blog->created_at->format('M d, Y') }}
                                    </p>
                                </div>
                                <h3 class="mb-2 text-lg font-normal tracking-tight text-sagala-600 text-wrap">
                                    {{ $blog->title }}
                                </h3>
                            </div>
                        </a>
                    @empty
                        <div class="min-w-[300px] bg-sagala-opt-50 border border-sagala-opt-200 shadow rounded-lg">
                            <img class="object-cover h-36 w-full rounded-t-lg" src="" alt="No image available" />
                            <div class="p-5">
                                <div class="flex justify-between">
                                    <p class="mb-3 font-light text-sagala-opt-700">No Author</p>
                                    <p class="mb-3 font-light text-sagala-opt-700">N/A</p>
                                </div>
                                <h3 class="mb-2 text-lg font-normal tracking-tight text-sagala-600 text-wrap">
                                    No blogs available at the moment.
                                </h3>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    @stack('before-scripts')
    <!-- FAQ Script -->
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

    <!-- Vision & Mission Script -->
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
