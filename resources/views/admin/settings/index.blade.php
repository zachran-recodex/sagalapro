@extends('layouts.app')

@section('content')
    <!-- Page Title Start -->
    <div class="flex items-center justify-between flex-wrap gap-2 mb-6">
        <h4 class="text-default-900 text-lg font-medium">Settings</h4>
    </div>
    <!-- Page Title End -->

    <div class="card overflow-hidden">
        <div class="overflow-x-auto custom-scroll">
            <div class="min-w-full inline-block align-middle whitespace-nowrap">
                <div class="overflow-hidden">
                    <form action="{{ route('admin.settings.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="p-6">
                            <div class="flex mb-4 space-x-4">
                                <div class="flex-1">
                                    <label for="logo" class="block text-gray-700">Logo</label>
                                    <input type="file" name="logo" id="logo" class="mt-1 block w-full"
                                        accept="image/*">
                                    @error('logo')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                    @if ($setting && $setting->logo)
                                        <img src="{{ Storage::url($setting->logo) }}" alt="Logo" class="mt-2 w-32">
                                    @endif
                                </div>

                                <div class="flex-1">
                                    <label for="favicon" class="block text-gray-700">Favicon</label>
                                    <input type="file" name="favicon" id="favicon" class="mt-1 block w-full"
                                        accept="image/*">
                                    @error('favicon')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                    @if ($setting && $setting->favicon)
                                        <img src="{{ Storage::url($setting->favicon) }}" alt="Favicon" class="mt-2 w-32">
                                    @endif
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <label for="phone_one" class="block text-gray-700">Phone One</label>
                                    <input type="text" name="phone_one" id="phone_one"
                                        value="{{ old('phone_one', $setting->phone_one ?? '') }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md">
                                    @error('phone_one')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="phone_two" class="block text-gray-700">Phone Two</label>
                                    <input type="text" name="phone_two" id="phone_two"
                                        value="{{ old('phone_two', $setting->phone_two ?? '') }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md">
                                    @error('phone_two')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <label for="email_one" class="block text-gray-700">Email One</label>
                                    <input type="email" name="email_one" id="email_one"
                                        value="{{ old('email_one', $setting->email_one ?? '') }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md">
                                    @error('email_one')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="email_two" class="block text-gray-700">Email Two</label>
                                    <input type="email" name="email_two" id="email_two"
                                        value="{{ old('email_two', $setting->email_two ?? '') }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md">
                                    @error('email_two')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="address" class="block text-gray-700">Address</label>
                                <input type="text" name="address" id="address"
                                    value="{{ old('address', $setting->address ?? '') }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md">
                                @error('address')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="operational_address" class="block text-gray-700">Operational Address</label>
                                <input type="text" name="operational_address" id="operational_address"
                                    value="{{ old('operational_address', $setting->operational_address ?? '') }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md">
                                @error('operational_address')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="footer_text" class="block text-gray-700">Footer Text</label>
                                <input type="text" name="footer_text" id="footer_text"
                                    value="{{ old('footer_text', $setting->footer_text ?? '') }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md">
                                @error('footer_text')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex justify-end">
                                <button type="submit"
                                    class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition">
                                    UPDATE
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
