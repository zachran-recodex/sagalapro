@extends('layouts.app')

@section('content')
    <!-- Page Title Start -->
    <div class="flex items-center justify-between flex-wrap gap-2 mb-6">
        <h4 class="text-default-900 text-lg font-medium">Edit Faq</h4>

        <a href="{{ route('admin.faqs.index') }}"
            class="md:flex bg-sagala-500 hover:bg-sagala-600 px-6 py-2 rounded-md items-center gap-3 text-sm font-semibold">
            <p class="text-sm text-white font-medium text-default-700">BACK</p>
        </a>
    </div>
    <!-- Page Title End -->

    <div class="card overflow-hidden">
        <div class="overflow-x-auto custom-scroll">
            <div class="min-w-full inline-block align-middle whitespace-nowrap">
                <div class="overflow-hidden">
                    <form action="{{ route('admin.faqs.update', $faq) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="p-6">
                            <div class="mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text" name="title" id="title" value="{{ old('title', $faq->title) }}"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200"
                                    required>
                                @error('title')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea name="description" id="description" rows="4"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200" required>{{ old('description', $faq->description) }}</textarea>
                                @error('description')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                <select name="status" id="status"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200"
                                    required>
                                    <option value="1" {{ old('status', $faq->status) == 'true' ? 'selected' : '' }}>
                                        Active
                                    </option>
                                    <option value="0" {{ old('status', $faq->status) == 'false' ? 'selected' : '' }}>
                                        Not Active
                                    </option>
                                </select>
                                @error('status')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
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
