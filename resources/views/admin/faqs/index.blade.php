@extends('layouts.app')

@section('content')
    <!-- Page Title Start -->
    <div class="flex items-center justify-between flex-wrap gap-2 mb-6">
        <h4 class="text-default-900 text-lg font-medium">faqs</h4>

        <div
            class="md:flex bg-sagala-500 hover:bg-sagala-600 px-6 py-2 rounded-md hidden items-center gap-3 text-sm font-semibold">
            <a href="{{ route('admin.faqs.create') }}" class="text-sm text-white font-medium text-default-700">ADD</a>
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
                                <th class="px-6 py-3 text-start">Status</th>
                                <th class="px-6 py-3 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($faqs as $faq)
                                <tr class="border-b border-gray-200 hover:bg-gray-50 transition">
                                    <td class="px-6 py-3">{{ $faq->title }}</td>
                                    <td class="px-6 py-3">{{ ucfirst($faq->status) }}</td>
                                    <td class="px-6 py-3 text-center">
                                        <a href="{{ route('admin.faqs.edit', $faq) }}"
                                            class="me-3 px-2 py-1 bg-warning text-white text-xs rounded hover:bg-warning/20 transition">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-2 py-1 bg-danger text-white text-xs rounded hover:bg-danger/20 transition"
                                                onclick="return confirm('Are you sure you want to delete this faq?');">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-3 text-center text-gray-500">No faqs Available
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
