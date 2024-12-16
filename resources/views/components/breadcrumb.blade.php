<div class="flex flex-wrap items-center justify-between gap-2 mb-6">
    <h6 class="font-semibold mb-0 dark:text-white">{{ $title }}</h6>
    <ul class="flex items-center gap-[6px]">
        <li class="font-medium">
            <a href="{{ route('admin.dashboard.index') }}" class="flex items-center gap-2 hover:text-primary-600 dark:text-white">
                <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                Dashboard
            </a>
        </li>
        <li class="dark:text-white">-</li>
        <li class="font-medium dark:text-white">{{ $subTitle }}</li>
    </ul>
</div>
