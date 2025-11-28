<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <!-- Logo & Nama Sekolah -->
        <div class="flex items-center space-x-3">
            <img src="assets/logo_pustek-removebg-preview.png" alt="Logo Pustek" class="w-16 h-16 md:w-20">
            <div>
                <span class="text-xl font-bold text-blue-600">Pustek Inside</span>
                <p class="text-xs text-gray-500">SMK Pustek Serpong</p>
            </div>
        </div>

        <!-- Hamburger Button (hanya muncul di mobile) -->
        <label for="menu-toggle" class="md:hidden cursor-pointer">
            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </label>
        <input type="checkbox" id="menu-toggle" class="hidden peer">

        <!-- Navbar Desktop + Mobile -->
        <nav class="hidden peer-checked:flex md:flex flex-col md:flex-row absolute md:relative top-full left-0 right-0 bg-white md:bg-transparent shadow-lg md:shadow-none flex-col md:flex-row items-start md:items-center space-y-4 md:space-y-0 md:space-x-8 font-semibold text-sm tracking-wide uppercase pt-4 md:pt-0 pb-4 md:pb-0 px-6 md:px-0">

            <a href="/index.html" class="text-blue-600 border-b-2 border-blue-600 pb-1 md:pb-1">Beranda</a>

            <!-- Dropdown OSIS -->
            <div class="relative group">
                <button class="text-gray-600 hover:text-blue-600 flex items-center">
                    OSIS
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div class="absolute left-0 top-full mt-2 w-56 origin-top-left">
                    <div class="bg-white rounded-md shadow-xl ring-1 ring-black ring-opacity-5 overflow-hidden scale-95 opacity-0 invisible group-hover:scale-100 group-hover:opacity-100 group-hover:visible transition-all duration-200 ease-out">
                        <div class="py-1">
                            <a href="#tentang" class="block px-5 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                Visi Misi
                            </a>
                            <a href="#proker" class="block px-5 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                Program Kerja
                            </a>
                            <a href="kegiatan/pemilu.html" class="block px-5 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                Pemilu OSIS
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="kegiatan/kegiatan.html" class="text-gray-600 hover:text-blue-600">Events</a>
            <a href="#struktural" class="text-gray-600 hover:text-blue-600">Struktur Kepengurusan</a>
            <a href="ekskul/ekskul.html" class="text-gray-600 hover:text-blue-600">Ekstrakurikuler</a>
        </nav>
    </div>
</header>