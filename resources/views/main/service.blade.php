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

<x-layout.main>
    <!-- Hero Section -->
    <section class="bg-cover bg-center bg-no-repeat h-screen"
        style="background-image: url({{ asset($service->image) }})">
        <div class="absolute inset-0 bg-sagala-opt-950 opacity-50"></div>
        <div class="relative h-full flex items-center">
            <div class="container-main py-12">
                <div class="text-center lg:text-left">
                    <p class="leading-relaxed text-sagala-opt-50 text-lg md:text-xl">
                        Sagala Pro Aerial Support
                    </p>
                    <h2 class="text-4xl sm:text-6xl font-bold text-sagala-opt-50 mt-2">
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
                    <img class="w-full h-auto object-cover" src="{{ asset($service->image) }}"
                        alt="{{ $service->title }}">
                </div>
                <!-- Text Section -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-sagala-600 text-title">{{ $service->title }}</h2>
                    <p class="mb-4 text-justify text-sagala-opt-700">{{ $service->description }}</p>
                    <a href="{{ route('fleet') }}"
                        class="inline-flex items-center text-sagala-opt-50 bg-sagala-600 border-0 py-2 px-6 sm:px-10 focus:outline-none text-sm sm:text-base rounded-full transition hover:bg-sagala-700">
                        See Catalog
                    </a>
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

    <!-- Service Section -->
    <section class="bg-sagala-opt-100">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
            @forelse ($services as $service)
                <a href="{{ route('service.details', $service->slug) }}" class="relative">
                    <img src="{{ asset($service->image) }}" alt="{{ $service->title }}"
                        class="w-full h-[390px] object-cover transition duration-300 ease-in-out transform hover:scale-105">
                    <div
                        class="absolute inset-0 flex flex-col justify-end items-start bg-sagala-opt-950 bg-opacity-50 hover:bg-sagala-600 hover:bg-opacity-65 pb-[55px] pl-10">
                        <p class="text-sagala-opt-50 text-lg font-semibold mb-1">{{ $service->title }}</p>
                        <svg class="w-[56px] h-[16px] text-sagala-600 hover:text-sagala-opt-50" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="56" height="16" fill="none"
                            viewBox="0 0 56 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M52 8H4m48 0-4 4m4-4-4-4" />
                        </svg>
                    </div>
                </a>
            @empty
                <div class="relative">
                    <img src="#" alt="No Data" class="w-full h-[390px] object-cover">
                    <div
                        class="absolute inset-0 flex flex-col justify-end items-start bg-sagala-opt-950 bg-opacity-50 hover:bg-sagala-600 hover:bg-opacity-65 pb-[55px] pl-10">
                        <p class="text-sagala-opt-50 text-lg font-semibold mb-1">No Data</p>
                        <svg class="w-[56px] h-[16px] text-sagala-600 hover:text-sagala-opt-50" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="56" height="16" fill="none"
                            viewBox="0 0 56 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M52 8H4m48 0-4 4m4-4-4-4" />
                        </svg>
                    </div>
                </div>
            @endforelse
        </div>
    </section>

    <!-- Blog Section -->
    <x-section.blog-section :blogs="$blogs" />

    @stack('before-scripts')

    @stack('after-scripts')
</x-layout.main>
