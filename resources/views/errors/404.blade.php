@extends('layouts.main')

@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="404 Not Found">
    <meta name="keywords" content="404, Not Found">
    <meta name="author" content="Zachran Razendra">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <meta name="theme-color" content="#2A6F97">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>404 | Not Found</title>
@endsection

@section('content')
    <!-- 404 Hero Section -->
    <section id="404" class="h-screen z-10">
        <!-- Wrapper -->
        <div class="relative h-screen overflow-hidden">
            <!-- Background Image -->
            <img src="{{ asset('images/hero.png') }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="404 Image">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <!-- Content -->
            <div class="relative h-full flex items-center justify-center">
                <div class="text-center">
                    <h1 class="mb-6 text-6xl font-bold text-white">404 | Not Found</h1>
                    <p class="mb-4 text-xl text-white">The page you're looking for cannot be found.</p>
                    <div class="flex flex-col gap-4 sm:flex-row justify-center">
                        <a href="{{ route('home') }}"
                            class="inline-flex py-3 px-8 text-lg text-white transition bg-[#2A6F97] border-0 hover:bg-[#1d5e7a] focus:outline-none">
                            Back to Home
                        </a>
                        <a href="{{ route('contact') }}"
                            class="inline-flex py-3 px-8 text-lg text-white transition border border-white hover:bg-white hover:text-[#2A6F97] focus:outline-none">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
