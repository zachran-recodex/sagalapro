<!-- FAQ Section -->
<section class="py-main">
    <div class="container-main">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Section -->
            <div class="lg:col-span-1 flex flex-col justify-between">
                <h2 class="text-title text-sagala-opt-950">Frequently Asked Questions</h2>
                <a href="{{ route('contact') }}" class="text-sagala-600 font-light underline">Contact Support</a>
            </div>

            <!-- Right Section -->
            <div class="lg:col-span-2">
                <div class="divide-y divide-sagala-600">
                    @forelse ($faqs as $faq)
                        <!-- FAQ Item -->
                        <div class="py-4">
                            <div class="flex justify-between items-center">
                                <h3 class="font-semibold text-lg">{{ $faq->title }}</h3>
                                <button class="text-xl toggle-faq" data-target="faq-{{ $loop->index }}"
                                    aria-expanded="false">+</button>
                            </div>
                            <p class="mt-2 text-sagala-opt-500 faq-content hidden" id="faq-{{ $loop->index }}">
                                {{ $faq->description }}
                            </p>
                        </div>
                    @empty
                        <div class="py-4">
                            <p class="text-sagala-opt-500">No FAQs available at the moment.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Script -->
<script>
    document.querySelectorAll('.toggle-faq').forEach(button => {
        button.addEventListener('click', () => {
            const target = document.getElementById(button.dataset.target);
            const isExpanded = button.getAttribute('aria-expanded') === 'true';
            target.classList.toggle('hidden', isExpanded);
            button.textContent = isExpanded ? '+' : '×'; // Change button symbol based on state
            button.setAttribute('aria-expanded', !isExpanded); // Update aria-expanded attribute
        });
    });
</script>
