@extends('layouts.public')

@section('content')  
    <!-- Hero Section Ekstrakurikuler -->


    <!-- Daftar Ekstrakurikuler Section -->
    <section id="daftar-ekskul" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Daftar Ekstrakurikuler SMK Pustek</h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mt-4"></div>
                <p class="text-gray-600 max-w-3xl mx-auto mt-4">
                    Pilih ekstrakurikuler yang sesuai dengan minat dan bakat Anda. Setiap ekskul memiliki jadwal kegiatan yang telah ditentukan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Ekskul 1: Paskibra -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">Paskibra</h3>
                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm font-semibold">Senin</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Mengembangkan kedisiplinan, patriotisme, dan keterampilan baris-berbaris. Membentuk karakter siswa yang tangguh dan cinta tanah air.
                        </p>
                        <div class="flex items-center text-gray-500">
                            <i class="fas fa-clock mr-2"></i>
                            <span class="text-sm">15.30 - 17.30 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul 2: PMR -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">PMR</h3>
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold">Selasa</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Palang Merah Remaja mengajarkan pertolongan pertama, kesehatan, dan kepedulian sosial. Membentuk siswa yang siap membantu sesama.
                        </p>
                        <div class="flex items-center text-gray-500">
                            <i class="fas fa-clock mr-2"></i>
                            <span class="text-sm">15.00 - 17.00 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul 3: Pramuka -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">Pramuka</h3>
                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-semibold">Rabu</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Gerakan kepanduan yang mengembangkan karakter, keterampilan hidup, dan kepemimpinan. Kegiatan outdoor dan pengembangan diri.
                        </p>
                        <div class="flex items-center text-gray-500">
                            <i class="fas fa-clock mr-2"></i>
                            <span class="text-sm">14.30 - 17.00 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul 4: Rohis -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">Rohani Islam</h3>
                            <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm font-semibold">Kamis</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Mengembangkan pemahaman dan pengamalan ajaran Islam. Kegiatan kajian, tadarus, dan pengembangan karakter islami.
                        </p>
                        <div class="flex items-center text-gray-500">
                            <i class="fas fa-clock mr-2"></i>
                            <span class="text-sm">15.00 - 16.30 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul 5: Futsal -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">Futsal</h3>
                            <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-sm font-semibold">Jumat</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Mengembangkan kemampuan fisik, teknik bermain futsal, dan kerja sama tim. Meningkatkan sportivitas dan kesehatan.
                        </p>
                        <div class="flex items-center text-gray-500">
                            <i class="fas fa-clock mr-2"></i>
                            <span class="text-sm">15.30 - 17.30 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul 6: Basket -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">Basket</h3>
                            <span class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-sm font-semibold">Sabtu</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Melatih keterampilan teknik dasar basket, strategi permainan, dan kerja sama tim. Mengikuti berbagai kompetisi.
                        </p>
                        <div class="flex items-center text-gray-500">
                            <i class="fas fa-clock mr-2"></i>
                            <span class="text-sm">08.00 - 11.00 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul 7: Voli -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">Voli</h3>
                            <span class="bg-pink-100 text-pink-600 px-3 py-1 rounded-full text-sm font-semibold">Senin</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Mengembangkan teknik dasar voli, strategi permainan, dan kerja sama tim. Meningkatkan koordinasi dan refleks.
                        </p>
                        <div class="flex items-center text-gray-500">
                            <i class="fas fa-clock mr-2"></i>
                            <span class="text-sm">15.00 - 17.00 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul 8: Tari Tradisional -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">Tari Tradisional</h3>
                            <span class="bg-teal-100 text-teal-600 px-3 py-1 rounded-full text-sm font-semibold">Selasa</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Melestarikan dan mengembangkan seni tari tradisional Indonesia. Mempelajari berbagai tarian daerah dengan properti.
                        </p>
                        <div class="flex items-center text-gray-500">
                            <i class="fas fa-clock mr-2"></i>
                            <span class="text-sm">15.30 - 17.30 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul 9: Band -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">Band</h3>
                            <span class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-sm font-semibold">Rabu</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Mengembangkan bakat musik dan vokal. Belajar memainkan berbagai alat musik dan tampil dalam berbagai event sekolah.
                        </p>
                        <div class="flex items-center text-gray-500">
                            <i class="fas fa-clock mr-2"></i>
                            <span class="text-sm">15.00 - 17.00 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul 10: Teater -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">Teater</h3>
                            <span class="bg-cyan-100 text-cyan-600 px-3 py-1 rounded-full text-sm font-semibold">Kamis</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Mengembangkan kemampuan akting, public speaking, dan ekspresi seni peran. Menghasilkan pertunjukan drama berkualitas.
                        </p>
                        <div class="flex items-center text-gray-500">
                            <i class="fas fa-clock mr-2"></i>
                            <span class="text-sm">15.30 - 17.30 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul 11: Jurnalistik -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">Jurnalistik</h3>
                            <span class="bg-lime-100 text-lime-600 px-3 py-1 rounded-full text-sm font-semibold">Jumat</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Melatih keterampilan menulis, fotografi, dan penyiaran. Mengelola majalah dinding dan media sosial sekolah.
                        </p>
                        <div class="flex items-center text-gray-500">
                            <i class="fas fa-clock mr-2"></i>
                            <span class="text-sm">14.00 - 16.00 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul 12: Robotik -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">Robotik</h3>
                            <span class="bg-amber-100 text-amber-600 px-3 py-1 rounded-full text-sm font-semibold">Sabtu</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Mengembangkan keterampilan pemrograman, elektronika, dan mekanika. Merancang dan membangun robot untuk kompetisi.
                        </p>
                        <div class="flex items-center text-gray-500">
                            <i class="fas fa-clock mr-2"></i>
                            <span class="text-sm">09.00 - 12.00 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul 13: KIR -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">KIR</h3>
                            <span class="bg-emerald-100 text-emerald-600 px-3 py-1 rounded-full text-sm font-semibold">Senin</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Karya Ilmiah Remaja mengembangkan kemampuan penelitian ilmiah. Menghasilkan karya inovatif untuk lomba nasional.
                        </p>
                        <div class="flex items-center text-gray-500">
                            <i class="fas fa-clock mr-2"></i>
                            <span class="text-sm">15.00 - 17.00 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul 14: English Club -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">English Club</h3>
                            <span class="bg-violet-100 text-violet-600 px-3 py-1 rounded-full text-sm font-semibold">Selasa</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Meningkatkan kemampuan berbahasa Inggris melalui diskusi, debat, dan presentasi. Persiapan untuk kompetisi bahasa.
                        </p>
                        <div class="flex items-center text-gray-500">
                            <i class="fas fa-clock mr-2"></i>
                            <span class="text-sm">15.00 - 16.30 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Ekskul 15: Fotografi -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-800">Fotografi</h3>
                            <span class="bg-rose-100 text-rose-600 px-3 py-1 rounded-full text-sm font-semibold">Rabu</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Mengembangkan keterampilan fotografi dan editing. Mendokumentasikan kegiatan sekolah dan mengikuti pameran foto.
                        </p>
                        <div class="flex items-center text-gray-500">
                            <i class="fas fa-clock mr-2"></i>
                            <span class="text-sm">15.30 - 17.30 WIB</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tujuan & Manfaat Section -->
    <section id="tujuan" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Tujuan & Manfaat Ekstrakurikuler</h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mt-4"></div>
                <p class="text-gray-600 max-w-3xl mx-auto mt-4">
                    Ekstrakurikuler di SMK Pustek Serpong memiliki peran strategis dalam membentuk siswa yang berkarakter, kreatif, dan berprestasi.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Tujuan -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-bullseye text-blue-600 mr-3"></i>
                        Tujuan Ekstrakurikuler
                    </h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span class="text-gray-700">Mengembangkan bakat, minat, dan kreativitas siswa</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span class="text-gray-700">Membentuk karakter dan kepribadian yang positif</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span class="text-gray-700">Meningkatkan kemampuan sosial dan kerjasama tim</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span class="text-gray-700">Mengasah keterampilan kepemimpinan dan organisasi</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span class="text-gray-700">Menyediakan wadah untuk menyalurkan energi positif</span>
                        </li>
                    </ul>
                </div>

                <!-- Manfaat -->
                <div class="bg-gradient-to-br from-yellow-50 to-orange-50 p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-chart-line text-yellow-600 mr-3"></i>
                        Manfaat Ekstrakurikuler
                    </h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mt-1 mr-3"></i>
                            <span class="text-gray-700">Meningkatkan rasa percaya diri dan harga diri</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mt-1 mr-3"></i>
                            <span class="text-gray-700">Mengembangkan soft skills yang dibutuhkan di dunia kerja</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mt-1 mr-3"></i>
                            <span class="text-gray-700">Membantu menemukan passion dan minat karir</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mt-1 mr-3"></i>
                            <span class="text-gray-700">Meningkatkan prestasi akademik melalui pengelolaan waktu</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mt-1 mr-3"></i>
                            <span class="text-gray-700">Membangun jejaring sosial yang positif</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Sistem Pengelolaan Section -->
    <section id="pengelolaan" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Sistem Pengelolaan Ekstrakurikuler</h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mt-4"></div>
                <p class="text-gray-600 max-w-3xl mx-auto mt-4">
                    Ekstrakurikuler di SMK Pustek Serpong dikelola dengan sistem yang terstruktur untuk memastikan kualitas dan keberlanjutan program.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="p-6">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-calendar-alt text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Jadwal Kegiatan</h3>
                        <p class="text-gray-600">
                            Setiap ekstrakurikuler memiliki jadwal tetap yang terintegrasi dengan kalender akademik sekolah. Kegiatan biasanya dilaksanakan setelah jam pelajaran berakhir.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="p-6">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-users text-green-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Pembina & Pelatih</h3>
                        <p class="text-gray-600">
                            Setiap ekstrakurikuler didampingi oleh guru pembina dan/atau pelatih profesional yang kompeten di bidangnya untuk memastikan kualitas pembelajaran.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="p-6">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-clipboard-check text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Evaluasi & Penilaian</h3>
                        <p class="text-gray-600">
                            Sistem evaluasi berkala dilakukan untuk memantau perkembangan peserta. Prestasi dalam ekstrakurikuler juga dicatat dalam rapor siswa.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="mt-12 bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Prinsip Pengelolaan</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start">
                        <i class="fas fa-handshake text-blue-500 text-xl mt-1 mr-4"></i>
                        <div>
                            <h4 class="font-semibold text-gray-800">Partisipasi Sukarela</h4>
                            <p class="text-gray-600 mt-1">Siswa bebas memilih ekstrakurikuler sesuai minat tanpa paksaan.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-balance-scale text-green-500 text-xl mt-1 mr-4"></i>
                        <div>
                            <h4 class="font-semibold text-gray-800">Keseimbangan</h4>
                            <p class="text-gray-600 mt-1">Kegiatan dirancang seimbang dengan beban akademik siswa.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-shield-alt text-yellow-500 text-xl mt-1 mr-4"></i>
                        <div>
                            <h4 class="font-semibold text-gray-800">Keamanan & Keselamatan</h4>
                            <p class="text-gray-600 mt-1">Seluruh kegiatan dilaksanakan dengan memperhatikan aspek keamanan.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-chart-bar text-purple-500 text-xl mt-1 mr-4"></i>
                        <div>
                            <h4 class="font-semibold text-gray-800">Pengembangan Berkelanjutan</h4>
                            <p class="text-gray-600 mt-1">Program dirancang untuk pengembangan jangka panjang siswa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection