@extends('layouts.app')

@section('content')
    <!-- Page Title Start -->
    <div class="flex items-center justify-between flex-wrap gap-2 mb-6">
        <h4 class="text-default-900 text-lg font-medium">Detail Contact</h4>

        <a href="{{ route('admin.contacts.index') }}"
            class="md:flex bg-sagala-500 hover:bg-sagala-600 px-6 py-2 rounded-md items-center gap-3 text-sm font-semibold">
            <p class="text-sm text-white font-medium text-default-700">BACK</p>
        </a>
    </div>
    <!-- Page Title End -->

    <!-- Contact Details Start -->
    <div class="card p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <h5 class="text-default-700 text-md font-semibold">Name</h5>
                <p class="text-gray-600">{{ $contact->name }}</p>
            </div>
            <div>
                <h5 class="text-default-700 text-md font-semibold">Phone</h5>
                <p class="text-gray-600">{{ $contact->phone }}</p>
            </div>
            <div>
                <h5 class="text-default-700 text-md font-semibold">Email</h5>
                <p class="text-gray-600">{{ $contact->email }}</p>
            </div>
            <div>
                <h5 class="text-default-700 text-md font-semibold">Service</h5>
                <p class="text-gray-600">{{ $services[$contact->service] }}</p>
            </div>
            <div class="md:col-span-2">
                <h5 class="text-default-700 text-md font-semibold">Message</h5>
                <p class="text-gray-600">{{ $contact->message }}</p>
            </div>
        </div>

        <!-- Contact Buttons Start -->
        <div class="mt-6 flex flex-wrap gap-4">
            <!-- Call Button -->
            <a href="tel:{{ $contact->phone }}"
                class="px-4 py-2 bg-sagala-600 text-white rounded hover:bg-sagala-700 transition">
                Call
            </a>

            <!-- Email Button -->
            <a href="mailto:{{ $contact->email }}"
                class="px-4 py-2 bg-sagala-600 text-white rounded hover:bg-sagala-700 transition">
                Email
            </a>

            <!-- WhatsApp Button -->
            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact->phone) }}" target="_blank"
                class="px-4 py-2 bg-sagala-600 text-white rounded hover:bg-sagala-700 transition">
                WhatsApp
            </a>
        </div>
        <!-- Contact Buttons End -->

    </div>
    <!-- Contact Details End -->
@endsection
