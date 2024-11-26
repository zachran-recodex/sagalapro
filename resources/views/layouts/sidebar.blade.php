<!-- Start Sidebar -->
<aside id="app-menu"
    class="hs-overlay fixed inset-y-0 start-0 z-60 hidden w-sidenav min-w-sidenav bg-white border-e border-default-200 overflow-y-auto -translate-x-full transform transition-all duration-300 hs-overlay-open:translate-x-0 lg:bottom-0 lg:end-auto lg:z-30 lg:block lg:translate-x-0 rtl:translate-x-full rtl:hs-overlay-open:translate-x-0 rtl:lg:translate-x-0 print:hidden [--body-scroll:true] [--overlay-backdrop:true] lg:[--overlay-backdrop:false]">

    <!-- Sidenav Logo -->
    <div class="sticky top-0 flex h-topbar items-center justify-center px-6 border-b border-default-200 .bg-primary/5">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo-sagala-second.png') }}" alt="logo" class="flex h-10">
        </a>
    </div>

    <div class="p-4" data-simplebar>
        <ul class="admin-menu hs-accordion-group flex w-full flex-col gap-1.5">
            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('dashboard') }}">
                    <i class="fa-solid fa-house text-2xl"></i>
                    Dashboard
                </a>
            </li>

            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('admin.settings.index') }}">
                    <i class="fa-solid fa-gear text-2xl"></i>
                    Settings
                </a>
            </li>

            <li class="px-5 py-2 text-sm font-medium text-default-600">Page</li>

            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('admin.hero-sections.index') }}">
                    <i class="fa-solid fa-film text-2xl"></i>
                    Hero Sections
                </a>
            </li>

            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('admin.services.index') }}">
                    <i class="fa-solid fa-wrench text-2xl"></i>
                    Services
                </a>
            </li>

            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('admin.fleets.index') }}">
                    <i class="fa-solid fa-helicopter text-2xl"></i>
                    Fleets
                </a>
            </li>

            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('admin.partners.index') }}">
                    <i class="fa-solid fa-handshake text-2xl"></i>
                    Partners
                </a>
            </li>

            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('admin.blogs.index') }}">
                    <i class="fa-solid fa-blog text-2xl"></i>
                    Blogs
                </a>
            </li>

            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('admin.faqs.index') }}">
                    <i class="fa-solid fa-clipboard-question text-2xl"></i>
                    Faqs
                </a>
            </li>

            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('admin.contacts.index') }}">
                    <i class="fa-solid fa-address-card text-2xl"></i>
                    Contacts
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- End Sidebar -->
