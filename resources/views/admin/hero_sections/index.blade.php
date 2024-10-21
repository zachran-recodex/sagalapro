@extends('layouts.app')

@section('content')
    <!-- Page Title Start -->
    <div class="flex items-center justify-between flex-wrap gap-2 mb-6">
        <h4 class="text-default-900 text-lg font-medium">hero_sections</h4>

        <div class="md:flex bg-info px-6 py-2 rounded-md hidden items-center gap-3 text-sm font-semibold">
            <a href="{{ route('admin.hero_sections.create') }}" class="text-sm text-white font-medium text-default-700">Add
                new Hero Section
            </a>
        </div>
    </div>
    <!-- Page Title End -->

    <div class="card overflow-hidden">
        <div class="overflow-x-auto custom-scroll">
            <div class="min-w-full inline-block align-middle whitespace-nowrap">
                <div class="overflow-hidden">
                    <table class="min-w-full table-auto border-collapse">
                        <thead class="bg-light/40 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-3 text-start">Title</th>
                                <th class="px-6 py-3 text-start">Image</th>
                                <th class="px-6 py-3 text-start">Status</th>
                                <th class="px-6 py-3 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($hero_sections as $hero_section)
                                <tr class="border-b border-gray-200 hover:bg-gray-50 transition">
                                    <td class="px-6 py-3">{{ $hero_section->title }}</td>
                                    <td class="px-6 py-3">
                                        <img src="{{ Storage::url($hero_section->image) }}" alt="{{ $hero_section->title }}"
                                            class="w-16 h-16 object-cover">
                                    </td>
                                    <td class="px-6 py-3">{{ ucfirst($hero_section->status) }}</td>
                                    <td class="px-6 py-3 text-center">
                                        <a href="{{ route('admin.hero_sections.edit', $hero_section) }}"
                                            class="me-3 px-2 py-1 bg-warning text-white text-xs rounded hover:bg-warning/20 transition">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.hero_sections.destroy', $hero_section) }}"
                                            method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-2 py-1 bg-danger text-white text-xs rounded hover:bg-danger/20 transition"
                                                onclick="return confirm('Are you sure you want to delete this hero_section?');">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-3 text-center text-gray-500">No hero_sections
                                        Available
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end card-->
@endsection
