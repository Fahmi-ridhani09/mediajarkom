<nav class="bg-light-brown" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="images/logo.png" alt="Your">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-dark-brown text-white", Default: "text-light-brown hover:bg-sandy-brown hover:text-dark-brown" -->
                        <x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link>
                    </div>

                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <a href="/login"
                        class="ml-4 inline-flex items-center rounded-md bg-sandy-brown px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-dark-brown focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-light-brown">
                        Halaman Guru
                    </a>

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button" @click="isOpen = !isOpen"
                                class="relative flex max-w-xs items-center rounded-full bg-light-brown text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-light-brown"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="images/avatar.png" alt="">
                            </button>
                        </div>

                        <!-- Dropdown menu, show/hide based on menu state. -->
                        <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75 transform"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="user-menu-item-0">{{ Auth::user()->nama }}</a>
                            <a href="{{ route('logout_proses') }}" class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-2">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen"
                    class="relative inline-flex items-center justify-center rounded-md bg-light-brown p-2 text-gray-400 hover:bg-sandy-brown hover:text-dark-brown focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-light-brown"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-dark-brown text-white", Default: "text-light-brown hover:bg-sandy-brown hover:text-dark-brown" -->
            <a href="/" class="bg-dark-brown text-white block rounded-md px-3 py-2 text-base font-medium"
                aria-current="page">Beranda</a>
            <a href="/materijaringan"
                class="text-light-brown hover:bg-sandy-brown hover:text-dark-brown block rounded-md px-3 py-2 text-base font-medium">Materi</a>
            <a href="/about"
                class="text-light-brown hover:bg-sandy-brown hover:text-dark-brown block rounded-md px-3 py-2 text-base font-medium">About</a>
            <a href="/evaluasi"
                class="text-light-brown hover:bg-sandy-brown hover:text-dark-brown block rounded-md px-3 py-2 text-base font-medium">Evaluasi</a>
        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
            <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="images/avatar.png" alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium leading-none text-white">{{ Auth::user()->nama }}</div>
                </div>
            </div>
            <div class="mt-3 space-y-1 px-2">
                <a href="{{ route('logout_proses') }}"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-sandy-brown hover:text-dark-brown">Logout</a>
            </div>
        </div>
    </div>
</nav>
