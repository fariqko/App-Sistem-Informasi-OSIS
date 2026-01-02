@extends('layouts.public')

@section('content')
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Content Area -->
            <div class="lg:w-8/12">
                <!-- Filter Tabs -->


                <!-- Kegiatan List -->
                <div class="space-y-8">
                    <!-- Kegiatan 1 -->
                    <article class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-all duration-300 animate-fade-in">
                        <div class="md:flex">
                            <div class="md:w-5/12">
                                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                    alt="Wajib Diperhatikan! Ini Daftar 10+ Alasan dan Motivasi Saat Interview"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 md:w-7/12">
                                <div class="flex items-center mb-3">
                                    <span class="inline-block px-3 py-1 text-xs font-semibold text-blue-600 bg-blue-100 rounded-full">SISWA</span>
                                    <span class="mx-2 text-gray-400">•</span>
                                    <span class="text-sm text-gray-500">5 November 2023</span>
                                </div>
                                <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 cursor-pointer">
                                    Wajib Diperhatikan! Ini Daftar 10+ Alasan dan Motivasi Saat Interview
                                </h2>
                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    Persiapan interview yang matang sangat penting untuk kesuksesan karir. Pelajari berbagai alasan dan motivasi yang bisa membantu Anda sukses dalam sesi interview.
                                </p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <i class="far fa-eye mr-1.5"></i>
                                        <span>1.2k dilihat</span>
                                    </div>
                                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 flex items-center">
                                        Baca Selengkapnya
                                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Kegiatan 2 -->
                    <article class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-all duration-300 animate-fade-in delay-100">
                        <div class="md:flex">
                            <div class="md:w-5/12">
                                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                    alt="Tentang OSIS: Sejarah Singkat dan Kepengurusan"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 md:w-7/12">
                                <div class="flex items-center mb-3">
                                    <span class="inline-block px-3 py-1 text-xs font-semibold text-green-600 bg-green-100 rounded-full">GURU</span>
                                    <span class="mx-2 text-gray-400">•</span>
                                    <span class="text-sm text-gray-500">3 November 2023</span>
                                </div>
                                <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 cursor-pointer">
                                    Tentang OSIS: Sejarah Singkat dan Kepengurusan
                                </h2>
                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    Organisasi Siswa Intra Sekolah atau OSIS adalah organisasi resmi di dalam sekolah. Organisasi ini memiliki sejarah panjang dan struktur kepengurusan yang jelas untuk mengelola berbagai kegiatan siswa.
                                </p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <i class="far fa-eye mr-1.5"></i>
                                        <span>980 dilihat</span>
                                    </div>
                                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 flex items-center">
                                        Baca Selengkapnya
                                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Kegiatan 3 -->
                    <article class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-all duration-300 animate-fade-in delay-200">
                        <div class="md:flex">
                            <div class="md:w-5/12">
                                <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                    alt="Apa Perlu Mengambil Tes IQ Online Resmi Bersertifikat?"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 md:w-7/12">
                                <div class="flex items-center mb-3">
                                    <span class="inline-block px-3 py-1 text-xs font-semibold text-purple-600 bg-purple-100 rounded-full">INFO KAMPUS</span>
                                    <span class="mx-2 text-gray-400">•</span>
                                    <span class="text-sm text-gray-500">1 November 2023</span>
                                </div>
                                <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 cursor-pointer">
                                    Apa Perlu Mengambil Tes IQ Online Resmi Bersertifikat?
                                </h2>
                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    Intelligence Quotient banyak diartikan sebagai standar kecerdasan. Padahal, tes ini hanya untuk mengukur kemampuan otak dalam aspek tertentu. Pelajari lebih lanjut tentang manfaat tes IQ bersertifikat.
                                </p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <i class="far fa-eye mr-1.5"></i>
                                        <span>1.5k dilihat</span>
                                    </div>
                                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 flex items-center">
                                        Baca Selengkapnya
                                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Kegiatan 4 -->
                    <article class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-all duration-300 animate-fade-in delay-300">
                        <div class="md:flex">
                            <div class="md:w-5/12">
                                <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                    alt="Mengenal Tingkatan Cumlaude dan Cara Meraih IPK Tinggi"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 md:w-7/12">
                                <div class="flex items-center mb-3">
                                    <span class="inline-block px-3 py-1 text-xs font-semibold text-purple-600 bg-purple-100 rounded-full">INFO KAMPUS</span>
                                    <span class="mx-2 text-gray-400">•</span>
                                    <span class="text-sm text-gray-500">28 Oktober 2023</span>
                                </div>
                                <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 cursor-pointer">
                                    Mengenal Tingkatan Cumlaude dan Cara Meraih IPK Tinggi
                                </h2>
                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    Cumlaude adalah istilah sebutan penghargaan dari bahasa latin. Predikat ini memiliki arti 'dengan pujian'. Pelajari berbagai tingkatan cumlaude dan strategi untuk meraih IPK tinggi.
                                </p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <i class="far fa-eye mr-1.5"></i>
                                        <span>2.1k dilihat</span>
                                    </div>
                                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 flex items-center">
                                        Baca Selengkapnya
                                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Pagination -->
                <div class="mt-12 flex justify-center">
                    <nav class="flex items-center space-x-2">
                        <a href="#" class="px-4 py-2 text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#" class="px-4 py-2 text-white bg-blue-600 border border-blue-600 rounded-lg">1</a>
                        <a href="#" class="px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">2</a>
                        <a href="#" class="px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">3</a>
                        <span class="px-2 text-gray-500">...</span>
                        <a href="#" class="px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">8</a>
                        <a href="#" class="px-4 py-2 text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:w-4/12">
                <!-- Kategori -->
                <div class="bg-white rounded-xl shadow-sm p-6 mb-8 animate-fade-in delay-400">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Kategori Kegiatan</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="flex justify-between items-center text-gray-700 hover:text-blue-600 transition">
                                <span>Semua Kegiatan</span>
                                <span class="bg-blue-100 text-blue-600 text-xs font-medium px-2 py-1 rounded-full">24</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex justify-between items-center text-gray-700 hover:text-blue-600 transition">
                                <span>Kegiatan OSIS</span>
                                <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">8</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex justify-between items-center text-gray-700 hover:text-blue-600 transition">
                                <span>Ekstrakurikuler</span>
                                <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">6</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex justify-between items-center text-gray-700 hover:text-blue-600 transition">
                                <span>Lomba & Kompetisi</span>
                                <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex justify-between items-center text-gray-700 hover:text-blue-600 transition">
                                <span>Seminar & Workshop</span>
                                <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex justify-between items-center text-gray-700 hover:text-blue-600 transition">
                                <span>Kegiatan Sosial</span>
                                <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">2</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Kegiatan Terpopuler -->
                <div class="bg-white rounded-xl shadow-sm p-6 mb-8 animate-fade-in delay-400">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Kegiatan Terpopuler</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-16 h-16 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
                                    alt="POPNAS dan PEPARPENAS 2025"
                                    class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-900 text-sm hover:text-blue-600 cursor-pointer line-clamp-2">
                                    POPNAS dan PEPARPENAS 2025 Kobarkan Semangat...
                                </h4>
                                <div class="flex items-center text-xs text-gray-500 mt-1">
                                    <span>2 Nov 2023</span>
                                    <span class="mx-1">•</span>
                                    <span>1.2k dilihat</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-16 h-16 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
                                    alt="Pentas Seni Ekskul Teater"
                                    class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-900 text-sm hover:text-blue-600 cursor-pointer line-clamp-2">
                                    Pentas Seni Ekskul Teater Sukses Menghibur Seluruh Siswa
                                </h4>
                                <div class="flex items-center text-xs text-gray-500 mt-1">
                                    <span>28 Okt 2023</span>
                                    <span class="mx-1">•</span>
                                    <span>980 dilihat</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-16 h-16 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
                                    alt="Bakti Sosial OSIS"
                                    class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-900 text-sm hover:text-blue-600 cursor-pointer line-clamp-2">
                                    Bakti Sosial OSIS ke Panti Asuhan Harapan Bangsa
                                </h4>
                                <div class="flex items-center text-xs text-gray-500 mt-1">
                                    <span>25 Okt 2023</span>
                                    <span class="mx-1">•</span>
                                    <span>850 dilihat</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection