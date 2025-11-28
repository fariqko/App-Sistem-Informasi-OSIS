<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pustek Inside</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-50 font-poppins">
    <!-- Header/Navbar -->
    <x-header/>

    <!-- Hero Section - Updated to match the provided image -->
    <section
        id="home"
        class="relative bg-gradient-to-br from-[#151A59] to-[#4E8794] text-white py-20 overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <!-- Left Content -->
                <div class="md:w-1/2 space-y-8">
                    <!-- Main Heading -->
                    <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight">
                        Welcome to <span class="text-yellow-400">PUSTEK INSIDE</span>
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-xl md:text-2xl font-light text-gray-200">
                        Teknologi untuk Prestasi, Karakter untuk Masa Depan
                    </p>

                    <!-- Divider -->
                    <div class="w-20 h-1 bg-yellow-400 my-8"></div>

                    <!-- Section Heading -->
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        OSIS SMK PUSTEK SERPONG
                    </h2>

                    <!-- Description -->
                    <p class="text-lg text-gray-300 leading-relaxed mb-8">
                        SMK Pustek Serpong adalah sekolah menengah kejuruan yang berfokus
                        pada pengembangan kompetensi siswa dalam bidang teknologi dan
                        keahlian profesional. Dengan lingkungan belajar yang disiplin,
                        modern, dan berorientasi pada praktik, SMK Pustek Serpong
                        berkomitmen mencetak lulusan yang siap kerja, berkarakter, dan
                        mampu bersaing di dunia industri maupun pendidikan tinggi.
                    </p>

                    <!-- Features Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Feature 1 -->
                        <div
                            class="bg-blue-800/30 backdrop-blur-sm rounded-xl p-6 border border-blue-700/50">
                            <div
                                class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-star text-blue-900 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2">FASILITASI POTENSI</h3>
                            <p class="text-gray-300 text-sm">
                                SMK PUSTEK SERPONG mengembangkan bakat dan talenta siswa siswi
                            </p>
                        </div>

                        <!-- Feature 2 -->
                        <div
                            class="bg-blue-800/30 backdrop-blur-sm rounded-xl p-6 border border-blue-700/50">
                            <div
                                class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-trophy text-blue-900 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2">SISWA SISWI BERPRESTASI</h3>
                            <p class="text-gray-300 text-sm">
                                SMK PUSTEK SERPONG memiliki banyak siswa siswi yang
                                berprestasi
                            </p>
                        </div>

                        <!-- Feature 3 -->
                        <div
                            class="bg-blue-800/30 backdrop-blur-sm rounded-xl p-6 border border-blue-700/50">
                            <div
                                class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-laptop text-blue-900 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2">FASILITAS</h3>
                            <p class="text-gray-300 text-sm">
                                SMK PUSTEK SERPONG mempunyai fasilitas di bidang teknologi
                                yang sangat baik.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Image with Creative Layout -->
                <div class="md:w-1/2 flex justify-center relative">
                    <!-- Decorative Elements -->
                    <div
                        class="absolute -top-6 -right-6 w-24 h-24 bg-yellow-400 rounded-full opacity-20 blur-2xl animate-pulse"></div>
                    <div
                        class="absolute -bottom-6 -left-6 w-32 h-32 bg-indigo-400 rounded-full opacity-20 blur-2xl animate-pulse delay-500"></div>

                    <!-- Main Image Container -->
                    <div class="relative group">
                        <!-- Card Background -->
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-3xl transform rotate-6 group-hover:rotate-3 transition-transform duration-500 opacity-40 blur-sm"></div>

                        <!-- Image Card -->
                        <div
                            class="relative bg-white/10 backdrop-blur-sm rounded-3xl p-3 shadow-2xl transform -rotate-2 group-hover:rotate-0 transition-all duration-500 border border-white/20">
                            <div class="relative overflow-hidden rounded-2xl">
                                <img
                                    src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                    alt="Siswa beraktivitas di sekolah"
                                    class="rounded-2xl w-full h-96 object-cover transform group-hover:scale-110 transition-transform duration-700" />

                                <!-- Overlay Gradient -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-blue-900/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Visi Misi Section -->
    <section id="tentang" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">
                    Tentang OSIS SMK Pustek
                </h2>
                <div class="section-divider"></div>
                <p class="text-gray-600 max-w-3xl mx-auto mt-4">
                    OSIS SMK Pustek merupakan organisasi siswa yang berperan penting
                    dalam mewadahi aspirasi siswa, mengembangkan bakat dan minat, serta
                    menjadi mitra sekolah dalam menciptakan lingkungan belajar yang
                    kondusif.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">
                        Visi OSIS SMK Pustek
                    </h3>
                    <p class="text-gray-600 mb-6">
                        Menjadikan OSIS sebagai organisasi yang profesional, inovatif, dan
                        berintegritas tinggi dalam mewadahi serta mengembangkan potensi
                        siswa SMK Pustek untuk menjadi generasi yang unggul dan berdaya
                        saing.
                    </p>

                    <h3 class="text-2xl font-bold text-gray-800 mb-4">
                        Misi OSIS SMK Pustek
                    </h3>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check text-accent mt-1 mr-2"></i>
                            <span>Meningkatkan kualitas kepemimpinan dan karakter siswa melalui
                                berbagai program pembinaan</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-accent mt-1 mr-2"></i>
                            <span>Mengoptimalkan potensi siswa dalam bidang akademik dan
                                non-akademik</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-accent mt-1 mr-2"></i>
                            <span>Menjalin hubungan yang harmonis antara siswa, guru, dan
                                seluruh warga sekolah</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-accent mt-1 mr-2"></i>
                            <span>Mengembangkan kreativitas dan inovasi siswa melalui berbagai
                                kegiatan positif</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="bg-gradient-to-br from-blue-50 to-yellow-50 p-8 rounded-xl shadow-lg">
                    <img
                        src="assets/sekolah-removebg-preview.png"
                        alt="Struktur OSIS SMK Pustek"
                        class="w-full h-auto rounded-lg" />
                </div>
            </div>
        </div>
    </section>

    <!-- Struktur OSIS Section -->
    <section id="bidang" class="relative pt-32 pb-20 bg-[#151A59] text-white">
        <div
            class="absolute top-0 left-0 w-full h-44 bg-[#151A59] rounded-b-[50%]"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold tracking-wide">BIDANG</h2>
                <p class="text-sm mt-4 max-w-2xl mx-auto opacity-80">
                    OSIS SMK Pustek terbagi menjadi 8 bidang agar dapat fokus
                    menjalankan program kerja dan tugas masing-masing pada seting
                    bidangnya.
                </p>
                <div class="mt-6 flex justify-center">
                    <div class="w-10 h-1 bg-white rounded-full"></div>
                </div>
            </div>

            <div class="flex flex-wrap gap-8 justify-center">
                <a
                    href="bidang1.html"
                    class="bg-white/10 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:scale-105 hover:bg-white/20 w-full sm:w-96">
                    <div
                        class="h-48 bg-cover bg-center opacity-60"
                        style="background-image: url('assets/bidang/bidang1.jpeg')"></div>
                    <h3 class="text-center text-xl font-bold py-4">BIDANG 1</h3>
                </a>

                <a
                    href="bidang2.html"
                    class="bg-white/10 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:scale-105 hover:bg-white/20 w-full sm:w-96">
                    <div
                        class="h-48 bg-cover bg-center opacity-60"
                        style="background-image: url('assets/bidang/bidang2.jpeg')"></div>
                    <h3 class="text-center text-xl font-bold py-4">BIDANG 2</h3>
                </a>

                <a
                    href="bidang3.html"
                    class="bg-white/10 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:scale-105 hover:bg-white/20 w-full sm:w-96">
                    <div
                        class="h-48 bg-cover bg-center opacity-60"
                        style="background-image: url('assets/bidang/bidang3.jpeg')"></div>
                    <h3 class="text-center text-xl font-bold py-4">BIDANG 3</h3>
                </a>

                <a
                    href="bidang4.html"
                    class="bg-white/10 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:scale-105 hover:bg-white/20 w-full sm:w-96">
                    <div
                        class="h-48 bg-cover bg-center opacity-60"
                        style="background-image: url('assets/bidang/bidang4.jpeg')"></div>
                    <h3 class="text-center text-xl font-bold py-4">BIDANG 4</h3>
                </a>

                <a
                    href="bidang5.html"
                    class="bg-white/10 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:scale-105 hover:bg-white/20 w-full sm:w-96">
                    <div
                        class="h-48 bg-cover bg-center opacity-60"
                        style="background-image: url('assets/bidang/bidang5.jpeg')"></div>
                    <h3 class="text-center text-xl font-bold py-4">BIDANG 5</h3>
                </a>

                <a
                    href="bidang6.html"
                    class="bg-white/10 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:scale-105 hover:bg-white/20 w-full sm:w-96">
                    <div
                        class="h-48 bg-cover bg-center opacity-60"
                        style="background-image: url('assets/bidang/bidang6.jpeg')"></div>
                    <h3 class="text-center text-xl font-bold py-4">BIDANG 6</h3>
                </a>

                <a
                    href="bidang7.html"
                    class="bg-white/10 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:scale-105 hover:bg-white/20 w-full sm:w-96">
                    <div
                        class="h-48 bg-cover bg-center opacity-60"
                        style="background-image: url('assets/bidang/bidang7.jpeg')"></div>
                    <h3 class="text-center text-xl font-bold py-4">BIDANG 7</h3>
                </a>

                <a
                    href="bidang8.html"
                    class="bg-white/10 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:scale-105 hover:bg-white/20 w-full sm:w-96">
                    <div
                        class="h-48 bg-cover bg-center opacity-60"
                        style="
                background-image: url('https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?auto=format&fit=crop&w=800&q=60');
              "></div>
                    <h3 class="text-center text-xl font-bold py-4">BIDANG 8</h3>
                </a>
            </div>
        </div>
    </section>

    <!-- Program Kerja Section -->
    <section id="proker" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Program Kerja OSIS</h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mt-4"></div>
                <p class="text-gray-600 max-w-3xl mx-auto mt-4">
                    Berbagai program kerja yang telah dan akan dilaksanakan oleh OSIS
                    SMK Pustek.
                </p>
            </div>

            <!-- Slider Wrapper -->
            <div class="relative w-full overflow-hidden" id="proker-slider">
                <!-- Slides Container -->
                <div class="flex transition-transform duration-500" id="slider-track">
                    <!-- Slide 1 -->
                    <div
                        class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full flex-shrink-0 px-4">
                        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6">
                            <img src="assets/bidang/bidang1.jpeg" class="w-full h-40 object-cover rounded-lg mb-4" />
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Porseni</h3>
                            <p class="text-gray-600">
                                Pekan Olahraga dan Seni sebagai ajang kompetisi antar siswa.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6">
                            <img
                                src="assets/bidang/bidang2.jpeg"
                                class="w-full h-40 object-cover rounded-lg mb-4" />
                            <h3 class="text-xl font-bold text-gray-800 mb-2">MPLS</h3>
                            <p class="text-gray-600">
                                MPLS adalah kegiatan penyambutan peserta didik baru yang
                                dilaksanakan di awal tahun ajaran sebagai langkah awal
                                mengenal lingkungan SMK Pustek.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6">
                            <img
                                src="assets/bidang/bidang3.jpeg"
                                class="w-full h-40 object-cover rounded-lg mb-4" />
                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                Hari Anak Nasional
                            </h3>
                            <p class="text-gray-600">
                                Dalam rangka memperingati Hari Anak Nasional, OSIS SMK Pustek
                                menyelenggarakan berbagai kegiatan edukatif dan rekreatif yang
                                bertujuan menciptakan ruang ekspresi, kreativitas, serta
                                kebersamaan bagi seluruh siswa.
                            </p>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div
                        class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full flex-shrink-0 px-4">
                        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6">
                            <img
                                src="assets/bidang/bidang4.jpeg"
                                class="w-full h-40 object-cover rounded-lg mb-4" />
                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                Pengembangan Karakter
                            </h3>
                            <p class="text-gray-600">
                                LDKS, pelatihan soft skills, dan pembinaan kepemimpinan.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6">
                            <img
                                src="assets/bidang/bidang5.jpeg"
                                class="w-full h-40 object-cover rounded-lg mb-4" />
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Akademik</h3>
                            <p class="text-gray-600">
                                Kelompok belajar, lomba akademik, dan bimbingan belajar.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6">
                            <img
                                src="assets/bidang/bidang6.jpeg"
                                class="w-full h-40 object-cover rounded-lg mb-4" />
                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                Bakat & Minat
                            </h3>
                            <p class="text-gray-600">
                                Ekskul, pentas seni, dan pengembangan minat siswa.
                            </p>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div
                        class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full flex-shrink-0 px-4">
                        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6">
                            <img
                                src="assets/bidang/bidang7.jpeg"
                                class="w-full h-40 object-cover rounded-lg mb-4" />
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Lentera</h3>
                            <p class="text-gray-600">
                                LENTERA merupakan salah satu program unggulan OSIS SMK Pustek
                                yang bertujuan menjadi ruang ekspresi, inspirasi, dan
                                pengembangan karakter bagi para siswa.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6">
                            <img
                                src="assets/bidang/bidang1.jpeg"
                                class="w-full h-40 object-cover rounded-lg mb-4" />
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Kebersihan</h3>
                            <p class="text-gray-600">
                                Program Jumat Bersih dan peduli lingkungan sekolah.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6">
                            <img
                                src="assets/bidang/bidang3.jpeg"
                                class="w-full h-40 object-cover rounded-lg mb-4" />
                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                Kewirausahaan
                            </h3>
                            <p class="text-gray-600">
                                Market day, pelatihan bisnis, dan pengembangan UMKM siswa.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button
                    id="prev-btn"
                    class="absolute top-1/2 -left-4 transform -translate-y-1/2 bg-white shadow-lg p-3 rounded-full">
                    ❮
                </button>
                <button
                    id="next-btn"
                    class="absolute top-1/2 -right-4 transform -translate-y-1/2 bg-white shadow-lg p-3 rounded-full">
                    ❯
                </button>
            </div>
        </div>
    </section>

    <!-- Kegiatan & Event Section -->
    <section id="courses" class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Header Section -->
            <div class="mb-8">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-3">
                    Temukan Event Menarik dan Aktivitas Terbaru Setiap Hari
                </h2>
                <p class="text-gray-600 text-base lg:text-lg">
                    Menghadirkan Informasi Event, Program Kegiatan, dan Agenda Resmi
                    yang Disusun untuk Mendukung Pengembangan Siswa/i dan Komunitas
                    Akademik.
                </p>
            </div>

            <!-- Tab Navigation -->
            <div class="border-b border-gray-200 mb-8">
                <nav class="flex space-x-8 overflow-x-auto">
                    <button
                        class="pb-4 px-1 border-b-2 border-gray-900 font-semibold text-gray-900 whitespace-nowrap">
                        Semua Informasi
                    </button>
                    <button
                        class="pb-4 px-1 border-b-2 border-transparent font-medium text-gray-600 hover:text-gray-900 hover:border-gray-300 whitespace-nowrap">
                        Ekstrakurikuler
                    </button>
                    <button
                        class="pb-4 px-1 border-b-2 border-transparent font-medium text-gray-600 hover:text-gray-900 hover:border-gray-300 whitespace-nowrap">
                        Lomba dan Kompetisi
                    </button>
                    <button
                        class="pb-4 px-1 border-b-2 border-transparent font-medium text-gray-600 hover:text-gray-900 hover:border-gray-300 whitespace-nowrap">
                        Akademik
                    </button>
                    <button
                        class="pb-4 px-1 border-b-2 border-transparent font-medium text-gray-600 hover:text-gray-900 hover:border-gray-300 whitespace-nowrap">
                        Kegiatan Sosial
                    </button>
                </nav>
            </div>

            <!-- Courses Grid -->
            <div class="relative">
                <!-- Scroll Container -->
                <div class="flex space-x-6 overflow-x-auto pb-4 scrollbar-hide">
                    <!-- Course Card 1 -->
                    <div class="flex-none w-80 group">
                        <a href="#" class="block">
                            <div class="relative rounded-lg overflow-hidden mb-3">
                                <img
                                    src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=600&q=80"
                                    alt="AI Engineer Course"
                                    class="w-full h-44 object-cover group-hover:opacity-90 transition" />
                            </div>
                            <h3
                                class="text-base font-bold text-gray-900 mb-1 line-clamp-2 group-hover:text-blue-600 transition">
                                NWTC (National Winner Talent Competition)
                            </h3>
                            <p class="text-sm text-gray-600 mb-2">
                                kompetisi akademik nasional berbasis teknologi digital, bisa
                                jadi ajang prestasi untuk siswa SMK.
                            </p>
                        </a>
                    </div>

                    <!-- Course Card 2 -->
                    <div class="flex-none w-80 group">
                        <a href="#" class="block">
                            <div class="relative rounded-lg overflow-hidden mb-3">
                                <img
                                    src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?w=600&q=80"
                                    alt="Salesforce Development"
                                    class="w-full h-44 object-cover group-hover:opacity-90 transition" />
                            </div>
                            <h3
                                class="text-base font-bold text-gray-900 mb-1 line-clamp-2 group-hover:text-blue-600 transition">
                                Lomba Karya Inovasi Generative AI untuk Siswa SMK
                            </h3>
                            <p class="text-sm text-gray-600 mb-2">
                                Diselenggarakan oleh BPPTIK dan AWS (Amazon Web Services)
                                untuk siswa SMK.
                            </p>
                        </a>
                    </div>

                    <!-- Course Card 3 -->
                    <div class="flex-none w-80 group">
                        <a href="#" class="block">
                            <div class="relative rounded-lg overflow-hidden mb-3">
                                <img
                                    src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?w=600&q=80"
                                    alt="AI Agents"
                                    class="w-full h-44 object-cover group-hover:opacity-90 transition" />
                            </div>
                            <h3
                                class="text-base font-bold text-gray-900 mb-1 line-clamp-2 group-hover:text-blue-600 transition">
                                World Vocational College Skills Competition (Internasional)
                            </h3>
                            <p class="text-sm text-gray-600 mb-2">
                                Potensial untuk artikel “Kesempatan Internasional bagi Siswa
                                SMK Pustek” atau “Mengenal World Vocational College Skills”
                            </p>
                        </a>
                    </div>

                    <!-- Course Card 4 -->
                    <div class="flex-none w-80 group">
                        <a href="#" class="block">
                            <div class="relative rounded-lg overflow-hidden mb-3">
                                <img
                                    src="https://images.unsplash.com/photo-1639322537228-f710d846310a?w=600&q=80"
                                    alt="GPU Accelerated AI"
                                    class="w-full h-44 object-cover group-hover:opacity-90 transition" />
                            </div>
                            <h3
                                class="text-base font-bold text-gray-900 mb-1 line-clamp-2 group-hover:text-blue-600 transition">
                                World Vocational College Skills Competition (Internasional)
                            </h3>
                            <p class="text-sm text-gray-600 mb-2">
                                Potensial untuk artikel “Kesempatan Internasional bagi Siswa
                                SMK Pustek” atau “Mengenal World Vocational College Skills”.
                            </p>
                        </a>
                    </div>

                    <!-- Course Card 5 (tambahan untuk scroll) -->
                    <div class="flex-none w-80 group">
                        <a href="#" class="block">
                            <div class="relative rounded-lg overflow-hidden mb-3">
                                <img
                                    src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?w=600&q=80"
                                    alt="Machine Learning"
                                    class="w-full h-44 object-cover group-hover:opacity-90 transition" />
                            </div>
                            <h3
                                class="text-base font-bold text-gray-900 mb-1 line-clamp-2 group-hover:text-blue-600 transition">
                                Delegasi SMK Pustek Serpong Berhasil Masuk Final Olimpiade
                                Matematika Kejuruan (OMK) 2025
                            </h3>
                            <p class="text-sm text-gray-600 mb-2">
                                Dua siswa dari jurusan RPL dan Akuntansi berhasil menembus
                                babak final Olimpiade Matematika Kejuruan (OMK) 2025 yang
                                diselenggarakan oleh Universitas Pendidikan Indonesia.
                            </p>
                        </a>
                    </div>
                </div>

                <!-- Navigation Button (Right) -->
                <button
                    class="absolute right-0 top-1/3 -translate-y-1/2 bg-black text-white w-12 h-12 rounded-full shadow-lg hover:bg-gray-800 transition flex items-center justify-center">
                    <svg
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <!-- View All Link -->
            <div class="mt-8">
                <a
                    href="kegiatan/kegiatan.html"
                    class="inline-flex items-center text-purple-700 font-bold text-base hover:text-purple-800 transition">
                    Informasi Selanjutnya
                    <svg
                        class="w-5 h-5 ml-1"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Struktural Section -->
    <section id="struktural" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar Navigation -->
                <div class="lg:w-64 flex-shrink-0">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-sm sticky top-4">
                        <nav class="p-4">
                            <ul class="space-y-1" id="struktur-nav">
                                <li>
                                    <a href="#struktur-inti" class="block px-4 py-3 bg-cyan-50 text-cyan-600 font-medium rounded-lg struktur-nav-item active" data-target="struktur-inti">
                                        Struktur Inti
                                    </a>
                                </li>
                                <li>
                                    <a href="#bidang-1" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition struktur-nav-item" data-target="bidang-1">
                                        Seksi Bidang 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#bidang-2" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition struktur-nav-item" data-target="bidang-2">
                                        Seksi Bidang 2
                                    </a>
                                </li>
                                <li>
                                    <a href="#bidang-3" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition struktur-nav-item" data-target="bidang-3">
                                        Seksi Bidang 3
                                    </a>
                                </li>
                                <li>
                                    <a href="#bidang-4" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition struktur-nav-item" data-target="bidang-4">
                                        Seksi Bidang 4
                                    </a>
                                </li>
                                <li>
                                    <a href="#bidang-5" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition struktur-nav-item" data-target="bidang-5">
                                        Seksi Bidang 5
                                    </a>
                                </li>
                                <li>
                                    <a href="#bidang-6" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition struktur-nav-item" data-target="bidang-6">
                                        Seksi Bidang 6
                                    </a>
                                </li>
                                <li>
                                    <a href="#bidang-7" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition struktur-nav-item" data-target="bidang-7">
                                        Seksi Bidang 7
                                    </a>
                                </li>
                                <li>
                                    <a href="#bidang-8" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition struktur-nav-item" data-target="bidang-8">
                                        Seksi Bidang 8
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="flex-1 overflow-hidden">
                    <!-- Struktur Inti Content -->
                    <div id="struktur-inti" class="struktur-content active">
                        <!-- Header -->
                        <div class="mb-12">
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">
                                Struktur Inti
                                <span class="text-cyan-500">Osis Pustek Serpong</span>
                            </h2>
                        </div>

                        <!-- Mentor Cards Carousel -->
                        <div class="relative">
                            <!-- Carousel Container -->
                            <div class="overflow-hidden">
                                <div class="flex gap-4 transition-transform duration-300 ease-in-out" id="carousel">
                                    <!-- Mentor Card 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Louis Leonardo"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Louis Leonardo</h3>
                                                <p class="text-gray-400 text-sm mb-3">Ketua Osis</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Kerja keraslah sekarang, biar nanti bisa tidur siang tanpa rasa bersalah.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="https://www.instagram.com/nrannshq__/" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mentor Card 2 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Louis Leonardo"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Louis Leonardo</h3>
                                                <p class="text-gray-400 text-sm mb-3">Ketua Osis</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Kalau gagal hari ini, tenang… besok bisa gagal lagi dengan cara yang berbeda.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="https://www.instagram.com/nrannshq__/" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mentor Card 3 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Louis Leonardo"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Louis Leonardo</h3>
                                                <p class="text-gray-400 text-sm mb-3">Ketua Osis</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Kalau gagal hari ini, tenang… besok bisa gagal lagi dengan cara yang berbeda.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="https://www.instagram.com/nrannshq__/" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Mentor Card 4 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Louis Leonardo"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Louis Leonardo</h3>
                                                <p class="text-gray-400 text-sm mb-3">Ketua Osis</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Kalau gagal hari ini, tenang… besok bisa gagal lagi dengan cara yang berbeda.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="https://www.instagram.com/nrannshq__/" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Mentor card 5 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Louis Leonardo"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Louis Leonardo</h3>
                                                <p class="text-gray-400 text-sm mb-3">Ketua Osis</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Kalau gagal hari ini, tenang… besok bisa gagal lagi dengan cara yang berbeda.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="https://www.instagram.com/nrannshq__/" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Mentor Card 6 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Louis Leonardo"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Louis Leonardo</h3>
                                                <p class="text-gray-400 text-sm mb-3">Ketua Osis</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Kalau gagal hari ini, tenang… besok bisa gagal lagi dengan cara yang berbeda.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="https://www.instagram.com/nrannshq__/" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Tambahkan card lainnya... -->
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <button id="prevBtn-struktur-inti" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white rounded-full w-10 h-10 shadow-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition z-10">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button id="nextBtn-struktur-inti" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white rounded-full w-10 h-10 shadow-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition z-10">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>

                        <!-- Progress Bar -->
                        <div class="mt-8 flex items-center gap-2">
                            <div class="flex-1 h-1 bg-cyan-400 rounded-full progress-item-struktur-inti active" data-index="0"></div>
                            <div class="flex-1 h-1 bg-gray-200 rounded-full progress-item-struktur-inti" data-index="1"></div>
                            <div class="flex-1 h-1 bg-gray-200 rounded-full progress-item-struktur-inti" data-index="2"></div>
                        </div>
                    </div>

                    <!-- Bidang 1 Content -->
                    <div id="bidang-1" class="struktur-content hidden">
                        <!-- Header -->
                        <div class="mb-12">
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">
                                Pengurus
                                <span class="text-cyan-500">Seksi Bidang 1</span>
                            </h2>
                            <p class="text-gray-600">Deskripsi tentang Bidang 1 dan tanggung jawabnya.</p>
                        </div>

                        <!-- Mentor Cards Carousel -->
                        <div class="relative">
                            <!-- Carousel Container -->
                            <div class="overflow-hidden">
                                <div class="flex gap-4 transition-transform duration-300 ease-in-out" id="carousel-bidang-1">
                                    <!-- Mentor Card 1 untuk Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mentor Card 2 untuk Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 2</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1 lainnya.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">R</span>
                                                        </div>
                                                        <span class="text-xs">RPL</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 3 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 4 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 5 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tambahkan card lainnya untuk Bidang 1... -->
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <button id="prevBtn-bidang-1" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white rounded-full w-10 h-10 shadow-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition z-10">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button id="nextBtn-bidang-1" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white rounded-full w-10 h-10 shadow-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition z-10">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>

                        <!-- Progress Bar -->
                        <div class="mt-8 flex items-center gap-2">
                            <div class="flex-1 h-1 bg-cyan-400 rounded-full progress-item-bidang-1 active" data-index="0"></div>
                            <div class="flex-1 h-1 bg-gray-200 rounded-full progress-item-bidang-1" data-index="1"></div>
                            <div class="flex-1 h-1 bg-gray-200 rounded-full progress-item-bidang-1" data-index="2"></div>
                        </div>
                    </div>

                    <!-- Bidang 2 Content -->
                    <div id="bidang-2" class="struktur-content hidden">
                        <div class="mb-12">
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">
                                Seksi Bidang 2
                                <span class="text-cyan-500">Osis Pustek Serpong</span>
                            </h2>
                            <p class="text-gray-600">Deskripsi tentang Bidang 2 dan tanggung jawabnya.</p>
                        </div>
                        <!-- Konten Bidang 2 -->
                        <div class="flex-none w-[250px] h-full">
                            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                <div class="relative h-56 bg-gray-200">
                                    <img
                                        src="assets/icantiipp.jpg"
                                        alt="Anggota Bidang 1"
                                        class="w-full h-full object-cover" />
                                    <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                </div>
                                <div class="bg-gray-900 text-white p-4">
                                    <h3 class="text-lg font-bold mb-1">Nama Anggota </h3>
                                    <p class="text-gray-400 text-sm mb-3">Anggota Bidang 2</p>
                                    <p class="text-gray-300 text-xs mb-3">
                                        <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                            <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                <span class="text-xs font-bold text-gray-900">P</span>
                                            </div>
                                            <span class="text-xs">Perkantoran</span>
                                        </div>
                                        <a href="#" class="text-white hover:text-cyan-400 transition">
                                            <i class="fab fa-instagram text-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tambahkan konten untuk bidang 3-8 dengan pola yang sama -->
                    <!-- Bidang 3 -->
                    <div id="bidang-3" class="struktur-content hidden">
                        <!-- Header -->
                        <div class="mb-12">
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">
                                Pengurus
                                <span class="text-cyan-500">Seksi Bidang 3</span>
                            </h2>
                            <p class="text-gray-600">Deskripsi tentang Bidang 3 dan tanggung jawabnya.</p>
                        </div>

                        <!-- Mentor Cards Carousel -->
                        <div class="relative">
                            <!-- Carousel Container -->
                            <div class="overflow-hidden">
                                <div class="flex gap-4 transition-transform duration-300 ease-in-out" id="carousel-bidang-2">
                                    <!-- Mentor Card 1 untuk Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mentor Card 2 untuk Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 2</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1 lainnya.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">R</span>
                                                        </div>
                                                        <span class="text-xs">RPL</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 3 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 4 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 5 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tambahkan card lainnya untuk Bidang 1... -->
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <button id="prevBtn-bidang-2" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white rounded-full w-10 h-10 shadow-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition z-10">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button id="nextBtn-bidang-2" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white rounded-full w-10 h-10 shadow-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition z-10">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>

                        <!-- Progress Bar -->
                        <div class="mt-8 flex items-center gap-2">
                            <div class="flex-1 h-1 bg-cyan-400 rounded-full progress-item-bidang-1 active" data-index="0"></div>
                            <div class="flex-1 h-1 bg-gray-200 rounded-full progress-item-bidang-1" data-index="1"></div>
                            <div class="flex-1 h-1 bg-gray-200 rounded-full progress-item-bidang-1" data-index="2"></div>
                        </div>
                    </div>

                    <!-- Struktur Bidang 4 -->
                    <div id="bidang-4" class="struktur-content hidden">
                        <!-- Header -->
                        <div class="mb-12">
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">
                                Pengurus
                                <span class="text-cyan-500">Seksi Bidang 4</span>
                            </h2>
                            <p class="text-gray-600">Deskripsi tentang Bidang 4 dan tanggung jawabnya.</p>
                        </div>

                        <!-- Mentor Cards Carousel -->
                        <div class="relative">
                            <!-- Carousel Container -->
                            <div class="overflow-hidden">
                                <div class="flex gap-4 transition-transform duration-300 ease-in-out" id="carousel-bidang-3">
                                    <!-- Mentor Card 1 untuk Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mentor Card 2 untuk Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 2</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1 lainnya.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">R</span>
                                                        </div>
                                                        <span class="text-xs">RPL</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 3 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 4 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 5 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tambahkan card lainnya untuk Bidang 1... -->
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <button id="prevBtn-bidang-3" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white rounded-full w-10 h-10 shadow-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition z-10">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button id="nextBtn-bidang-3" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white rounded-full w-10 h-10 shadow-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition z-10">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>

                        <!-- Progress Bar -->
                        <div class="mt-8 flex items-center gap-2">
                            <div class="flex-1 h-1 bg-cyan-400 rounded-full progress-item-bidang-1 active" data-index="0"></div>
                            <div class="flex-1 h-1 bg-gray-200 rounded-full progress-item-bidang-1" data-index="1"></div>
                            <div class="flex-1 h-1 bg-gray-200 rounded-full progress-item-bidang-1" data-index="2"></div>
                        </div>
                    </div>

                    <!-- Struktur Bidang 5 -->
                    <div id="bidang-5" class="struktur-content hidden">
                        <!-- Header -->
                        <div class="mb-12">
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">
                                Pengurus
                                <span class="text-cyan-500">Seksi Bidang 5</span>
                            </h2>
                            <p class="text-gray-600">Deskripsi tentang Bidang 5 dan tanggung jawabnya.</p>
                        </div>

                        <!-- Mentor Cards Carousel -->
                        <div class="relative">
                            <!-- Carousel Container -->
                            <div class="overflow-hidden">
                                <div class="flex gap-4 transition-transform duration-300 ease-in-out" id="carousel-bidang-4">
                                    <!-- Mentor Card 1 untuk Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mentor Card 2 untuk Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 2</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1 lainnya.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">R</span>
                                                        </div>
                                                        <span class="text-xs">RPL</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 3 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 4 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 5 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tambahkan card lainnya untuk Bidang 1... -->
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <button id="prevBtn-bidang-5" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white rounded-full w-10 h-10 shadow-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition z-10">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button id="nextBtn-bidang-5" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white rounded-full w-10 h-10 shadow-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition z-10">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>

                        <!-- Progress Bar -->
                        <div class="mt-8 flex items-center gap-2">
                            <div class="flex-1 h-1 bg-cyan-400 rounded-full progress-item-bidang-1 active" data-index="0"></div>
                            <div class="flex-1 h-1 bg-gray-200 rounded-full progress-item-bidang-1" data-index="1"></div>
                            <div class="flex-1 h-1 bg-gray-200 rounded-full progress-item-bidang-1" data-index="2"></div>
                        </div>
                    </div>

                    <!-- Struktur Bidang 6 -->
                    <div id="bidang-6" class="struktur-content hidden">
                        <!-- Header -->
                        <div class="mb-12">
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">
                                Pengurus
                                <span class="text-cyan-500">Seksi Bidang 6</span>
                            </h2>
                            <p class="text-gray-600">Deskripsi tentang Bidang 6 dan tanggung jawabnya.</p>
                        </div>

                        <!-- Mentor Cards Carousel -->
                        <div class="relative">
                            <!-- Carousel Container -->
                            <div class="overflow-hidden">
                                <div class="flex gap-4 transition-transform duration-300 ease-in-out" id="carousel-bidang-5">
                                    <!-- Mentor Card 1 untuk Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mentor Card 2 untuk Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 2</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1 lainnya.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">R</span>
                                                        </div>
                                                        <span class="text-xs">RPL</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 3 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 4 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 5 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tambahkan card lainnya untuk Bidang 1... -->
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <button id="prevBtn-bidang-6" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white rounded-full w-10 h-10 shadow-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition z-10">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button id="nextBtn-bidang-6" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white rounded-full w-10 h-10 shadow-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition z-10">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>

                        <!-- Progress Bar -->
                        <div class="mt-8 flex items-center gap-2">
                            <div class="flex-1 h-1 bg-cyan-400 rounded-full progress-item-bidang-1 active" data-index="0"></div>
                            <div class="flex-1 h-1 bg-gray-200 rounded-full progress-item-bidang-1" data-index="1"></div>
                            <div class="flex-1 h-1 bg-gray-200 rounded-full progress-item-bidang-1" data-index="2"></div>
                        </div>
                    </div>

                    <!-- Struktur Bidang 7 -->
                    <div id="bidang-7" class="struktur-content hidden">
                        <!-- Header -->
                        <div class="mb-12">
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">
                                Pengurus
                                <span class="text-cyan-500">Seksi Bidang 7</span>
                            </h2>
                            <p class="text-gray-600">Deskripsi tentang Bidang 7 dan tanggung jawabnya.</p>
                        </div>

                        <!-- Mentor Cards Carousel -->
                        <div class="relative">
                            <!-- Carousel Container -->
                            <div class="overflow-hidden">
                                <div class="flex gap-4 transition-transform duration-300 ease-in-out" id="carousel-bidang-7">
                                    <!-- Mentor Card 1 untuk Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mentor Card 2 untuk Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 2</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1 lainnya.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">R</span>
                                                        </div>
                                                        <span class="text-xs">RPL</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 3 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 4 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 5 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tambahkan card lainnya untuk Bidang 1... -->
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <button id="prevBtn-bidang-7" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white rounded-full w-10 h-10 shadow-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition z-10">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button id="nextBtn-bidang-7" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white rounded-full w-10 h-10 shadow-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition z-10">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>

                        <!-- Progress Bar -->
                        <div class="mt-8 flex items-center gap-2">
                            <div class="flex-1 h-1 bg-cyan-400 rounded-full progress-item-bidang-1 active" data-index="0"></div>
                            <div class="flex-1 h-1 bg-gray-200 rounded-full progress-item-bidang-1" data-index="1"></div>
                            <div class="flex-1 h-1 bg-gray-200 rounded-full progress-item-bidang-1" data-index="2"></div>
                        </div>
                    </div>

                    <!-- Struktur Bidang 8 -->
                    <div id="bidang-8" class="struktur-content hidden">
                        <!-- Header -->
                        <div class="mb-12">
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">
                                Pengurus
                                <span class="text-cyan-500">Seksi Bidang 8</span>
                            </h2>
                            <p class="text-gray-600">Deskripsi tentang Bidang 8 dan tanggung jawabnya.</p>
                        </div>

                        <!-- Mentor Cards Carousel -->
                        <div class="relative">
                            <!-- Carousel Container -->
                            <div class="overflow-hidden">
                                <div class="flex gap-4 transition-transform duration-300 ease-in-out" id="carousel-bidang-8">
                                    <!-- Mentor Card 1 untuk Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mentor Card 2 untuk Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 2</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1 lainnya.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">R</span>
                                                        </div>
                                                        <span class="text-xs">RPL</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 3 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 4 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 5 Bidang 1 -->
                                    <div class="flex-none w-[250px] h-full">
                                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                                            <div class="relative h-56 bg-gray-200">
                                                <img
                                                    src="assets/icantiipp.jpg"
                                                    alt="Anggota Bidang 1"
                                                    class="w-full h-full object-cover" />
                                                <div class="absolute top-4 left-4 bg-green-500 rounded-full w-3 h-3"></div>
                                            </div>
                                            <div class="bg-gray-900 text-white p-4">
                                                <h3 class="text-lg font-bold mb-1">Nama Anggota 1</h3>
                                                <p class="text-gray-400 text-sm mb-3">Anggota Bidang 1</p>
                                                <p class="text-gray-300 text-xs mb-3">
                                                    <span class="font-semibold text-white">Deskripsi anggota bidang 1.</span>
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                                                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                                                            <span class="text-xs font-bold text-gray-900">P</span>
                                                        </div>
                                                        <span class="text-xs">Perkantoran</span>
                                                    </div>
                                                    <a href="#" class="text-white hover:text-cyan-400 transition">
                                                        <i class="fab fa-instagram text-lg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tambahkan card lainnya untuk Bidang 1... -->
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <button id="prevBtn-bidang-8" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white rounded-full w-10 h-10 shadow-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition z-10">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button id="nextBtn-bidang-8" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white rounded-full w-10 h-10 shadow-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition z-10">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>

                        <!-- Progress Bar -->
                        <div class="mt-8 flex items-center gap-2">
                            <div class="flex-1 h-1 bg-cyan-400 rounded-full progress-item-bidang-1 active" data-index="0"></div>
                            <div class="flex-1 h-1 bg-gray-200 rounded-full progress-item-bidang-1" data-index="1"></div>
                            <div class="flex-1 h-1 bg-gray-200 rounded-full progress-item-bidang-1" data-index="2"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-100 border-t border-gray-200">
        <!-- Top Section -->
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                <!-- Left Side - Contact Info -->
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-6">
                        OSIS SMK PUSTEK SERPONG
                    </h2>
                    <div class="space-y-2 text-gray-700">
                        <p>Jl. Raya Serpong Kilometer 7 No.17,</p>
                        <p>Pd. Jagung, Kec. Serpong Utara.</p>
                        <p>Kota Tangerang Selatan, Banten 15322</p>
                        <p class="mt-4">
                            <span class="font-semibold">Email:</span>
                            <a
                                href="mailto:contact@osispustek.org"
                                class="text-blue-600 hover:underline">
                                contact@osispustek.org
                            </a>
                        </p>
                    </div>
                </div>

                <!-- Right Side - Logo -->
                <div class="flex justify-start lg:justify-end">
                    <div class="w-48 lg:w-64">
                        <img
                            src="assets/logo_pustek-removebg-preview.png"
                            alt="OSIS AKSEN Logo"
                            class="w-full h-auto" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Section - Copyright & Social Media -->
        <div class="bg-white border-t border-gray-200">
            <div class="container mx-auto px-4 py-6">
                <div
                    class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <!-- Copyright -->
                    <div class="text-gray-600 text-sm text-center md:text-left">
                        <p>
                            © Copyright 2025
                            <span class="font-semibold text-gray-900">OSIS SMK PUSTEK SERPONG</span>
                            . All Rights Reserved
                        </p>
                    </div>

                    <!-- Social Media Icons -->
                    <div class="flex items-center space-x-3">
                        <a
                            href="#"
                            class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition duration-300"
                            aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a
                            href="https://www.instagram.com/smk.pustek/?hl=id"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white hover:bg-blue-600 transition duration-300"
                            aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a
                            href="#"
                            class="w-10 h-10 bg-gray-900 rounded-full flex items-center justify-center text-white hover:bg-gray-800 transition duration-300"
                            aria-label="TikTok">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a
                            href="#"
                            class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white hover:bg-red-700 transition duration-300"
                            aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a
                            href="https://smkpustekserpong.sch.id/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center text-white hover:bg-blue-500 transition duration-300"
                            aria-label="Website">
                            <i class="fas fa-globe"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="resource/js/script.js"></script>
    <script src="js/carouselBidang.js"></script>
</body>

</html>