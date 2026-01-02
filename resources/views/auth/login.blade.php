<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap">

    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Script -->
    @vite([
    'resources/css/app.css',
    'resources/js/app.js',
    'resources/js/script.js',
    'resources/js/carouselBidang.js',
    ])
</head>

<body class="bg-gray-50 font-poppins">
    <!-- Login Section -->
    <section class="min-h-screen bg-gradient-to-br from-[#151A59] to-[#4E8794] py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Header -->
                <header class="text-center mb-12">
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">
                        LOGIN VOTING
                    </h1>
                    <div class="w-24 h-1 bg-yellow-400 mx-auto mb-4"></div>
                    <p class="text-xl text-gray-200 max-w-2xl mx-auto">
                        Masuk dengan akun siswa Anda untuk melakukan voting Pemilu OSIS SMK Pustek Serpong Periode 2025-2026
                    </p>
                </header>

                <div class="flex items-center justify-center">
                    <div class="w-full max-w-md">
                        <div class="bg-white rounded-2xl shadow-2xl p-8">
                            <!-- Login Form -->
                            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Masuk ke Sistem Voting</h2>

                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div>
                                    <x-input-label for="email" :value="__('Email')" icon="fas fa-envelope" />
                                    <x-text-input id="email" class="block mt-1 w-full placeholder-gray-500 focus:placeholder-gray-400" type="email" placeholder="Masukkan Email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" icon="fas fa-key" />

                                    <div class="relative" x-data="{ show: false }">

                                        <x-text-input
                                            id="password"
                                            class="block mt-1 w-full pr-12 placeholder-gray-500 focus:placeholder-gray-400"
                                            type="password"
                                            name="password"
                                            placeholder="Masukkan Password"
                                            required
                                            autocomplete="current-password"
                                            x-ref="passwordInput" />

                                        <button
                                            type="button"
                                            @click="show = !show; $refs.passwordInput.type = show ? 'text' : 'password'"
                                            class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-600 hover:text-gray-900">
                                            <i x-show="!show" class="fas fa-eye"></i>
                                            <i x-show="show" class="fas fa-eye-slash"></i>
                                        </button>
                                    </div>

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me and Forgot Password -->
                                <div class="mt-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                    <label for="remember_me" class="flex items-center cursor-pointer select-none">
                                        <input id="remember_me" type="checkbox" class="w-5 h-5 text-blue-600 border-2 border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition" name="remember">
                                        <span class="ml-3 text-sm font-medium text-gray-700">
                                            {{ __('Remember me') }}
                                        </span>
                                    </label>

                                    
                                </div>

                                <x-primary-button class="mt-5" icon="fas fa-sign-in-alt mr-2">
                                    {{ __('MASUK DAN VOTE') }}
                                </x-primary-button>
                            </form>

                            <!-- Info Box -->
                            <div class="mt-6 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                                <h3 class="font-semibold text-blue-800 mb-2">
                                    <i class="fas fa-info-circle mr-2"></i>
                                    Informasi Penting
                                </h3>
                                <ul class="text-sm text-blue-700 space-y-1">
                                    <li>• Setiap siswa hanya dapat melakukan voting satu kali</li>
                                    <li>• Voting tidak dapat dibatalkan setelah dikirim</li>
                                    <li>• Pastikan memilih dengan bijak dan bertanggung jawab</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>