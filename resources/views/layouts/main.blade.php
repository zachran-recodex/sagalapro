<!DOCTYPE html>
<html lang="en">

<head>

    @yield('meta_tag')

    <link rel="shortcut icon" href="{{ $setting->favicon ? Storage::url($setting->favicon) : asset('favicon.ico') }}"
        type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('favicon/android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-chrome-192x192.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <script src="https://kit.fontawesome.com/ddb90eabf1.js" crossorigin="anonymous"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YTVXB721VK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-YTVXB721VK');
    </script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <header class="bg-transparent fixed w-full z-50 top-0 left-0 py-4 transition duration-300 text-sagala-opt-50"
        id="navbar">
        <nav class="container-main flex items-center justify-between">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo-sagala.png') }}" alt="Logo Sagala Pro" class="w-[255px]"
                    id="navbarLogo">
            </a>
            <div>
                <ul class="flex space-x-12 justify-between items-center">
                    <li>
                        <a href="{{ route('home') }}" class="hover:text-sagala-600">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="hover:text-sagala-600">About Us</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex justify-between items-center hover:text-sagala-600">
                            Services
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-sagala-opt-50 divide-y divide-sagala-opt-100 rounded-lg shadow w-fit">
                            <ul class="py-2 text-sm text-sagala-opt-700" aria-labelledby="dropdownNavbarLink">
                                @forelse ($navServices as $service)
                                    <li>
                                        <a href="{{ route('service.details', $service->slug) }}"
                                            class="block px-4 py-2 hover:bg-sagala-opt-100">{{ $service->title }}</a>
                                    </li>
                                @empty
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-sagala-opt-100">No Data</a>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('fleet') }}" class="hover:text-sagala-600">Fleets</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="bg-sagala-600 px-4 py-2 rounded-lg border hover:bg-transparent hover:border">Contact
                            Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-sagala-600 pt-16 text-sagala-opt-50">
        <div class="container-main">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Section 1: Logo and Description -->
                <div class="col-span-1 lg:col-span-2">
                    <img src="{{ asset('images/logo-sagala.png') }}" class="w-[363px] mb-4" alt="Logo Sagala">
                    <p class="mb-6 text-justify">
                        {{ $setting->footer_text }}
                    </p>
                    <h4 class="font-semibold mb-2">SERVICES</h4>
                    <ul class="space-y-2">
                        @forelse ($navServices as $service)
                            <li>
                                <a href="{{ route('service.details', $service->slug) }}"
                                    class="hover:underline">{{ $service->title }}</a>
                            </li>
                        @empty
                            <li>
                                <a href="#" class="hover:underline">No Data</a>
                            </li>
                        @endforelse
                    </ul>
                </div>

                <!-- Section 2: Contact Information (Phone, Email, Address) -->
                <div class="flex flex-col space-y-4">
                    <div>
                        <h4 class="font-semibold">PHONE</h4>
                        <p>
                            <a href="tel:{{ $setting->phone_one }}"
                                class="hover:underline">{{ $setting->phone_one }}</a>
                        </p>
                    </div>

                    <div>
                        <h4 class="font-semibold">EMAIL</h4>
                        <p>
                            <a href="mailto:{{ $setting->email_one }}"
                                class="hover:underline">{{ $setting->email_one }}</a>
                        </p>
                    </div>

                    <div>
                        <h4 class="font-semibold">ADDRESS</h4>
                        <p class="text-justify hover:underline">
                            {{ $setting->address }}
                        </p>
                    </div>

                    <ul class="flex space-x-4 items-center">
                        <li>
                            <a href="https://www.instagram.com/sagala.pro" target="_blank" class="hover:underline">
                                <i class="text-2xl fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="hover:underline">
                                <i class="text-2xl fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="hover:underline">
                                <i class="text-2xl fa-brands fa-whatsapp"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Section 3: Mobile and Operational Address -->
                <div class="flex flex-col space-y-4">
                    <div>
                        <h4 class="font-semibold">MOBILE</h4>
                        <p>
                            <a href="tel:{{ $setting->phone_two }}"
                                class="hover:underline">{{ $setting->phone_two }}</a>
                        </p>
                    </div>

                    <div>
                        <h4 class="font-semibold">OPERATIONAL</h4>
                        <p class="text-justify hover:underline">
                            {{ $setting->operational_address }}
                        </p>
                    </div>

                    <div>
                        <h4 class="font-semibold">QUICK LINKS</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:underline">Blogs</a></li>
                            <li><a href="#" class="hover:underline">Careers</a></li>
                            <li><a href="#" class="hover:underline">Fleets</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <hr class="mt-8 border-sagala-opt-300">

        <div class="container mx-auto flex flex-col sm:flex-row justify-between py-4 px-4 sm:px-6 lg:px-8">
            <h5 class="text-center sm:text-left">© Sagala Pro All Rights Reserved</h5>
            <div class="flex flex-wrap justify-center sm:justify-between gap-4 lg:gap-20 mt-4 sm:mt-0">
                <a href="{{ route('terms-conditions') }}" class="hover:underline">Terms and Conditions</a>
                <a href="{{ route('privacy-policy') }}" class="hover:underline">Privacy Policy</a>
                <a href="#" class="hover:underline">Back To Top</a>
            </div>
        </div>
    </footer>

    @stack('before-scripts')
    <!-- Navbar Script -->
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            const logo = document.getElementById('navbarLogo');

            if (window.scrollY > 50) {
                navbar.classList.add('bg-sagala-opt-50', 'shadow-md', 'text-sagala-opt-950');
                navbar.classList.remove('bg-transparent', 'text-sagala-opt-50');
                logo.src = "{{ asset('images/logo-sagala-second.png') }}"; // Ganti logo saat scroll
            } else {
                navbar.classList.add('bg-transparent', 'text-sagala-opt-50');
                navbar.classList.remove('bg-sagala-opt-50', 'shadow-md', 'text-sagala-opt-950');
                logo.src = "{{ asset('images/logo-sagala.png') }}"; // Kembali ke logo asli
            }
        });
    </script>
    @stack('after-scripts')
</body>

</html>
