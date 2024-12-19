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

<x-layout.main>
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
    <x-section.partner-section :partners="$partners" />

    <!-- FAQ Section -->
    <x-section.faq-section :faqs="$faqs" />

    <!-- Blog Section -->
    <x-section.blog-section :blogs="$blogs" />

    @stack('before-scripts')
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
</x-layout.main>
