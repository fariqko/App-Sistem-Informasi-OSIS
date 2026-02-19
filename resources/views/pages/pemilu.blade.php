@extends('layouts.public')

@section('content')
<!-- Hero Section - Pemilu -->
<section class="relative bg-gradient-to-br from-[#151A59] to-[#4E8794] text-white py-20 overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <!-- Left Content -->
            <div class="md:w-1/2 space-y-8">
                <!-- Main Heading -->
                <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight">
                    PEMILU OSIS <span class="text-yellow-400">SMK PUSTEK</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl font-light text-gray-200">
                    Periode 2025 - 2026
                </p>

                <!-- Divider -->
                <div class="w-20 h-1 bg-yellow-400 my-8"></div>

                <!-- Description -->
                <p class="text-lg text-gray-300 leading-relaxed mb-8">
                    Jadilah bagian dari organisasi keren di masa SMA. Di sini kalian akan belajar menjadi seorang
                    pemimpin, mengatur acara dan kegiatan, serta mendapat teman-teman baru yang luar biasa.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <!-- TOMBOL VOTE SEKARANG! – AREA KLIK SUDAH SEBESAR TOMBOL -->
                    <a href="/login"
                        class="block bg-yellow-400 text-blue-900 px-8 py-4 rounded-lg font-bold text-lg hover:bg-yellow-500 transition duration-300 text-center">
                        VOTE SEKARANG!
                    </a>

                    <!-- TOMBOL LIHAT HASIL – SUDAH BENAR -->
                    <a href="#hasil"
                        class="bg-white/20 backdrop-blur-sm text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-white/30 transition duration-300 text-center">
                        LIHAT HASIL VOTING
                    </a>
                </div>
            </div>

            <!-- Right Image -->
            <div class="md:w-1/2 flex justify-center relative">
                <!-- Information Panel -->
                <div class="space-y-6">
                    <!-- Voting Status -->
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 text-white">
                        <h3 class="text-xl font-bold mb-4">
                            <i class="fas fa-chart-bar mr-2 text-yellow-400"></i>
                            Status Voting
                        </h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span>Total Siswa Terdaftar:</span>
                                <span class="font-bold">{{ $totalSiswa}}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Sudah Memilih:</span>
                                <span class="font-bold text-green-300">{{ $sudahVote }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Belum Memilih:</span>
                                <span class="font-bold text-yellow-300">{{ $belumVote }}</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-4 dark:bg-gray-700">
                                <div
                                    class="bg-blue-600 h-4 rounded-full text-xs font-medium text-blue-100 text-center leading-none transition-all duration-1000 ease-out flex items-center justify-end pr-3"
                                    style="width: {{ $partisipasi }}%">
                                </div>
                            </div>
                            <p class="text-sm text-center mt-2">Partisipasi: {{ $partisipasi }}%</p>
                        </div>
                    </div>

                    <!-- Timeline -->
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 text-white">
                        <h3 class="text-xl font-bold mb-4">
                            <i class="fas fa-clock mr-2 text-yellow-400"></i>
                            Timeline Voting
                        </h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span>Mulai:</span>
                                <span class="font-bold">28 Maret 2025</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Selesai:</span>
                                <span class="font-bold">30 Maret 2025</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Waktu Tersisa:</span>
                                <span class="font-bold text-yellow-300" id="countdown">2 hari 12 jam</span>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 text-white">
                        <h3 class="text-xl font-bold mb-4">
                            <i class="fas fa-link mr-2 text-yellow-400"></i>
                            Tautan Cepat
                        </h3>
                        <div class="space-y-2">
                            <a href="pemilu.html#vote" class="block py-2 px-4 bg-white/20 rounded-lg hover:bg-white/30 transition duration-200">
                                <i class="fas fa-users mr-2"></i>
                                Lihat Profil Calon
                            </a>
                            <a href="pemilu.html#hasil" class="block py-2 px-4 bg-white/20 rounded-lg hover:bg-white/30 transition duration-200">
                                <i class="fas fa-chart-pie mr-2"></i>
                                Hasil Voting Sementara
                            </a>
                            <a href="pemilu.html#info" class="block py-2 px-4 bg-white/20 rounded-lg hover:bg-white/30 transition duration-200">
                                <i class="fas fa-info-circle mr-2"></i>
                                Informasi Pemilu
                            </a>
                        </div>
                    </div>

                    <!-- Contact Support -->
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 text-white">
                        <h3 class="text-xl font-bold mb-4">
                            <i class="fas fa-headset mr-2 text-yellow-400"></i>
                            Butuh Bantuan?
                        </h3>
                        <p class="text-sm mb-3">Jika mengalami kendala saat login atau voting, hubungi:</p>
                        <div class="space-y-2 text-sm">
                            <div class="flex items-center">
                                <i class="fas fa-user-tie mr-2 text-yellow-400"></i>
                                <span>Panitia Pemilu: Ahmad Fauzi (XII RPL)</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-envelope mr-2 text-yellow-400"></i>
                                <span>panitia.pemilu@smkpustek.sch.id</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-phone mr-2 text-yellow-400"></i>
                                <span>(021) 1234-5678</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Wave -->
    <div class="absolute -bottom-0.5 inset-x-0 z-2 border-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                fill="white" fill-opacity="1" />
        </svg>
    </div>
</section>

<!-- Informasi Pemilu Section -->
<section id="info" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">INFORMASI PEMILU</h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto mt-4"></div>
            <p class="text-gray-600 max-w-3xl mx-auto mt-4">
                Informasi lengkap mengenai Pemilihan Ketua dan Wakil Ketua OSIS SMK Pustek Serpong Periode
                2025-2026.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Left Column -->
            <div class="space-y-6">
                <div class="bg-blue-50 p-6 rounded-xl">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Tata Cara Pemilihan</h3>
                    <ul class="text-gray-600 space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                            <span>Pemilihan dilakukan secara online melalui platform ini</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                            <span>Setiap siswa berhak memilih satu pasangan calon</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                            <span>Pemilihan berlangsung selama 3 hari</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                            <span>Hasil akan diumumkan setelah periode pemilihan selesai</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-yellow-50 p-6 rounded-xl">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Jadwal Pemilu</h3>
                    <ul class="text-gray-600 space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-calendar-alt text-yellow-500 mt-1 mr-2"></i>
                            <span><strong>Pendaftaran Calon:</strong> 1-10 Maret 2025</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-calendar-alt text-yellow-500 mt-1 mr-2"></i>
                            <span><strong>Kampanye:</strong> 15-25 Maret 2025</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-calendar-alt text-yellow-500 mt-1 mr-2"></i>
                            <span><strong>Pemungutan Suara:</strong> 28-30 Maret 2025</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-calendar-alt text-yellow-500 mt-1 mr-2"></i>
                            <span><strong>Pengumuman Hasil:</strong> 1 April 2025</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-6">
                <div class="bg-green-50 p-6 rounded-xl">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Syarat Calon</h3>
                    <ul class="text-gray-600 space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-user text-green-500 mt-1 mr-2"></i>
                            <span>Siswa aktif SMK Pustek Serpong kelas X atau XI</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-green-500 mt-1 mr-2"></i>
                            <span>Memiliki nilai akademik dan non-akademik yang baik</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-users text-green-500 mt-1 mr-2"></i>
                            <span>Memiliki pengalaman organisasi (nilai tambah)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-file-signature text-green-500 mt-1 mr-2"></i>
                            <span>Mendapat rekomendasi dari wali kelas dan guru BK</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-purple-50 p-6 rounded-xl">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Kontak Panitia</h3>
                    <ul class="text-gray-600 space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-user-tie text-purple-500 mt-1 mr-2"></i>
                            <span><strong>Ketua Panitia:</strong> Ahmad Fauzi (XII RPL)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-purple-500 mt-1 mr-2"></i>
                            <span><strong>Email:</strong> panitia.pemilu@smkpustek.sch.id</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone text-purple-500 mt-1 mr-2"></i>
                            <span><strong>Telepon:</strong> (021) 1234-5678</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Calon Ketua Section -->
<section id="vote" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">CALON KETUA & WAKIL KETUA OSIS</h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto mt-4"></div>
            <p class="text-gray-600 max-w-3xl mx-auto mt-4">
                Kenali lebih dekat para calon Ketua dan Wakil Ketua OSIS SMK Pustek Serpong Periode 2025-2026.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Calon 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                <div class="relative">
                    <!-- PERBAIKAN: Tambahkan fallback image -->
                    <img src="../assets/icantiipp.jpg" alt="Calon Ketua 1" class="w-full h-64 object-cover"
                        onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'">
                    <div
                        class="absolute top-4 right-4 bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                        PASLON 1
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Ahmad Fauzi</h3>
                    <p class="text-gray-600 mb-4">Calon Ketua OSIS</p>
                    <p class="text-gray-600 mb-4">Kelas: XII RPL</p>

                    <h4 class="text-lg font-bold text-gray-800 mb-2">Visi:</h4>
                    <p class="text-gray-600 mb-4">Mewujudkan OSIS yang inovatif, kreatif, dan berintegritas tinggi
                        dalam melayani siswa.</p>

                    <h4 class="text-lg font-bold text-gray-800 mb-2">Misi:</h4>
                    <ul class="text-gray-600 mb-6 space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Meningkatkan kualitas kegiatan ekstrakurikuler</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Mengoptimalkan peran OSIS sebagai wadah aspirasi siswa</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Mengembangkan program kerja yang bermanfaat bagi siswa</span>
                        </li>
                    </ul>


                </div>
            </div>

            <!-- Calon 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                <div class="relative">
                    <!-- PERBAIKAN: Gunakan URL gambar yang valid -->
                    <img src="../assets/icantiipp.jpg" alt="Calon Ketua 2" class="w-full h-64 object-cover"
                        onerror="this.src='https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'">
                    <div
                        class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                        PASLON 2
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Siti Rahma</h3>
                    <p class="text-gray-600 mb-4">Calon Ketua OSIS</p>
                    <p class="text-gray-600 mb-4">Kelas: XII AKL</p>

                    <h4 class="text-lg font-bold text-gray-800 mb-2">Visi:</h4>
                    <p class="text-gray-600 mb-4">Menjadikan OSIS sebagai organisasi yang progresif, inklusif, dan
                        berdaya saing.</p>

                    <h4 class="text-lg font-bold text-gray-800 mb-2">Misi:</h4>
                    <ul class="text-gray-600 mb-6 space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Memperkuat karakter kepemimpinan siswa</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Meningkatkan partisipasi siswa dalam kegiatan sekolah</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Mengembangkan program yang relevan dengan kebutuhan siswa</span>
                        </li>
                    </ul>


                </div>
            </div>

            <!-- Calon 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                <div class="relative">
                    <img src="../assets/icantiipp.jpg" alt="Calon Ketua 3" class="w-full h-64 object-cover"
                        onerror="this.src='https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'">
                    <div
                        class="absolute top-4 right-4 bg-purple-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                        PASLON 3
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Rizki Pratama</h3>
                    <p class="text-gray-600 mb-4">Calon Ketua OSIS</p>
                    <p class="text-gray-600 mb-4">Kelas: XII TKJ</p>

                    <h4 class="text-lg font-bold text-gray-800 mb-2">Visi:</h4>
                    <p class="text-gray-600 mb-4">Membangun OSIS yang dinamis, kolaboratif, dan berorientasi pada
                        prestasi.</p>

                    <h4 class="text-lg font-bold text-gray-800 mb-2">Misi:</h4>
                    <ul class="text-gray-600 mb-6 space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Meningkatkan kualitas program kerja OSIS</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Mempererat hubungan antar siswa dan guru</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Mengembangkan potensi siswa di berbagai bidang</span>
                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hasil Voting Section -->
<section id="hasil" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">HASIL VOTING SEMENTARA</h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto mt-4"></div>
            <p class="text-gray-600 max-w-3xl mx-auto mt-4">
                Pantau perkembangan hasil voting Pemilihan Ketua dan Wakil Ketua OSIS SMK Pustek Serpong Periode
                2025-2026.
            </p>
        </div>

        <div class="bg-gray-100 p-6 rounded-xl mb-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div>
                    <h3 class="text-xl font-bold text-gray-800">Statistik Voting</h3>
                    <p class="text-gray-600">Periode: 28-30 Maret 2025</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <p class="text-gray-600"><span class="font-bold">Total Pemilih:</span> 450 dari 600 siswa</p>
                    <p class="text-gray-600"><span class="font-bold">Persentase Partisipasi:</span> 75%</p>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <!-- Calon 1 -->
            <div class="bg-white p-6 rounded-xl shadow-md">
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
                    <div class="flex items-center mb-4 md:mb-0">
                        <div
                            class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            1
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Ahmad Fauzi</h3>
                            <p class="text-gray-600">Calon Ketua OSIS - XII RPL</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-blue-500">185 Suara</p>
                        <p class="text-gray-600">41.1%</p>
                    </div>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-4">
                    <div class="bg-blue-500 h-4 rounded-full" style="width: 41.1%"></div>
                </div>
            </div>

            <!-- Calon 2 -->
            <div class="bg-white p-6 rounded-xl shadow-md">
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
                    <div class="flex items-center mb-4 md:mb-0">
                        <div
                            class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            2
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Siti Rahma</h3>
                            <p class="text-gray-600">Calon Ketua OSIS - XII AKL</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-green-500">142 Suara</p>
                        <p class="text-gray-600">31.6%</p>
                    </div>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-4">
                    <div class="bg-green-500 h-4 rounded-full" style="width: 31.6%"></div>
                </div>
            </div>

            <!-- Calon 3 -->
            <div class="bg-white p-6 rounded-xl shadow-md">
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
                    <div class="flex items-center mb-4 md:mb-0">
                        <div
                            class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            3
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Rizki Pratama</h3>
                            <p class="text-gray-600">Calon Ketua OSIS - XII TKJ</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-purple-500">123 Suara</p>
                        <p class="text-gray-600">27.3%</p>
                    </div>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-4">
                    <div class="bg-purple-500 h-4 rounded-full" style="width: 27.3%"></div>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <p class="text-gray-600">Hasil ini akan diperbarui secara real-time selama periode pemilihan
                berlangsung.</p>
            <p class="text-gray-600 font-bold mt-2">Pengumuman hasil final akan dilakukan pada 1 April 2025.</p>
        </div>
    </div>
</section>
@endsection