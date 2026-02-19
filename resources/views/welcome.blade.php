@extends('layouts.public')

@section('content')
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
                <!-- <p class="text-xl md:text-2xl font-light text-gray-200">
                        Teknologi untuk Prestasi, Karakter untuk Masa Depan
                    </p> -->

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
<section id="proker" class="py-16 bg-white">
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
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full flex-shrink-0 px-4">
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

@endsection