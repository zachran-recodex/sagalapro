<!-- Partner Section -->
<section class="py-main">
    <div class="container-main">
        <h2 class="text-center text-title text-sagala-600">We Work with the Best Partners</h2>

        <div x-data="{}" x-init="$nextTick(() => {
            let ul = $refs.logos;
            ul.insertAdjacentHTML('afterend', ul.outerHTML);
            ul.nextSibling.setAttribute('aria-hidden', 'true');
        })"
            class="flex overflow-hidden mt-8 [mask-image:_linear-gradient(to_right,transparent_0,_white_128px,_white_calc(100%-200px),transparent_100%)]">
            <ul x-ref="logos" class="flex items-center justify-center md:justify-start animate-infinite-scroll">
                @forelse ($partners as $partner)
                    <li
                        class="flex-shrink-0 w-[150px] h-[100px] p-4 bg-sagala-opt-50 flex items-center justify-center shadow rounded me-4">
                        <img src="{{ Storage::url($partner->image) }}" alt="{{ $partner->id }}"
                            class="max-w-full max-h-full object-contain">
                    </li>
                @empty
                    <li
                        class="flex-shrink-0 w-[150px] h-[100px] p-4 bg-sagala-opt-50 flex items-center justify-center shadow rounded">
                        NO DATA
                    </li>
                @endforelse
            </ul>
        </div>
    </div>
</section>
