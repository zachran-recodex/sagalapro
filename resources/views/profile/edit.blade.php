<x-layout.admin>
    <div class="flex flex-wrap items-center justify-between gap-2 mb-6">
        <h6 class="font-semibold mb-0 dark:text-white">Profile</h6>
        <ul class="flex items-center gap-[6px]">
            <li class="font-medium">
                <a href="{{ route('admin.dashboard.index') }}" class="flex items-center gap-2 hover:text-primary-600 dark:text-white">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li class="dark:text-white">-</li>
            <li class="font-medium dark:text-white">Profile</li>
        </ul>
    </div>

    <div class="col-span-12 space-y-6">
        <div class="card border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center flex-wrap gap-3 justify-between">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Profile Information') }}
                </h2>

                <p class="text-sm text-gray-600">
                    {{ __("Update your account's profile information and email address.") }}
                </p>
            </div>
            <div class="card-body">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="card border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center flex-wrap gap-3 justify-between">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Update Password') }}
                </h2>

                <p class="text-sm text-gray-600">
                    {{ __('Ensure your account is using a long, random password to stay secure.') }}
                </p>
            </div>
            <div class="card-body">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="card border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center flex-wrap gap-3 justify-between">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Delete Account') }}
                </h2>

                <p class="text-sm text-gray-600">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                </p>
            </div>
            <div class="card-body">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-layout.admin>
