<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#1e40af',
                        accent: '#f59e0b'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50">
    <!-- Header/Navbar -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <img src="assets/logo_pustek-removebg-preview.png" alt="" width="70px">
                <span class="text-xl font-bold text-blue-600">Pustek Inside</span>
            </div>

            <nav class="hidden md:flex space-x-8">
                <a href="#home" class="text-blue-600 font-semibold">Beranda</a>
                <a href="kegiatan/osis.html" class="text-gray-600 hover:text-blue-600">Tentang OSIS</a>
                <a href="ekskul/ekskul.html" class="text-gray-600 hover:text-blue-600">Ekstrakurikuler</a>
                <a href="#ekskul" class="text-gray-600 hover:text-blue-600">Daftar Ekstrakurikuler</a>
                <a href="kegiatan/kegiatan.html" class="text-gray-600 hover:text-blue-600">Kegiatan</a>
                <a href="#kontak" class="text-gray-600 hover:text-blue-600">Kontak</a>
            </nav>


        </div>
    </header>

    <!-- Hero Section - Blue Pastel Theme -->
    <section id="home"
        class="relative bg-gradient-to-br from-blue-200 via-indigo-200 to-purple-200 text-gray-800 py-20 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-10 left-10 w-72 h-72 bg-blue-300 opacity-20 rounded-full blur-3xl animate-pulse">
            </div>
            <div
                class="absolute bottom-10 right-10 w-96 h-96 bg-indigo-300 opacity-20 rounded-full blur-3xl animate-pulse delay-700">
            </div>
            <div
                class="absolute top-1/2 left-1/4 w-64 h-64 bg-purple-300 opacity-20 rounded-full blur-3xl animate-pulse delay-1000">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <!-- Left Content -->
                <div class="md:w-1/2 space-y-6">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center bg-white/60 backdrop-blur-sm rounded-full px-4 py-2 space-x-2 border border-blue-300/50 shadow-sm">
                        <span class="relative flex h-3 w-3">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                        </span>
                        <span class="text-sm font-medium text-blue-700">Informasi Ekstrakurikuler Lengkap</span>
                    </div>

                    <!-- Heading -->
                    <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight text-blue-900">
                        Daftar <span class="text-indigo-600">OSIS</span> &
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-indigo-500">
                            Ekskul
                        </span> Sekolahmu!
                    </h1>

                    <p class="text-xl md:text-2xl text-blue-800 font-light">
                        Dapatkan <span class="font-bold text-indigo-700">pengalaman menarik</span> dengan daftar osis
                        dan ekstrakurikuler
                    </p>

                    <!-- Input Form with Modern Design -->
                    <div class="bg-white/50 backdrop-blur-lg rounded-2xl p-6 border border-blue-200 shadow-xl">
                        <div class="flex flex-col sm:flex-row gap-3">
                            <!-- Search Input -->
                            <div
                                class="flex-1 bg-white rounded-xl px-5 py-4 flex items-center space-x-3 shadow-md group hover:shadow-lg transition-all duration-300 border border-blue-100">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                                <input type="text" placeholder="Cari ekstrakurikuler... (mis: Basket, Musik)"
                                    class="flex-1 outline-none text-gray-800 text-lg font-medium placeholder-gray-400"
                                    id="searchEkskul">
                            </div>

                            <!-- Search Button -->
                            <button
                                class="bg-gradient-to-r from-blue-400 to-indigo-500 text-white px-8 py-4 rounded-xl font-bold text-lg hover:from-blue-500 hover:to-indigo-600 transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105 transform whitespace-nowrap flex items-center justify-center space-x-2 group">
                                <span>Cari Ekskul</span>
                                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </div>

                        <!-- Trust Indicators -->
                        <div
                            class="mt-4 flex items-center justify-center sm:justify-start space-x-4 text-sm text-blue-700">
                            <div class="flex items-center space-x-1">
                                <svg class="w-4 h-4 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span>1000+ Siswa Bergabung</span>
                            </div>
                            <span class="text-blue-400">•</span>
                            <div class="flex items-center space-x-1">
                                <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Image with Creative Layout -->
                <div class="md:w-1/2 flex justify-center relative">
                    <!-- Decorative Elements -->
                    <div
                        class="absolute -top-6 -right-6 w-24 h-24 bg-blue-300 rounded-full opacity-40 blur-2xl animate-pulse">
                    </div>
                    <div
                        class="absolute -bottom-6 -left-6 w-32 h-32 bg-indigo-300 rounded-full opacity-40 blur-2xl animate-pulse delay-500">
                    </div>

                    <!-- Main Image Container -->
                    <div class="relative group">
                        <!-- Card Background -->
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-blue-300 to-indigo-400 rounded-3xl transform rotate-6 group-hover:rotate-3 transition-transform duration-500 opacity-40 blur-sm">
                        </div>

                        <!-- Image Card -->
                        <div
                            class="relative bg-white/40 backdrop-blur-sm rounded-3xl p-3 shadow-2xl transform -rotate-2 group-hover:rotate-0 transition-all duration-500 border border-blue-200">
                            <div class="relative overflow-hidden rounded-2xl">
                                <img src="assets/photo_studio-removebg-preview.png" alt="Siswa beraktivitas di sekolah"
                                    class="rounded-2xl w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-700">

                                <!-- Overlay Gradient -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-blue-900/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Wave -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                    fill="white" fill-opacity="0.3" />
            </svg>
        </div>
    </section>

    <style>
        @keyframes pulse {

            0%,
            100% {
                opacity: 0.1;
            }

            50% {
                opacity: 0.2;
            }
        }

        .delay-500 {
            animation-delay: 500ms;
        }

        .delay-700 {
            animation-delay: 700ms;
        }

        .delay-1000 {
            animation-delay: 1000ms;
        }
    </style>

    <!-- Menu Navigasi Cepat -->
    <section class="bg-white py-8 shadow-sm">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
                <div
                    class="flex flex-col items-center p-4 rounded-lg hover:bg-blue-50 transition duration-300 cursor-pointer">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-user-friends text-blue-600 text-xl"></i>
                    </div>
                    <span class="text-center font-medium">OSIS</span>
                </div>
                <div
                    class="flex flex-col items-center p-4 rounded-lg hover:bg-blue-50 transition duration-300 cursor-pointer">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-futbol text-blue-600 text-xl"></i>
                    </div>
                    <span class="text-center font-medium">Ekskul Olahraga</span>
                </div>
                <div
                    class="flex flex-col items-center p-4 rounded-lg hover:bg-blue-50 transition duration-300 cursor-pointer">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-paint-brush text-blue-600 text-xl"></i>
                    </div>
                    <span class="text-center font-medium">Ekskul Seni</span>
                </div>
                <div
                    class="flex flex-col items-center p-4 rounded-lg hover:bg-blue-50 transition duration-300 cursor-pointer">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-music text-blue-600 text-xl"></i>
                    </div>
                    <span class="text-center font-medium">Ekskul Musik</span>
                </div>
                <div
                    class="flex flex-col items-center p-4 rounded-lg hover:bg-blue-50 transition duration-300 cursor-pointer">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-flask text-blue-600 text-xl"></i>
                    </div>
                    <span class="text-center font-medium">Ekskul Sains</span>
                </div>
                <div
                    class="flex flex-col items-center p-4 rounded-lg hover:bg-blue-50 transition duration-300 cursor-pointer">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-2">
                        <i class="fas fa-ellipsis-h text-blue-600 text-xl"></i>
                    </div>
                    <span class="text-center font-medium">Semua Ekskul</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Profil Struktural OSIS -->
    <section class="py-12 bg-gradient-to-br from-green-50 to-blue-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-blue-800">Profil Struktural OSIS</h2>

            <div class="relative">
                <!-- Carousel Container -->
                <div class="overflow-hidden">
                    <div class="flex transition-transform duration-500 ease-in-out" id="carousel-struktur">
                        <!-- Slide 1 -->
                        <div class="w-full flex-shrink-0 px-2">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                <!-- Card 1 -->
                                <div
                                    class="bg-white rounded-2xl shadow-xl overflow-hidden transform hover:scale-105 transition duration-300">
                                    <div class="relative">
                                        <div
                                            class="absolute top-0 left-0 w-full h-32 bg-gradient-to-br from-yellow-400 via-green-500 to-blue-600 opacity-20">
                                        </div>
                                        <svg class="absolute top-4 left-4 w-full h-24" viewBox="0 0 200 100">
                                            <path d="M 20,80 Q 60,20 100,80" fill="none" stroke="#22c55e"
                                                stroke-width="8" />
                                            <path d="M 100,80 Q 140,20 180,80" fill="none" stroke="#eab308"
                                                stroke-width="8" />
                                            <path d="M 60,90 Q 100,60 140,90" fill="none" stroke="#ef4444"
                                                stroke-width="8" />
                                            <path d="M 80,95 Q 100,75 120,95" fill="none" stroke="#3b82f6"
                                                stroke-width="8" />
                                        </svg>
                                    </div>
                                    <div class="pt-32 pb-6 px-6">
                                        <div class="flex justify-center mb-4">
                                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                                                alt="Ketua OSIS"
                                                class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg">
                                        </div>
                                        <div class="text-center">
                                            <h3 class="text-xl font-bold text-gray-800 mb-1">AHMAD FAUZI</h3>
                                            <p class="text-sm text-blue-600 font-semibold mb-3">Ketua OSIS</p>
                                            <p class="text-xs text-gray-600 leading-relaxed">Memimpin seluruh kegiatan
                                                organisasi dan bertanggung jawab atas jalannya program kerja OSIS</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div
                                    class="bg-white rounded-2xl shadow-xl overflow-hidden transform hover:scale-105 transition duration-300">
                                    <div class="relative">
                                        <div
                                            class="absolute top-0 left-0 w-full h-32 bg-gradient-to-br from-green-500 via-blue-500 to-yellow-400 opacity-20">
                                        </div>
                                        <svg class="absolute top-4 left-4 w-full h-24" viewBox="0 0 200 100">
                                            <path d="M 20,80 Q 60,20 100,80" fill="none" stroke="#22c55e"
                                                stroke-width="8" />
                                            <path d="M 100,80 Q 140,20 180,80" fill="none" stroke="#eab308"
                                                stroke-width="8" />
                                            <path d="M 60,90 Q 100,60 140,90" fill="none" stroke="#ef4444"
                                                stroke-width="8" />
                                            <path d="M 80,95 Q 100,75 120,95" fill="none" stroke="#3b82f6"
                                                stroke-width="8" />
                                        </svg>
                                    </div>
                                    <div class="pt-32 pb-6 px-6">
                                        <div class="flex justify-center mb-4">
                                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                                                alt="Wakil Ketua"
                                                class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg">
                                        </div>
                                        <div class="text-center">
                                            <h3 class="text-xl font-bold text-gray-800 mb-1">SITI NURHALIZA</h3>
                                            <p class="text-sm text-blue-600 font-semibold mb-3">Wakil Ketua OSIS</p>
                                            <p class="text-xs text-gray-600 leading-relaxed">Membantu ketua dalam
                                                menjalankan program kerja dan mengkoordinasi seluruh seksi bidang</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 3 -->
                                <div
                                    class="bg-white rounded-2xl shadow-xl overflow-hidden transform hover:scale-105 transition duration-300">
                                    <div class="relative">
                                        <div
                                            class="absolute top-0 left-0 w-full h-32 bg-gradient-to-br from-blue-500 via-yellow-400 to-green-500 opacity-20">
                                        </div>
                                        <svg class="absolute top-4 left-4 w-full h-24" viewBox="0 0 200 100">
                                            <path d="M 20,80 Q 60,20 100,80" fill="none" stroke="#22c55e"
                                                stroke-width="8" />
                                            <path d="M 100,80 Q 140,20 180,80" fill="none" stroke="#eab308"
                                                stroke-width="8" />
                                            <path d="M 60,90 Q 100,60 140,90" fill="none" stroke="#ef4444"
                                                stroke-width="8" />
                                            <path d="M 80,95 Q 100,75 120,95" fill="none" stroke="#3b82f6"
                                                stroke-width="8" />
                                        </svg>
                                    </div>
                                    <div class="pt-32 pb-6 px-6">
                                        <div class="flex justify-center mb-4">
                                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                                                alt="Sekretaris"
                                                class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg">
                                        </div>
                                        <div class="text-center">
                                            <h3 class="text-xl font-bold text-gray-800 mb-1">BUDI SANTOSO</h3>
                                            <p class="text-sm text-blue-600 font-semibold mb-3">Sekretaris OSIS</p>
                                            <p class="text-xs text-gray-600 leading-relaxed">Mengelola administrasi
                                                organisasi, surat menyurat, dan dokumentasi kegiatan OSIS</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 4 -->
                                <div
                                    class="bg-white rounded-2xl shadow-xl overflow-hidden transform hover:scale-105 transition duration-300">
                                    <div class="relative">
                                        <div
                                            class="absolute top-0 left-0 w-full h-32 bg-gradient-to-br from-yellow-400 via-blue-500 to-green-500 opacity-20">
                                        </div>
                                        <svg class="absolute top-4 left-4 w-full h-24" viewBox="0 0 200 100">
                                            <path d="M 20,80 Q 60,20 100,80" fill="none" stroke="#22c55e"
                                                stroke-width="8" />
                                            <path d="M 100,80 Q 140,20 180,80" fill="none" stroke="#eab308"
                                                stroke-width="8" />
                                            <path d="M 60,90 Q 100,60 140,90" fill="none" stroke="#ef4444"
                                                stroke-width="8" />
                                            <path d="M 80,95 Q 100,75 120,95" fill="none" stroke="#3b82f6"
                                                stroke-width="8" />
                                        </svg>
                                    </div>
                                    <div class="pt-32 pb-6 px-6">
                                        <div class="flex justify-center mb-4">
                                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                                                alt="Bendahara"
                                                class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg">
                                        </div>
                                        <div class="text-center">
                                            <h3 class="text-xl font-bold text-gray-800 mb-1">DEWI LESTARI</h3>
                                            <p class="text-sm text-blue-600 font-semibold mb-3">Bendahara OSIS</p>
                                            <p class="text-xs text-gray-600 leading-relaxed">Mengelola keuangan
                                                organisasi dan membuat laporan pertanggungjawaban keuangan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- Informasi & Kegiatan Sekolah -->
    <section class="py-12 px-4 max-w-7xl mx-auto">
        <!-- Header dengan Tab Navigation -->
        <div class="mb-8">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900">INFORMASI & KEGIATAN SEKOLAH</h2>
                <a href="kegiatan/kegiatan.html"
                    class="hidden md:flex items-center space-x-2 text-blue-600 hover:text-blue-800 font-medium transition-colors">
                    <span>Lihat Semua</span>
                    <i class="fas fa-arrow-right text-sm"></i>
                </a>
            </div>
        </div>


        <!-- Tab Navigation -->
        <div class="flex items-center gap-3 border-b border-gray-200">
            <button class="px-5 py-2.5 font-semibold text-orange-500 border-b-2 border-orange-500 -mb-px">
                Informasi kegiatan
            </button>
            <button class="px-5 py-2.5 font-medium text-gray-600 hover:text-gray-900">
                +indeks
            </button>
            <button class="px-5 py-2.5 font-medium text-white bg-blue-900 rounded-t-lg">
                Ekstrakurikuler
            </button>
            <button class="px-5 py-2.5 font-medium text-gray-600 hover:text-gray-900">
                +indeks
            </button>
            <button class="px-5 py-2.5 font-medium text-white bg-gray-700 rounded-t-lg">
                Intrakurikuler
            </button>
            <button class="px-5 py-2.5 font-medium text-gray-600 hover:text-gray-900">
                +indeks
            </button>
        </div>
        </div>

        <!-- Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

            <!-- Card 1 - OLAHRAGA -->
            <article class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Kegiatan OSIS" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <span
                        class="inline-block px-3 py-1 text-xs font-semibold text-orange-600 bg-orange-50 rounded mb-2">
                        OLAHRAGA
                    </span>
                    <h3 class="font-bold text-gray-900 mb-2 line-clamp-2 hover:text-blue-600 cursor-pointer">
                        POPNAS dan PEPARPENAS 2025 Kobarkan Semangat...
                    </h3>
                    <div class="flex items-center text-sm text-gray-500 space-x-4 mb-1">
                        <span class="flex items-center">
                            <i class="far fa-calendar mr-1.5"></i>
                            Minggu, 02 November 2025
                        </span>
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="far fa-user mr-1.5"></i>
                        <span class="mr-3">Aldi Geri Lumban Tobing</span>
                        <i class="far fa-eye mr-1.5"></i>
                        <span>221</span>
                    </div>
                </div>
            </article>

            <!-- Card 2 - FOCUS -->
            <article class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="City Infrastructure" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <span
                        class="inline-block px-3 py-1 text-xs font-semibold text-orange-600 bg-orange-50 rounded mb-2">
                        FOCUS
                    </span>
                    <h3 class="font-bold text-gray-900 mb-2 line-clamp-2 hover:text-blue-600 cursor-pointer">
                        City Govt Quickly Handles Collapsed Embankments fo...
                    </h3>
                    <div class="flex items-center text-sm text-gray-500 space-x-4 mb-1">
                        <span class="flex items-center">
                            <i class="far fa-calendar mr-1.5"></i>
                            Minggu, 02 November 2025
                        </span>
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="far fa-user mr-1.5"></i>
                        <span class="mr-3">Aldi Geri Lumban Tobing</span>
                        <i class="far fa-eye mr-1.5"></i>
                        <span>430</span>
                    </div>
                </div>
            </article>

            <!-- Card 3 - POTRET JAKARTA -->
            <article class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Pentas Seni" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <span class="inline-block px-3 py-1 text-xs font-semibold text-red-600 bg-red-50 rounded mb-2">
                        KESENIAN
                    </span>
                    <h3 class="font-bold text-gray-900 mb-2 line-clamp-2 hover:text-blue-600 cursor-pointer">
                        Pentas Seni Ekskul Teater Sukses Menghibur Seluruh Siswa
                    </h3>
                    <div class="flex items-center text-sm text-gray-500 space-x-4 mb-1">
                        <span class="flex items-center">
                            <i class="far fa-calendar mr-1.5"></i>
                            Kamis, 22 Oktober 2025
                        </span>
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="far fa-user mr-1.5"></i>
                        <span class="mr-3">Admin OSIS</span>
                        <i class="far fa-eye mr-1.5"></i>
                        <span>312</span>
                    </div>
                </div>
            </article>

            <!-- Card 4 - PEMBANGUNAN -->
            <article class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Waduk" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <span
                        class="inline-block px-3 py-1 text-xs font-semibold text-orange-600 bg-orange-50 rounded mb-2">
                        PEMBANGUNAN
                    </span>
                    <h3 class="font-bold text-gray-900 mb-2 line-clamp-2 hover:text-blue-600 cursor-pointer">
                        Revitalisasi Waduk Giri Kencana Capai 54,6 Persen
                    </h3>
                    <div class="flex items-center text-sm text-gray-500 space-x-4 mb-1">
                        <span class="flex items-center">
                            <i class="far fa-calendar mr-1.5"></i>
                            Minggu, 02 November 2025
                        </span>
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="far fa-user mr-1.5"></i>
                        <span class="mr-3">Nurito</span>
                        <i class="far fa-eye mr-1.5"></i>
                        <span>193</span>
                    </div>
                </div>
            </article>

            <!-- Card 5 - LEGISLATIVE -->
            <article class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Council Meeting" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <span
                        class="inline-block px-3 py-1 text-xs font-semibold text-orange-600 bg-orange-50 rounded mb-2">
                        LEGISLATIVE
                    </span>
                    <h3 class="font-bold text-gray-900 mb-2 line-clamp-2 hover:text-blue-600 cursor-pointer">
                        Council Pushes Equalization and Improvement of...
                    </h3>
                    <div class="flex items-center text-sm text-gray-500 space-x-4 mb-1">
                        <span class="flex items-center">
                            <i class="far fa-calendar mr-1.5"></i>
                            Minggu, 02 November 2025
                        </span>
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="far fa-user mr-1.5"></i>
                        <span class="mr-3">Fakhrizal Fakhri</span>
                        <i class="far fa-eye mr-1.5"></i>
                        <span>203</span>
                    </div>
                </div>
            </article>

            <!-- Card 6 - COMMUNITY WELFARE -->
            <article class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Kegiatan Sosial" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <span
                        class="inline-block px-3 py-1 text-xs font-semibold text-orange-600 bg-orange-50 rounded mb-2">
                        COMMUNITY WELFARE
                    </span>
                    <h3 class="font-bold text-gray-900 mb-2 line-clamp-2 hover:text-blue-600 cursor-pointer">
                        At Ideafest 2025, Rano Outlines Strategy to Make...
                    </h3>
                    <div class="flex items-center text-sm text-gray-500 space-x-4 mb-1">
                        <span class="flex items-center">
                            <i class="far fa-calendar mr-1.5"></i>
                            Jumat, 15 Oktober 2025
                        </span>
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="far fa-user mr-1.5"></i>
                        <span class="mr-3">Admin OSIS</span>
                        <i class="far fa-eye mr-1.5"></i>
                        <span>267</span>
                    </div>
                </div>
            </article>

            <!-- Card 7 - JAKARTA HARI INI -->
            <article class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Event" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <span
                        class="inline-block px-3 py-1 text-xs font-semibold text-orange-600 bg-orange-50 rounded mb-2">
                        JAKARTA HARI INI
                    </span>
                    <h3 class="font-bold text-gray-900 mb-2 line-clamp-2 hover:text-blue-600 cursor-pointer">
                        Wali Kota Jakut Buka LDII Fair
                    </h3>
                    <div class="flex items-center text-sm text-gray-500 space-x-4 mb-1">
                        <span class="flex items-center">
                            <i class="far fa-calendar mr-1.5"></i>
                            Senin, 28 Oktober 2025
                        </span>
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="far fa-user mr-1.5"></i>
                        <span class="mr-3">Admin Sekolah</span>
                        <i class="far fa-eye mr-1.5"></i>
                        <span>156</span>
                    </div>
                </div>
            </article>

            <!-- Card 8 - PENGUMUMAN -->
            <article class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Fire Safety" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <span
                        class="inline-block px-3 py-1 text-xs font-semibold text-orange-600 bg-orange-50 rounded mb-2">
                        PENGUMUMAN
                    </span>
                    <h3 class="font-bold text-gray-900 mb-2 line-clamp-2 hover:text-blue-600 cursor-pointer">
                        Lomba Basket Antar Kelas Meriah, Kelas 12A Juara Umum
                    </h3>
                    <div class="flex items-center text-sm text-gray-500 space-x-4 mb-1">
                        <span class="flex items-center">
                            <i class="far fa-calendar mr-1.5"></i>
                            Rabu, 22 Oktober 2025
                        </span>
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="far fa-user mr-1.5"></i>
                        <span class="mr-3">Admin OSIS</span>
                        <i class="far fa-eye mr-1.5"></i>
                        <span>445</span>
                    </div>
                </div>
            </article>

            <!-- Card 9 - SOSIAL -->
            <article class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Sports" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <span class="inline-block px-3 py-1 text-xs font-semibold text-green-600 bg-green-50 rounded mb-2">
                        SOSIAL
                    </span>
                    <h3 class="font-bold text-gray-900 mb-2 line-clamp-2 hover:text-blue-600 cursor-pointer">
                        Bakti Sosial OSIS ke Panti Asuhan Harapan Bangsa
                    </h3>
                    <div class="flex items-center text-sm text-gray-500 space-x-4 mb-1">
                        <span class="flex items-center">
                            <i class="far fa-calendar mr-1.5"></i>
                            Jumat, 15 Oktober 2025
                        </span>
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="far fa-user mr-1.5"></i>
                        <span class="mr-3">Admin OSIS</span>
                        <i class="far fa-eye mr-1.5"></i>
                        <span>389</span>
                    </div>
                </div>
            </article>

        </div>


    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Tentang Kami</h3>
                    <p class="text-gray-400">Portal pendaftaran ekskul dan OSIS untuk siswa SMA SekolahKu. Wadah untuk
                        mengembangkan bakat dan minat siswa.</p>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Beranda</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Tentang OSIS</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Daftar Ekskul</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Kegiatan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Kontak</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Kontak Kami</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>Jl. Pendidikan No. 123, Jakarta</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-2"></i>
                            <span>(021) 1234-5678</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>osis@sekolahku.sch.id</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 transition duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 SekolahKu. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>

    </script>
</body>

</html>