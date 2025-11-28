<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih Telah Melakukan Voting</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @keyframes pop {
            0% {
                transform: scale(0.6);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .pop-animation {
            animation: pop 0.5s ease-out;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-blue-600 to-indigo-700 text-white min-h-screen flex items-center justify-center">

    <div class="text-center max-w-lg px-6 pop-animation">

        <div class="mb-6">
            <svg class="w-28 h-28 mx-auto text-green-300" fill="none" stroke="currentColor"
                stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </div>

        <h1 class="text-4xl font-bold mb-4 drop-shadow-lg">
            Terima Kasih!
        </h1>

        <p class="text-lg opacity-90 leading-relaxed mb-6">
            Voting kamu telah berhasil dicatat.
            Kamu sudah otomatis logout dari sistem untuk menjaga keamanan dan kejujuran proses pemilihan.
        </p>

        <a href="/login"
            class="inline-block bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg shadow-lg hover:bg-gray-100 transition">
            Login Kembali
        </a>

        <div class="mt-10 text-sm opacity-70">
            © {{ date('Y') }} Sistem Voting OSIS — SMK Anda
        </div>
    </div>

</body>

</html>