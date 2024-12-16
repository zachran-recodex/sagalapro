@if ($paginator->hasPages())
    <ul class="pagination d-flex flex-wrap align-items-center gap-2 justify-content-center">
        {{-- First Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item">
                <span class="page-link bg-primary-50 text-secondary-light fw-medium radius-8 border-0 px-20 py-10 d-flex align-items-center justify-content-center h-48-px">
                    <iconify-icon icon="ic:baseline-first-page" class="text-lg"></iconify-icon>
                    First
                </span>
            </li>
            <li class="page-item">
                <span class="page-link bg-primary-50 text-secondary-light fw-medium radius-8 border-0 px-20 py-10 d-flex align-items-center justify-content-center h-48-px">
                    <iconify-icon icon="ep:arrow-left" class="text-lg"></iconify-icon>
                    Previous
                </span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-8 border-0 px-20 py-10 d-flex align-items-center justify-content-center h-48-px" href="{{ $paginator->url(1) }}">
                    <iconify-icon icon="ic:baseline-first-page" class="text-lg"></iconify-icon>
                    First
                </a>
            </li>
            <li class="page-item">
                <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-8 border-0 px-20 py-10 d-flex align-items-center justify-content-center h-48-px" href="{{ $paginator->previousPageUrl() }}">
                    <iconify-icon icon="ep:arrow-left" class="text-lg"></iconify-icon>
                    Previous
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item">
                    <span class="page-link">{{ $element }}</span>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item">
                            <span class="page-link bg-primary-50 text-secondary-light fw-medium radius-8 border-0 px-20 py-10 d-flex align-items-center justify-content-center h-48-px w-48-px text-white">{{ $page }}</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-8 border-0 px-20 py-10 d-flex align-items-center justify-content-center h-48-px w-48-px" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-8 border-0 px-20 py-10 d-flex align-items-center justify-content-center h-48-px" href="{{ $paginator->nextPageUrl() }}">
                    Next
                    <iconify-icon icon="ep:arrow-right" class="text-lg"></iconify-icon>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-8 border-0 px-20 py-10 d-flex align-items-center justify-content-center h-48-px" href="{{ $paginator->url($paginator->lastPage()) }}">
                    Last
                    <iconify-icon icon="ic:baseline-last-page" class="text-lg"></iconify-icon>
                </a>
            </li>
        @else
            <li class="page-item">
                <span class="page-link bg-primary-50 text-secondary-light fw-medium radius-8 border-0 px-20 py-10 d-flex align-items-center justify-content-center h-48-px">
                    Next
                    <iconify-icon icon="ep:arrow-right" class="text-lg"></iconify-icon>
                </span>
            </li>
            <li class="page-item">
                <span class="page-link bg-primary-50 text-secondary-light fw-medium radius-8 border-0 px-20 py-10 d-flex align-items-center justify-content-center h-48-px">
                    Last
                    <iconify-icon icon="ic:baseline-last-page" class="text-lg"></iconify-icon>
                </span>
            </li>
        @endif
    </ul>
@endif
