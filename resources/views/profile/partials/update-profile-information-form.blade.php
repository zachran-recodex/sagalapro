<section>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('admin.profile.update') }}" class="space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div>
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="form-control border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" required autofocus autocomplete="name">
            <x-input-error class="mt-2" :messages="$errors->get('name')" />

            <label for="profile_picture" class="form-label pt-5">Profile Picture</label>
            <input type="file" name="profile_picture" id="profile_picture" accept="image/*" class="mt-1 border border-neutral-200 dark:border-neutral-600 w-full rounded-lg">
        </div>

        <div>
            <label for="current_profile_picture" class="form-label">Current Profile Picture</label>
            <img src="{{ Storage::url($user->profile_picture) }}" alt="{{ $user->name }}" class="border rounded-lg w-32 h-32 object-cover">
        </div>

        <div>
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-control border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" required autocomplete="username">
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
