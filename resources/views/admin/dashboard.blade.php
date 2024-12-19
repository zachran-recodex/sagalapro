<x-layout.admin>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mt-6">

        <div class="lg:col-span-12 2xl:col-span-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

                @foreach($widgets as $widget)
                    <a href="{{ $widget['route'] }}" class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-primary-600/10 to-bg-white">
                        <div class="card-body p-0">
                            <div class="flex items-center gap-2">
                                <span class="mb-0 w-[44px] h-[44px] bg-primary-600 shrink-0 text-white flex justify-center items-center rounded-full h6">
                                  <iconify-icon icon="{{ $widget['icon'] }}" class="icon"></iconify-icon>
                                </span>
                                <span class="font-medium text-secondary-light text-2xl">{{ $widget['title'] }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </div>
</x-layout.admin>
