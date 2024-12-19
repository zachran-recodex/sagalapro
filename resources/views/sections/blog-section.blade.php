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
                        <img class="object-cover h-36 w-full rounded-t-lg" src="{{ asset($blog->image) }}"
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
