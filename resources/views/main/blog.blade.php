@extends('layouts.main')

@section('content')
    <!-- Blog Section -->
    <section class="py-8 sm:py-12 lg:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="#"
                                class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Blog</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">All You Need to
                                Know About Ground Handling</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Blog Content -->
            <article>
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">All You Need to Know About Ground Handling</h2>
                <p class="text-sm text-gray-500 mb-6">September 21, 2024 | Admin</p>

                <img src="{{ asset('images/aerial.jpg') }}" alt="Aerial"
                    class="mb-6 w-full h-auto rounded-lg shadow-lg object-cover">

                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4 text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita consequatur cum cupiditate beatae
                    accusamus? Eum amet repellendus hic consequatur dolores consequuntur excepturi velit quia voluptates
                    mollitia reiciendis dolorum, in, non quis error veniam et optio quas! Commodi dignissimos quam facilis
                    corporis, soluta omnis a quaerat ad ipsum vero odit nulla minima recusandae voluptatibus accusamus,
                    officiis sapiente rerum nihil?
                </p>

                <h3 class="text-xl font-semibold mb-2">Lorem, ipsum dolor.</h3>
                <p class="mb-4 text-justify">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex tempore ut consequatur ratione amet
                    praesentium aliquid omnis non. Vitae, inventore aliquid? Minus repudiandae quam natus saepe quas ducimus
                    architecto aut ipsam?
                </p>

                <h4 class="text-lg font-semibold mb-2">1. Lorem, ipsum.</h4>
                <p class="mb-4 text-justify">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, vitae assumenda hic consequuntur
                    reiciendis sunt cumque nemo reprehenderit tempora architecto unde quisquam porro recusandae?
                </p>
            </article>
        </div>
    </section>

    <!-- Latest News and Blog Section -->
    <section class="bg-[#F9F9F9] py-8 sm:py-12 lg:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-8 text-black">Latest News and Blog</h2>
        </div>
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
                <div class="flex gap-6 whitespace-nowrap mb-8">

                    <div class="min-w-[300px] bg-white border border-gray-200">
                        <a href="#">
                            <img class="object-cover h-36 w-full" src="{{ asset('images/1.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <div class="flex justify-between">
                                <p class="mb-3 font-normal text-gray-700">News</p>
                                <p class="mb-3 font-normal text-gray-700">August 22, 2024</p>
                            </div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-wrap">
                                    All you need to know about Ground Handling
                                </h5>
                            </a>
                        </div>
                    </div>

                    <div class="min-w-[300px] bg-white border border-gray-200">
                        <a href="#">
                            <img class="object-cover h-36 w-full" src="{{ asset('images/1.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <div class="flex justify-between">
                                <p class="mb-3 font-normal text-gray-700">News</p>
                                <p class="mb-3 font-normal text-gray-700">August 22, 2024</p>
                            </div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-wrap">
                                    All you need to know about Ground Handling
                                </h5>
                            </a>
                        </div>
                    </div>

                    <div class="min-w-[300px] bg-white border border-gray-200">
                        <a href="#">
                            <img class="object-cover h-36 w-full" src="{{ asset('images/1.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <div class="flex justify-between">
                                <p class="mb-3 font-normal text-gray-700">News</p>
                                <p class="mb-3 font-normal text-gray-700">August 22, 2024</p>
                            </div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-wrap">
                                    All you need to know about Ground Handling
                                </h5>
                            </a>
                        </div>
                    </div>

                    <div class="min-w-[300px] bg-white border border-gray-200">
                        <a href="#">
                            <img class="object-cover h-36 w-full" src="{{ asset('images/1.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <div class="flex justify-between">
                                <p class="mb-3 font-normal text-gray-700">News</p>
                                <p class="mb-3 font-normal text-gray-700">August 22, 2024</p>
                            </div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-wrap">
                                    All you need to know about Ground Handling
                                </h5>
                            </a>
                        </div>
                    </div>

                    <div class="min-w-[300px] bg-white border border-gray-200">
                        <a href="#">
                            <img class="object-cover h-36 w-full" src="{{ asset('images/1.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <div class="flex justify-between">
                                <p class="mb-3 font-normal text-gray-700">News</p>
                                <p class="mb-3 font-normal text-gray-700">August 22, 2024</p>
                            </div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-wrap">
                                    All you need to know about Ground Handling
                                </h5>
                            </a>
                        </div>
                    </div>

                    <div class="min-w-[300px] bg-white border border-gray-200">
                        <a href="#">
                            <img class="object-cover h-36 w-full" src="{{ asset('images/1.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <div class="flex justify-between">
                                <p class="mb-3 font-normal text-gray-700">News</p>
                                <p class="mb-3 font-normal text-gray-700">August 22, 2024</p>
                            </div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-wrap">
                                    All you need to know about Ground Handling
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @stack('before-scripts')


    @stack('after-scripts')
@endsection
