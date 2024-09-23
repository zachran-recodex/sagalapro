<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triwalana Sagala Pro</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="512x512"
        href="{{ asset('images/favicon/android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('images/favicon/android-chrome-192x192.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <header>
        <nav class="border-gray-200 bg-transparent absolute top-0 left-0 w-full z-10">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('images/logo-sagala.png') }}" class="w-[255px]" alt="Logo Sagala Pro" />
                </a>
                <button id="menu-toggle" data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                        <li>
                            <a href="{{ route('home') }}" class="block py-2 px-3 text-white md:bg-transparent md:p-0"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"
                                class="block py-2 px-3 text-white hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#2A6F97] md:p-0">About
                                Us</a>
                        </li>

                        <!-- Dropdown for Services -->
                        <li class="relative group">
                            <button type="button"
                                class="flex items-center py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#2A6F97] md:p-0">
                                Services
                                <!-- SVG for arrow down -->
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div
                                class="hidden group-hover:block absolute bg-white text-gray-900 rounded-lg shadow-lg mt-2 min-w-[150px] z-10">
                                <ul class="py-2 text-sm text-gray-700">
                                    <li>
                                        <a href="{{ route('acquisition') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Aircraft & Helicopter
                                            Acquisition</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('aerial') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Aerial Fire-Fighting Consultant &
                                            Operation</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('cargo') }}" class="block px-4 py-2 hover:bg-gray-100">Heavy
                                            & Outsized Cargo Service</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('charter') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Private Jet Charters & Flights</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="{{ route('fleet') }}"
                                class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#2A6F97] md:p-0">Fleets</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}"
                                class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#2A6F97] md:p-0">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-[#2A6F97] pt-16 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 pb-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Section 1: Logo and Description -->
                <div class="col-span-1 lg:col-span-2">
                    <img src="{{ asset('images/logo-sagala.png') }}" class="w-[363px] mb-4" alt="Logo Sagala">
                    <p class="mb-6 text-justify">
                        We offer comprehensive aviation services, including aircraft leasing, cargo transport, aerial
                        surveillance, and private jet charters. We are dedicated to safety, reliability, and customer
                        satisfaction. Contact us to learn more about our services.
                    </p>
                    <h4 class="font-semibold mb-2">SERVICES</h4>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('acquisition') }}" class="hover:underline">Aircraft & Helicopter
                                Acquisition</a>
                        </li>
                        <li>
                            <a href="{{ route('aerial') }}" class="hover:underline">Aerial Fire-Fighting Consultant &
                                Operation</a>
                        </li>
                        <li>
                            <a href="{{ route('cargo') }}" class="hover:underline">Heavy & Outsized Cargo Service</a>
                        </li>
                        <li>
                            <a href="{{ route('charter') }}" class="hover:underline">Private Jet Charters &
                                Flights</a>
                        </li>
                    </ul>
                </div>

                <!-- Section 2: Contact Information (Phone, Email, Address) -->
                <div>
                    <h4 class="font-semibold mb-2">PHONE / FAX</h4>
                    <p><a href="tel:+622122580028" class="hover:underline">+62-21-22580028</a></p>

                    <h4 class="font-semibold mt-4 mb-2">EMAIL</h4>
                    <p><a href="mailto:office@sagalapro.com" class="hover:underline">office@sagalapro.com</a></p>

                    <h4 class="font-semibold mt-4 mb-2">ADDRESS</h4>
                    <p class="text-justify">
                        <a href="#" class="hover:underline">
                            PT. Triwalana Sagala Pro STC Senayan 2nd Floor – Room 89 Jln. Asia Afrika Pintu IX, Gelora
                            Senayan, Jakarta – Pusat 10270
                        </a>
                    </p>
                </div>

                <!-- Section 3: Mobile and Operational Address -->
                <div>
                    <h4 class="font-semibold mb-2">MOBILE</h4>
                    <p><a href="tel:081513121517" class="hover:underline">0815-1312-1517</a></p>

                    <h4 class="font-semibold mt-4 mb-2">OPERATIONAL</h4>
                    <p class="text-justify">
                        <a href="#" class="hover:underline">
                            Jl. Sultan Iskandar Muda (Arteri Pondok Indah) No.12 Lantai 2, RT.11/RW.09 Kebayoran Lama,
                            Jakarta-Selatan -12240
                        </a>
                    </p>

                    <h4 class="font-semibold mt-4 mb-2">QUICK LINKS</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:underline">News</a></li>
                        <li><a href="#" class="hover:underline">Careers</a></li>
                        <li><a href="#" class="hover:underline">Fleets</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <hr class="mt-8 border-gray-300">

        <div class="container mx-auto flex flex-col sm:flex-row justify-between py-4 px-4 sm:px-6 lg:px-8">
            <h5 class="text-center sm:text-left">© Sagala Pro All Rights Reserved</h5>
            <div class="flex flex-wrap justify-center sm:justify-between gap-4 lg:gap-20 mt-4 sm:mt-0">
                <a href="#" class="hover:underline">Terms and Conditions</a>
                <a href="#" class="hover:underline">Privacy Policy</a>
                <a href="#" class="hover:underline">Back To Top</a>
            </div>
        </div>
    </footer>

    @stack('before-scripts')
    <script src="node_modules/flowbite/dist/flowbite.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const navbar = document.getElementById('navbar-default');
            const dropdownButton = document.getElementById('dropdownHoverButton');
            const dropdownMenu = document.getElementById('dropdownHover');

            menuToggle.addEventListener('click', function() {
                navbar.classList.toggle('hidden');
            });

            dropdownButton.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });

            document.addEventListener('click', function(event) {
                if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>

    @stack('after-scripts')

</body>

</html>
