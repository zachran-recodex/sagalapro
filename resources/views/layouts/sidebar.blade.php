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
                    <i class="i-solar-home-smile-bold-duotone text-2xl"></i>
                    Dashboard
                </a>
            </li>

            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('admin.settings.index') }}">
                    <i class="i-solar-home-smile-bold-duotone text-2xl"></i>
                    Settings
                </a>
            </li>

            <li class="px-5 py-2 text-sm font-medium text-default-600">Page</li>

            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('admin.hero_sections.index') }}">
                    <i class="i-solar-calendar-bold-duotone text-2xl"></i>
                    Hero Sections
                </a>
            </li>

            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('admin.services.index') }}">
                    <i class="i-solar-calendar-bold-duotone text-2xl"></i>
                    Services
                </a>
            </li>

            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('admin.fleets.index') }}">
                    <i class="i-solar-calendar-bold-duotone text-2xl"></i>
                    Fleets
                </a>
            </li>

            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('admin.partners.index') }}">
                    <i class="i-solar-calendar-bold-duotone text-2xl"></i>
                    Partners
                </a>
            </li>

            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('admin.blogs.index') }}">
                    <i class="i-solar-calendar-bold-duotone text-2xl"></i>
                    Blogs
                </a>
            </li>

            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('admin.faqs.index') }}">
                    <i class="i-solar-calendar-bold-duotone text-2xl"></i>
                    Faqs
                </a>
            </li>

            <li class="menu-item">
                <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5"
                    href="{{ route('admin.contacts.index') }}">
                    <i class="i-solar-calendar-bold-duotone text-2xl"></i>
                    Contacts
                </a>
            </li>

            <li class="px-5 py-2 text-sm font-medium text-default-600">Elements</li>

            <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 hs-accordion-active:bg-primary/10 hs-accordion-active:text-primary">
                    <i class="i-solar-box-minimalistic-bold-duotone text-2xl"></i>
                    <span class="menu-text"> Components </span>
                    <span
                        class="i-tabler-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></span>
                </a>

                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 space-y-2">
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-accordion.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Accordion
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-alerts.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Alert
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-avatars.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Avatars
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-buttons.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Buttons
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-badges.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Badges
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-breadcrumbs.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Breadcrumbs
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-cards.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Cards
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-collapse.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Collapse
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-dropdowns.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Dropdowns
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-progress.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Progress
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-spinners.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Spinners
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-skeleton.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Skeleton
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-ratio.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Ratio
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-modals.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Modals
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-offcanvas.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Offcanvas
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-popovers.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Popovers
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-tooltips.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Tooltips
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5"
                                href="ui-typography.html">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                Typography
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 hs-accordion-active:bg-primary/10 hs-accordion-active:text-primary">
                    <i class="i-solar-document-text-bold-duotone text-2xl"></i>
                    <span class="menu-text"> Forms </span>
                    <span
                        class="i-tabler-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></span>
                </a>

                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 space-y-2">
                        <li class="menu-item">
                            <a href="forms-inputs.html"
                                class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                <span class="menu-text">Inputs</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="forms-check-radio.html"
                                class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                <span class="menu-text">Checkbox & Radio</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="forms-masks.html"
                                class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                <span class="menu-text">Input Masks</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="forms-file-upload.html"
                                class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                <span class="menu-text">File Upload</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="forms-editor.html"
                                class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                <span class="menu-text">Editor</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="forms-validation.html"
                                class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                <span class="menu-text">Validation</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="forms-layout.html"
                                class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                <span class="menu-text">Form Layout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="maps-vector.html"
                    class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5">
                    <i class="i-solar-map-point-wave-bold-duotone text-2xl"></i>
                    <span class="menu-text"> Maps </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="tables-basic.html"
                    class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 hs-accordion-active:bg-primary/10 hs-accordion-active:text-primary">
                    <i class="i-solar-server-minimalistic-bold-duotone text-2xl"></i>
                    <span class="menu-text"> Tables </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="charts-apex.html"
                    class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 hs-accordion-active:bg-primary/10 hs-accordion-active:text-primary">
                    <i class="i-solar-chart-2-bold-duotone text-2xl"></i>
                    <span class="menu-text"> Chart </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="icons.html"
                    class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5">
                    <i class="i-solar-pallete-2-bold-duotone text-2xl"></i>
                    <span class="menu-text"> Icons </span>
                </a>
            </li>

            <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 hs-accordion-active:bg-primary/10 hs-accordion-active:text-primary">
                    <span class="i-solar-list-bold-duotone text-2xl"></span>
                    <span class="menu-text"> Level </span>
                    <span
                        class="i-tabler-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></span>
                </a>

                <div id="sidenavLevel"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 space-y-2">
                        <li class="menu-item">
                            <a href="javascript: void(0)"
                                class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                <span class="menu-text">Item 1</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="javascript: void(0)"
                                class="flex items-center gap-x-3.5 rounded-md px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-900/5">
                                <i class="i-tabler-circle-filled scale-[.25] text-lg opacity-75"></i>
                                <span class="menu-text">Item 2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-900/5 hs-accordion-active:bg-primary/10 hs-accordion-active:text-primary">
                    <span class="i-solar-verified-check-bold-duotone text-2xl"></span>
                    <span class="menu-text"> Badge Items </span>
                    <span
                        class="ms-auto inline-flex items-center gap-x-1.5 py-0.5 px-2 rounded-md font-semibold text-xs bg-gray-800 text-white">Hot</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- End Sidebar -->
