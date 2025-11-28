<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Voting Pemilihan Calon Ketua OSIS') }}
        </h2>
    </x-slot>

    <div class="py-6 sm:py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Alert --}}
            @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg text-sm sm:text-base shadow-sm">
                {{ session('success') }}
            </div>
            @endif

            @if (session('error'))
            <div class="mb-4 p-4 bg-red-100 text-red-800 border border-red-300 rounded-lg text-sm sm:text-base shadow-sm">
                {{ session('error') }}
            </div>
            @endif

            {{-- Cek periode --}}
            @if (!$periode)
            <div class="p-6 text-center bg-yellow-100 text-yellow-800 border border-yellow-300 rounded-lg text-sm sm:text-base shadow-sm">
                Voting belum dibuka.
            </div>

            @else
            <h3 class="text-lg sm:text-xl font-semibold text-white mb-5 sm:mb-6">
                Periode: {{ $periode->nama_periode }}
            </h3>

            {{-- Grid Kandidat --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach ($kandidats as $kandidat)
                <div class="backdrop-blur bg-white/70 border border-white/40 shadow-xl rounded-2xl overflow-hidden transition transform hover:scale-[1.02] hover:shadow-2xl duration-300">

                    {{-- Foto Kandidat --}}
                    <img src="{{ asset('storage/' . $kandidat->foto) }}"
                        class="w-full h-44 sm:h-52 object-cover"
                        alt="Foto Kandidat">

                    <div class="p-5">

                        {{-- Nama Pasangan --}}
                        <h4 class="text-lg font-bold mb-1 text-gray-800">
                            {{ $kandidat->ketua->siswa->nama }} & {{ $kandidat->wakil->siswa->nama }}
                        </h4>

                        <p class="text-sm text-gray-600 mb-3">
                            Pasangan Ketua & Wakil OSIS
                        </p>

                        {{-- Visi --}}
                        <p class="text-gray-700 text-sm whitespace-pre-line mb-4 leading-relaxed">
                            <strong class="font-semibold text-indigo-700">Visi:</strong><br>
                            {{ $kandidat->visi }}
                        </p>

                        {{-- Form Vote --}}
                        <form action="{{ route('vote.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="kandidat_id" value="{{ $kandidat->id }}">

                            <button
                                class="w-full bg-indigo-600 hover:bg-indigo-700 active:scale-95 text-white py-3 rounded-xl transition font-semibold shadow-md">
                                Pilih Kandidat Ini
                            </button>
                        </form>

                    </div>

                </div>
                @endforeach

            </div>
            @endif

        </div>
    </div>
</x-app-layout>