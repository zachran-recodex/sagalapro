@extends('layouts.app')

@section('content')
    <!-- Page Title Start -->
    <div class="flex items-center justify-between flex-wrap gap-2 mb-6">
        <h4 class="text-default-900 text-lg font-medium">Contact</h4>

        <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
            <a href="#" class="text-sm font-medium text-default-700" aria-current="page">Contact</a>
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
                                <th class="px-6 py-3 text-start">Name</th>
                                <th class="px-6 py-3 text-start">Phone</th>
                                <th class="px-6 py-3 text-start">Email</th>
                                <th class="px-6 py-3 text-start">Service</th>
                                <th class="px-6 py-3 text-start">Message</th>
                                <th class="px-6 py-3 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($contacts as $contact)
                                <tr class="border-b border-gray-200 hover:bg-gray-50 transition">
                                    <td class="px-6 py-3">{{ $contact->name }}</td>
                                    <td class="px-6 py-3">{{ $contact->phone }}</td>
                                    <td class="px-6 py-3">{{ $contact->email }}</td>
                                    <td class="px-6 py-3">{{ $services[$contact->service] }}</td>
                                    <td class="px-6 py-3">{{ $contact->message }}</td>
                                    <td class="px-6 py-3">
                                        <a href="{{ route('admin.contacts.show', $contact) }}"
                                            class="px-2 py-1 bg-success/10 text-success text-xs rounded hover:bg-success/20 transition">
                                            Details
                                        </a>
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
    </div> <!-- end card-->
@endsection
