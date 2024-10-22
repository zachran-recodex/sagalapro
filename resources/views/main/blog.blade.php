@extends('layouts.main')

@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="{{ $blog->description ?? 'Read the latest articles on interesting topics on our blog.' }}">
    <meta name="keywords" content="Blog, Articles, Information, Aerial Support, Triwalana Sagala Pro">
    <meta name="author" content="RECODEX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#2A6F97">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>{{ $blog->title }} | Triwalana Sagala Pro</title>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-cover bg-center bg-no-repeat h-[50vh]"
        style="background-image: url({{ Storage::url($blog->image) }})">
        <div class="relative bg-sagala-opt-950/50 h-full flex items-center">
            <div class="container-main py-12">
                <div class="text-center lg:text-start">
                    <p class="leading-relaxed text-sagala-opt-50 text-lg md:text-xl">
                        Sagala Pro Aerial Support
                    </p>
                    <h2 class="text-4xl sm:text-6xl font-bold text-sagala-opt-50 mt-2">
                        {{ $blog->title }}
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="py-main">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Blog Content -->
            <article>
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">{{ $blog->title }}</h2>
                <p class="text-sm text-sagala-opt-500 mb-6">{{ $blog->created_at->format('M d, Y') }} | {{ $blog->author }}
                </p>

                <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}"
                    class="mb-6 w-full h-[530px] rounded-lg shadow-lg object-cover">

                <p class="text-sagala-opt-700 leading-relaxed mb-4 text-justify">
                    {{ $blog->description }}
                </p>
            </article>
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
                                <h5 class="mb-2 text-lg font-normal tracking-tight text-sagala-600 text-wrap">
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

    @stack('after-scripts')
@endsection
