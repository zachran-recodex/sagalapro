<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ $setting->favicon ? Storage::url($setting->favicon) : asset('favicon.ico') }}"
        type="image/x-icon">

    <script src="https://kit.fontawesome.com/ddb90eabf1.js" crossorigin="anonymous"></script>

    <!-- Jsvectormap plugin css -->
    <link href="{{ asset('admin/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Icons css  (Mandatory in All Pages) -->
    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- App css  (Mandatory in All Pages) -->
    <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="wrapper">
        @include('layouts.sidebar')

        <div class="page-content">
            <!-- Topbar Start -->
            <header
                class="app-header sticky top-0 z-50 h-topbar flex items-center px-5 bg-white border-b border-default-200">
                <div class="container flex items-center gap-4">
                    <!-- Topbar Brand Logo -->
                    <a href="{{ route('home') }}" class="md:hidden flex">
                        <img src="{{ asset('images/logo-sagala-second.png') }}" class="h-6" alt="Small logo">
                    </a>

                    <!-- Sidenav Menu Toggle Button -->
                    <button id="button-toggle-menu"
                        class="text-default-500 hover:text-default-600 p-2 rounded-full cursor-pointer"
                        data-hs-overlay="#app-menu" aria-label="Toggle navigation">
                        <i class="i-tabler-menu-2 text-2xl"></i>
                    </button>

                    <!-- Topbar Search -->
                    <div class="md:flex hidden items-center relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <i class="i-ph-magnifying-glass text-base"></i>
                        </div>
                        <input type="search"
                            class="form-input px-10 rounded-lg  bg-gray-500/10 border-transparent focus:border-transparent w-80"
                            placeholder="Search...">
                        <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
                            <i class="i-ph-microphone text-base hover:text-black"></i>
                        </button>
                    </div>

                    <!-- Language Dropdown Button -->
                    <div class="ms-auto hs-dropdown relative inline-flex [--placement:bottom-right]">
                        <button type="button" class="hs-dropdown-toggle inline-flex items-center">
                            <img src="{{ asset('') }}admin/images/flags/us.jpg" alt="user-image" class="h-4 w-6">
                        </button>

                        <div
                            class="hs-dropdown-menu duration mt-2 min-w-48 rounded-lg border border-default-200 bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 hidden">
                            <a href="javascript:void(0);"
                                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100">
                                <img src="{{ asset('') }}admin/images/flags/germany.jpg" alt="user-image"
                                    class="h-4">
                                <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);"
                                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100">
                                <img src="{{ asset('') }}admin/images/flags/italy.jpg" alt="user-image"
                                    class="h-4">
                                <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);"
                                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100">
                                <img src="{{ asset('') }}admin/images/flags/spain.jpg" alt="user-image"
                                    class="h-4">
                                <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);"
                                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100">
                                <img src="{{ asset('') }}admin/images/flags/russia.jpg" alt="user-image"
                                    class="h-4">
                                <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </div>

                    <!-- Fullscreen Toggle Button -->
                    <div class="md:flex hidden">
                        <button data-toggle="fullscreen" type="button" class="p-2">
                            <span class="sr-only">Fullscreen Mode</span>
                            <span class="flex items-center justify-center size-6">
                                <i class="i-tabler-maximize text-2xl flex group-[-fullscreen]:hidden"></i>
                                <i class="i-tabler-minimize text-2xl hidden group-[-fullscreen]:flex"></i>
                            </span>
                        </button>
                    </div>

                    <!-- Profile Dropdown Button -->
                    <div class="relative">
                        <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                            <button type="button" class="hs-dropdown-toggle">
                                <p>{{ Auth::user()->name }}</p>
                            </button>
                            <div
                                class="hs-dropdown-menu duration mt-2 min-w-48 rounded-lg border border-default-200 bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 hidden">
                                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                                    href="{{ route('profile.edit') }}">
                                    Profile
                                </a>

                                <hr class="my-2">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Topbar End -->

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>

            <!-- Footer Start -->
            <footer class="footer bg-white h-16 flex items-center px-6 border-t border-gray-200">
                <div class="container flex md:justify-between justify-center w-full gap-4">
                    <div>
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © PT. Triwalana Sagala Pro
                    </div>
                    <div class="md:flex hidden gap-2 item-center md:justify-end">
                        Design &amp; Develop by<a href="https://recodex.id" target="_blank"
                            class="font-bold text-[#86C332]">RECODEX</a>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->
        </div>
    </div>

    @stack('before-scripts')
    <!-- Plugin Js (Mandatory in All Pages) -->
    <script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/libs/preline/preline.js') }}"></script>
    <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/libs/iconify-icon/iconify-icon.min.js') }}"></script>
    <script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>

    <!-- App Js (Mandatory in All Pages) -->
    <script src="{{ asset('admin/js/app.js') }}"></script>

    <!-- Apexcharts js -->
    <script src="{{ asset('admin/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector Map Js -->
    <script src="{{ asset('admin/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>

    <!-- Dashboard Project Page js -->
    <script src="{{ asset('admin/js/pages/dashboard.js') }}"></script>

    @stack('after-scripts')
</body>

</html>
