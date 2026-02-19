<nav class="bg-white sticky w-full z-20 top-0 start-0 border-b border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- Logo & Nama Sekolah -->
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/logo_pustek-removebg-preview.png')}}" class="w-16 h-16 md:w-20" alt="Logo Sekolah" />
            <div>
                <span class="text-2xl font-bold text-blue-600">Pustek Inside</span>
                <p class="text-sm text-gray-500 font-medium">SMK Pustek Serpong</p>
            </div>
        </a>

        <!-- Tombol hamburger (mobile) -->
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-blue-600 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        <!-- Menu -->
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">

                <!-- Home -->
                <li>
                    <a href="/" class="block py-2 px-3 font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 {{ request()->is('/') ? 'text-white bg-blue-700 md:bg-transparent md:text-blue-700' : 'text-gray-900 md:hover:text-blue-700' }}"
                        aria-current="{{ request()->is('/') ? 'page' : 'false' }}">Home</a>
                </li>

                <!-- Dropdown Bidang -->
                <li class="group">
                    <button type="button"
                        id="bidangButton"
                        data-dropdown-toggle="dropdownBidangDesktop"
                        data-collapse-toggle="collapseBidangMobile"
                        class="flex items-center justify-between w-full py-2 px-3 font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 {{ request()->is('bph*') || request()->is('sekbid*') ? 'text-white bg-blue-700 md:bg-transparent md:text-blue-700' : 'text-gray-900 md:hover:text-blue-700' }}">
                        Bidang
                        <svg class="w-2.5 h-2.5 ms-2.5 transition-transform duration-200 group-hover:rotate-180"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Mobile Accordion -->
                    <div id="collapseBidangMobile" class="hidden md:hidden">
                        <ul class="py-2 space-y-1 text-sm text-gray-700 border-t border-gray-200 mt-1">
                            <li><a href="/bph1" class="block px-8 py-2 hover:bg-gray-100">BPH</a></li>
                            <li><a href="/sekbid1" class="block px-8 py-2 hover:bg-gray-100">Sekbid 1</a></li>
                            <li><a href="/sekbid2" class="block px-8 py-2 hover:bg-gray-100">Sekbid 2</a></li>
                            <li><a href="/sekbid3" class="block px-8 py-2 hover:bg-gray-100">Sekbid 3</a></li>
                            <li><a href="/sekbid4" class="block px-8 py-2 hover:bg-gray-100">Sekbid 4</a></li>
                            <li><a href="/sekbid5" class="block px-8 py-2 hover:bg-gray-100">Sekbid 5</a></li>
                            <li><a href="/sekbid6" class="block px-8 py-2 hover:bg-gray-100">Sekbid 6</a></li>
                            <li><a href="/sekbid7" class="block px-8 py-2 hover:bg-gray-100">Sekbid 7</a></li>
                            <li><a href="/sekbid8" class="block px-8 py-2 hover:bg-gray-100">Sekbid 8</a></li>
                        </ul>
                    </div>

                    <!-- Desktop Dropdown -->
                    <div id="dropdownBidangDesktop" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 max-md:hidden md:absolute md:top-full md:left-0 md:mt-1">
                        <ul class="py-2 text-sm text-gray-700">
                            <li><a href="/bph1" class="block px-8 py-2 hover:bg-gray-100">BPH</a></li>
                            <li><a href="/sekbid1" class="block px-8 py-2 hover:bg-gray-100">Sekbid 1</a></li>
                            <li><a href="/sekbid2" class="block px-8 py-2 hover:bg-gray-100">Sekbid 2</a></li>
                            <li><a href="/sekbid3" class="block px-8 py-2 hover:bg-gray-100">Sekbid 3</a></li>
                            <li><a href="/sekbid4" class="block px-8 py-2 hover:bg-gray-100">Sekbid 4</a></li>
                            <li><a href="/sekbid5" class="block px-8 py-2 hover:bg-gray-100">Sekbid 5</a></li>
                            <li><a href="/sekbid6" class="block px-8 py-2 hover:bg-gray-100">Sekbid 6</a></li>
                            <li><a href="/sekbid7" class="block px-8 py-2 hover:bg-gray-100">Sekbid 7</a></li>
                            <li><a href="/sekbid8" class="block px-8 py-2 hover:bg-gray-100">Sekbid 8</a></li>
                        </ul>
                    </div>
                </li>

                <!-- Event -->
                <li>
                    <a href="/event" class="block py-2 px-3 font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 {{ request()->is('event*') ? 'text-white bg-blue-700 md:bg-transparent md:text-blue-700' : 'text-gray-900 md:hover:text-blue-700' }}">Event</a>
                </li>

                <!-- Dropdown Lainnya -->
                <li class="group">
                    <button type="button"
                        id="lainnyaButton"
                        data-dropdown-toggle="dropdownLainnyaDesktop"
                        data-collapse-toggle="collapseLainnyaMobile"
                        class="flex items-center justify-between w-full py-2 px-3 font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 {{ request()->is('ekskul*') || request()->is('pemilu*') ? 'text-white bg-blue-700 md:bg-transparent md:text-blue-700' : 'text-gray-900 md:hover:text-blue-700' }}">
                        Lainnya
                        <svg class="w-2.5 h-2.5 ms-2.5 transition-transform duration-200 group-hover:rotate-180"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Mobile Accordion -->
                    <div id="collapseLainnyaMobile" class="hidden md:hidden">
                        <ul class="py-2 space-y-1 text-sm text-gray-700 border-t border-gray-200 mt-1">
                            <li><a href="/ekskul" class="block px-8 py-2 hover:bg-gray-100">Ekstrakurikuler</a></li>
                            <li><a href="/pemilu" class="block px-8 py-2 hover:bg-gray-100">Pemilu</a></li>
                        </ul>
                    </div>

                    <!-- Desktop Dropdown -->
                    <div id="dropdownLainnyaDesktop" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 max-md:hidden md:absolute md:top-full md:left-0 md:mt-1">
                        <ul class="py-2 text-sm text-gray-700">
                            <li><a href="/ekskul" class="block px-4 py-2 hover:bg-gray-100">Ekstrakurikuler</a></li>
                            <li><a href="/pemilu" class="block px-4 py-2 hover:bg-gray-100">Pemilu</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>