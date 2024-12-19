<div class="navbar-header border-b border-neutral-200 dark:border-neutral-600">
    <div class="flex items-center justify-between">
        <div class="col-auto">
            <div class="flex flex-wrap items-center gap-[16px]">
                <button type="button" class="sidebar-toggle">
                    <iconify-icon icon="heroicons:bars-3-solid" class="icon non-active"></iconify-icon>
                    <iconify-icon icon="iconoir:arrow-right" class="icon active"></iconify-icon>
                </button>
                <button type="button" class="sidebar-mobile-toggle">
                    <iconify-icon icon="heroicons:bars-3-solid" class="icon"></iconify-icon>
                </button>
                <form class="navbar-search">
                    <input type="text" name="search" placeholder="Search">
                    <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
                </form>

                <!-- <span class="max-w-[244px] w-full p-6 h-3 bg-red-600 text-white flex items-center justify-center rounded-[50px]">tesdgxt</span> -->

            </div>
        </div>
        <div class="col-auto">
            <div class="flex flex-wrap items-center gap-3">
                <button type="button" id="theme-toggle" class="w-10 h-10 bg-neutral-200 dark:bg-neutral-700 dark:text-white rounded-full flex justify-center items-center">
                    <span id="theme-toggle-dark-icon" class="hidden"><i class="ri-sun-line"></i></span>
                    <span id="theme-toggle-light-icon" class="hidden"><i class="ri-moon-line"></i></span>
                </button>

                <!-- Notification Start  -->
                <button data-dropdown-toggle="dropdownNotification" class="has-indicator w-10 h-10 bg-neutral-200 dark:bg-neutral-700 rounded-full flex justify-center items-center" type="button">
                    <iconify-icon icon="iconoir:bell" class="text-neutral-900 dark:text-white text-xl"></iconify-icon>
                </button>
                <div id="dropdownNotification" class="z-10 hidden bg-white dark:bg-neutral-700 rounded-2xl overflow-hidden shadow-lg max-w-[394px] w-full">
                    <div class="py-3 px-4 rounded-lg bg-primary-50 dark:bg-primary-600/25 m-4 flex items-center justify-between gap-2">
                        <h6 class="text-lg text-neutral-900 font-semibold mb-0">Notification</h6>
                        <span class="w-10 h-10 bg-white dark:bg-neutral-600 text-primary-600 dark:text-white font-bold flex justify-center items-center rounded-full">05</span>
                    </div>
                    <div class="scroll-sm !border-t-0">
                        <div class="max-h-[400px] overflow-y-auto">
                            <a href="javascript:void(0)" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 justify-between gap-1">
                                <div class="flex items-center gap-3">
                                    <div class="flex-shrink-0 relative w-11 h-11 bg-success-200 dark:bg-success-600/25 text-success-600 flex justify-center items-center rounded-full">
                                        <iconify-icon icon="bitcoin-icons:verify-outline" class="text-2xl"></iconify-icon>
                                    </div>
                                    <div>
                                        <h6 class="text-sm fw-semibold mb-1">Congratulations</h6>
                                        <p class="mb-0 text-sm line-clamp-1">Your profile has been Verified. Your profile has been Verified</p>
                                    </div>
                                </div>
                                <div class="shrink-0">
                                    <span class="text-sm text-neutral-500">23 Mins ago</span>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 justify-between gap-1">
                                <div class="flex items-center gap-3">
                                    <div class="flex-shrink-0 relative">
                                        <img class="rounded-full w-11 h-11" src="{{ asset('dashboard/images/notification/profile-4.png') }}" alt="Joseph image">
                                    </div>
                                    <div>
                                        <h6 class="text-sm fw-semibold mb-1">Ronald Richards</h6>
                                        <p class="mb-0 text-sm line-clamp-1">You can stitch between artboards</p>
                                    </div>
                                </div>
                                <div class="shrink-0">
                                    <span class="text-sm text-neutral-500">23 Mins ago</span>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 justify-between gap-1">
                                <div class="flex items-center gap-3">
                                    <div class="flex-shrink-0 relative w-11 h-11 bg-primary-100 dark:bg-primary-600/25 text-primary-600 flex justify-center items-center rounded-full">
                                        AM
                                    </div>
                                    <div>
                                        <h6 class="text-sm fw-semibold mb-1">Arlene McCoy</h6>
                                        <p class="mb-0 text-sm line-clamp-1">Invite you to prototyping</p>
                                    </div>
                                </div>
                                <div class="shrink-0">
                                    <span class="text-sm text-neutral-500">23 Mins ago</span>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 justify-between gap-1">
                                <div class="flex items-center gap-3">
                                    <div class="flex-shrink-0 relative">
                                        <img class="rounded-full w-11 h-11" src="{{ asset('dashboard/images/notification/profile-6.png') }}" alt="Joseph image">
                                    </div>
                                    <div>
                                        <h6 class="text-sm fw-semibold mb-1">Annette Black</h6>
                                        <p class="mb-0 text-sm line-clamp-1">Invite you to prototyping</p>
                                    </div>
                                </div>
                                <div class="shrink-0">
                                    <span class="text-sm text-neutral-500">23 Mins ago</span>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 justify-between gap-1">
                                <div class="flex items-center gap-3">
                                    <div class="flex-shrink-0 relative w-11 h-11 bg-primary-100 dark:bg-primary-600/25 text-primary-600 flex justify-center items-center rounded-full">
                                        DR
                                    </div>
                                    <div>
                                        <h6 class="text-sm fw-semibold mb-1">Darlene Robertson</h6>
                                        <p class="mb-0 text-sm line-clamp-1">Invite you to prototyping</p>
                                    </div>
                                </div>
                                <div class="shrink-0">
                                    <span class="text-sm text-neutral-500">23 Mins ago</span>
                                </div>
                            </a>
                        </div>

                        <div class="text-center py-3 px-4">
                            <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 font-semibold hover:underline text-center">See All Notification</a>
                        </div>
                    </div>
                </div>
                <!-- Notification End  -->

                <button data-dropdown-toggle="dropdownProfile" class="flex justify-center items-center rounded-full" type="button">
                    <img src="{{ Storage::url(Auth::user()->profile_picture) }}" alt="image" class="w-10 h-10 object-fit-cover rounded-full">
                </button>
                <div id="dropdownProfile" class="z-10 hidden bg-white dark:bg-neutral-700 rounded-lg shadow-lg dropdown-menu-sm p-3">
                    <div class="py-3 px-4 rounded-lg bg-primary-50 dark:bg-primary-600/25 mb-4 flex items-center justify-between gap-2">
                        <div>
                            <h6 class="text-lg text-neutral-900 font-semibold mb-0">{{ Auth::user()->name }}</h6>
                            <span class="text-neutral-500 capitalize">{{ Auth::user()->getRoleNames()->first() }}</span>
                        </div>
                    </div>

                    <div class="max-h-[400px] overflow-y-auto scroll-sm pe-2">
                        <ul class="flex flex-col">
                            <li>
                                <a class="text-black px-0 py-2 hover:text-primary-600 flex items-center gap-4" href="{{ route('admin.profile.edit') }}">
                                    <iconify-icon icon="solar:user-linear" class="icon text-xl"></iconify-icon>My Profile</a>
                            </li>
                            <li>
                                <a class="text-black px-0 py-2 hover:text-primary-600 flex items-center gap-4" href="">
                                    <iconify-icon icon="tabler:message-check" class="icon text-xl"></iconify-icon>Inbox</a>
                            </li>
                            <li>
                                <a class="text-black px-0 py-2 hover:text-primary-600 flex items-center gap-4" href="{{ route('admin.settings.index') }}">
                                    <iconify-icon icon="icon-park-outline:setting-two" class="icon text-xl"></iconify-icon>Setting</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a class="text-black px-0 py-2 hover:text-danger-600 flex items-center gap-4" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                        <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon>
                                        Log Out
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
