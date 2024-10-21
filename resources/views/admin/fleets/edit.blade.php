@extends('layouts.app')

@section('content')
    <!-- Page Title Start -->
    <div class="flex items-center justify-between flex-wrap gap-2 mb-6">
        <h4 class="text-default-900 text-lg font-medium">Edit fleet</h4>

        <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
            <a href="{{ route('admin.fleets.index') }}" class="text-sm font-medium text-default-700">Back to fleets</a>
        </div>
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
                                <label for="gltf" class="block text-sm font-medium text-gray-700">3D Model
                                    (.gltf)</label>
                                <input type="file" name="gltf" id="gltf" accept=".gltf"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200">
                                @if ($fleet->gltf)
                                    <p class="text-gray-500 text-sm mt-1">Current 3D Model: <a
                                            href="{{ Storage::url($fleet->gltf) }}" class="text-indigo-600">Download 3D
                                            Model</a></p>
                                @endif
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

                            <div class="mb-4">
                                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                <select name="status" id="status"
                                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200"
                                    required>
                                    <option value="active" {{ $fleet->status === 'active' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="inactive" {{ $fleet->status === 'inactive' ? 'selected' : '' }}>
                                        Inactive</option>
                                </select>
                                @error('status')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex justify-end">
                                <button type="submit"
                                    class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">
                                    Update fleet
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
