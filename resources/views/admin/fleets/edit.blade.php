@extends('layouts.app')

@section('content')
    <!-- Page Title Start -->
    <div class="flex items-center justify-between flex-wrap gap-2 mb-6">
        <h4 class="text-default-900 text-lg font-medium">Edit Fleet</h4>

        <a href="{{ route('admin.fleets.index') }}"
            class="md:flex bg-sagala-500 hover:bg-sagala-600 px-6 py-2 rounded-md items-center gap-3 text-sm font-semibold">
            <p class="text-sm text-white font-medium text-default-700">BACK</p>
        </a>
    </div>
    <!-- Page Title End -->

    <div class="card overflow-hidden">
        <div class="overflow-x-auto custom-scroll">
            <div class="min-w-full inline-block align-middle whitespace-nowrap">
                <div class="overflow-hidden">
                    <form action="{{ route('admin.fleets.update', $fleet) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="p-6">
                            <div class="mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text" name="title" id="title"
                                    value="{{ old('title', $fleet->title) }}"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200"
                                    required oninput="updateSlug()">
                                @error('title')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                                <input type="text" name="slug" id="slug" value="{{ old('slug', $fleet->slug) }}"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200"
                                    required readonly>
                                @error('slug')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                <input type="file" name="image" id="image" accept="image/*"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200">
                                <p class="text-gray-500 text-sm mt-1">Current Image: <img
                                        src="{{ Storage::url($fleet->image) }}" alt="{{ $fleet->title }}"
                                        class="mt-2 w-20 h-20 object-cover"></p>
                                @error('image')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="gltf" class="block text-sm font-medium text-gray-700">GLTF File path</label>
                                <input type="text" name="gltf" id="gltf" value="{{ old('gltf', $fleet->gltf) }}"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200">
                                @error('gltf')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea name="description" id="description" rows="4"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200" required>{{ old('description', $fleet->description) }}</textarea>
                                @error('description')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Practice Range -->
                            <div class="mb-4">
                                <label for="practice_range" class="block text-sm font-medium text-gray-700">Practice
                                    Range</label>
                                <input type="text" name="practice_range" id="practice_range"
                                    value="{{ old('practice_range', $fleet->practice_range) }}"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200"
                                    required>
                                @error('practice_range')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Cruise Speed -->
                            <div class="mb-4">
                                <label for="cruise_speed" class="block text-sm font-medium text-gray-700">Cruise
                                    Speed</label>
                                <input type="text" name="cruise_speed" id="cruise_speed"
                                    value="{{ old('cruise_speed', $fleet->cruise_speed) }}"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200"
                                    required>
                                @error('cruise_speed')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Maximum Speed -->
                            <div class="mb-4">
                                <label for="maximum_speed" class="block text-sm font-medium text-gray-700">Maximum
                                    Speed</label>
                                <input type="text" name="maximum_speed" id="maximum_speed"
                                    value="{{ old('maximum_speed', $fleet->maximum_speed) }}"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200"
                                    required>
                                @error('maximum_speed')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Normal Takeoff Weight -->
                            <div class="mb-4">
                                <label for="normal_takeoff_weight" class="block text-sm font-medium text-gray-700">Normal
                                    Takeoff Weight</label>
                                <input type="text" name="normal_takeoff_weight" id="normal_takeoff_weight"
                                    value="{{ old('normal_takeoff_weight', $fleet->normal_takeoff_weight) }}"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200"
                                    required>
                                @error('normal_takeoff_weight')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Max Takeoff Weight -->
                            <div class="mb-4">
                                <label for="max_takeoff_weight" class="block text-sm font-medium text-gray-700">Max Takeoff
                                    Weight</label>
                                <input type="text" name="max_takeoff_weight" id="max_takeoff_weight"
                                    value="{{ old('max_takeoff_weight', $fleet->max_takeoff_weight) }}"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200"
                                    required>
                                @error('max_takeoff_weight')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                <select name="status" id="status"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200"
                                    required>
                                    <option value="1"
                                        {{ old('status', $fleet->status) == 'true' ? 'selected' : '' }}>
                                        Active
                                    </option>
                                    <option value="0"
                                        {{ old('status', $fleet->status) == 'false' ? 'selected' : '' }}>
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

    <script>
        function updateSlug() {
            const title = document.getElementById('title').value;
            const slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
            document.getElementById('slug').value = slug;
        }
    </script>
@endsection
