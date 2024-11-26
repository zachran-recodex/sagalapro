@extends('layouts.app')

@section('content')
    <!-- Page Title Start -->
    <div class="flex items-center md:justify-between flex-wrap gap-2 mb-6">
        <h4 class="text-default-900 text-lg font-medium mb-2">Dashboard</h4>
    </div>
    <!-- Page Title End -->

    <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-6 mb-6">
        <div class="card group overflow-hidden transition-all duration-500 hover:shadow-lg hover:-translate-y-0.5">
            <div class="card-body">
                <a href="{{ route('admin.hero-sections.index') }}" class="flex items-center justify-between">
                    <p class="text-2xl">Hero Sections</p>

                    <div class="rounded-lg flex justify-center items-center size-16 bg-sagala-500/20 text-sagala-500">
                        <i class="fa-solid fa-film text-4xl transition-all group-hover:fill-1"></i>
                    </div>
                </a>
            </div>
        </div>

        <div class="card group overflow-hidden transition-all duration-500 hover:shadow-lg hover:-translate-y-0.5">
            <div class="card-body">
                <a href="{{ route('admin.services.index') }}" class="flex items-center justify-between">
                    <p class="text-2xl">Services</p>

                    <div class="rounded-lg flex justify-center items-center size-16 bg-sagala-500/20 text-sagala-500">
                        <i class="fa-solid fa-wrench text-4xl transition-all group-hover:fill-1"></i>
                    </div>
                </a>
            </div>
        </div>

        <div class="card group overflow-hidden transition-all duration-500 hover:shadow-lg hover:-translate-y-0.5">
            <div class="card-body">
                <a href="{{ route('admin.fleets.index') }}" class="flex items-center justify-between">
                    <p class="text-2xl">Fleets</p>

                    <div class="rounded-lg flex justify-center items-center size-16 bg-sagala-500/20 text-sagala-500">
                        <i class="fa-solid fa-helicopter text-4xl transition-all group-hover:fill-1"></i>
                    </div>
                </a>
            </div>
        </div>

        <div class="card group overflow-hidden transition-all duration-500 hover:shadow-lg hover:-translate-y-0.5">
            <div class="card-body">
                <a href="{{ route('admin.partners.index') }}" class="flex items-center justify-between">
                    <p class="text-2xl">Partners</p>

                    <div class="rounded-lg flex justify-center items-center size-16 bg-sagala-500/20 text-sagala-500">
                        <i class="fa-solid fa-handshake text-4xl transition-all group-hover:fill-1"></i>
                    </div>
                </a>
            </div>
        </div>

        <div class="card group overflow-hidden transition-all duration-500 hover:shadow-lg hover:-translate-y-0.5">
            <div class="card-body">
                <a href="{{ route('admin.blogs.index') }}" class="flex items-center justify-between">
                    <p class="text-2xl">Blogs</p>

                    <div class="rounded-lg flex justify-center items-center size-16 bg-sagala-500/20 text-sagala-500">
                        <i class="fa-solid fa-blog text-4xl transition-all group-hover:fill-1"></i>
                    </div>
                </a>
            </div>
        </div>

        <div class="card group overflow-hidden transition-all duration-500 hover:shadow-lg hover:-translate-y-0.5">
            <div class="card-body">
                <a href="{{ route('admin.faqs.index') }}" class="flex items-center justify-between">
                    <p class="text-2xl">Faqs</p>

                    <div class="rounded-lg flex justify-center items-center size-16 bg-sagala-500/20 text-sagala-500">
                        <i class="fa-solid fa-clipboard-question text-4xl transition-all group-hover:fill-1"></i>
                    </div>
                </a>
            </div>
        </div>

        <div class="card group overflow-hidden transition-all duration-500 hover:shadow-lg hover:-translate-y-0.5">
            <div class="card-body">
                <a href="{{ route('admin.contacts.index') }}" class="flex items-center justify-between">
                    <p class="text-2xl">Contacts</p>

                    <div class="rounded-lg flex justify-center items-center size-16 bg-sagala-500/20 text-sagala-500">
                        <i class="fa-solid fa-address-card text-4xl transition-all group-hover:fill-1"></i>
                    </div>
                </a>
            </div>
        </div>

        <div class="card group overflow-hidden transition-all duration-500 hover:shadow-lg hover:-translate-y-0.5">
            <div class="card-body">
                <a href="{{ route('admin.settings.index') }}" class="flex items-center justify-between">
                    <p class="text-2xl">Settings</p>

                    <div class="rounded-lg flex justify-center items-center size-16 bg-sagala-500/20 text-sagala-500">
                        <i class="fa-solid fa-gear text-4xl transition-all group-hover:fill-1"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
