@extends('layouts.app')

@section('content')
    <!-- Page Title Start -->
    <div class="flex items-center justify-between flex-wrap gap-2 mb-6">
        <h4 class="text-default-900 text-lg font-medium">Contacts</h4>
    </div>
    <!-- Page Title End -->

    <div class="card overflow-hidden">
        <div class="overflow-x-auto custom-scroll">
            <div class="min-w-full inline-block align-middle whitespace-nowrap">
                <div class="overflow-hidden">
                    <table class="min-w-full table-auto border-collapse">
                        <thead class="bg-light/40 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-3 text-start">Name</th>
                                <th class="px-6 py-3 text-start">Phone</th>
                                <th class="px-6 py-3 text-start">Email</th>
                                <th class="px-6 py-3 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($contacts as $contact)
                                <tr class="border-b border-gray-200 hover:bg-gray-50 transition">
                                    <td class="px-6 py-3">{{ $contact->name }}</td>
                                    <td class="px-6 py-3">{{ $contact->phone }}</td>
                                    <td class="px-6 py-3">{{ $contact->email }}</td>
                                    <td class="px-6 py-3 flex justify-center space-x-2">
                                        <!-- Button to show details -->
                                        <a href="{{ route('admin.contacts.show', $contact) }}"
                                            class="px-2 py-1 bg-green-500 text-white text-xs rounded hover:bg-green-600 transition">
                                            Details
                                        </a>

                                        <!-- Delete button -->
                                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this contact?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-2 py-1 bg-red-500 text-white text-xs rounded hover:bg-red-600 transition">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-3 text-center text-gray-500">No Data Available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mt-4 px-4">
            {{ $contacts->links() }}
        </div>
    </div>
@endsection
