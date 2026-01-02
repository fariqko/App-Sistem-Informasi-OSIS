<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\AnggotaOsis;
use App\Models\Periode;

class AnggotaOsisSeeder extends Seeder
{
    public function run(): void
    {
        $periodeAktif = Periode::where('status', true)->firstOrFail();

        // Daftar jabatan BPH (harus unik)
        $bphJabatan = [
            'Ketua Umum',
            'Wakil Ketua',
            'Sekretaris 1',
            'Sekretaris 2',
            'Bendahara 1',
            'Bendahara 2'
        ];

        foreach ($bphJabatan as $jabatan) {
            $siswa = Siswa::whereDoesntHave(
                'anggotaOsis',
                fn($q) =>
                $q->where('periode_id', $periodeAktif->id)
            )->inRandomOrder()->first();

            if ($siswa) {
                AnggotaOsis::create([
                    'siswa_id'          => $siswa->id,
                    'periode_id'        => $periodeAktif->id,
                    'jabatan'           => $jabatan,
                    'bagian'            => 'BPH',
                    'tanggal_bergabung' => now()->subDays(rand(10, 100)),
                ]);
            }
        }

        // Sekbid 1 sampai 8
        $sekbidList = array_slice([
            'Sekbid 1',
            'Sekbid 2',
            'Sekbid 3',
            'Sekbid 4',
            'Sekbid 5',
            'Sekbid 6',
            'Sekbid 7',
            'Sekbid 8',
        ], 0, 8);

        foreach ($sekbidList as $index => $sekbid) {
            // 1. Ketua Sekbid
            $ketua = Siswa::whereDoesntHave(
                'anggotaOsis',
                fn($q) =>
                $q->where('periode_id', $periodeAktif->id)
            )->inRandomOrder()->first();

            if ($ketua) {
                AnggotaOsis::create([
                    'siswa_id'          => $ketua->id,
                    'periode_id'        => $periodeAktif->id,
                    'jabatan'           => "Ketua {$sekbid}",
                    'bagian'            => $sekbid,
                    'tanggal_bergabung' => now()->subDays(rand(10, 100)),
                ]);
            }

            // 2. Anggota Sekbid (bikin jabatan unik dengan nomor urut)
            $jumlahAnggota = rand(3, 7);
            $anggotaSiswas = Siswa::whereDoesntHave(
                'anggotaOsis',
                fn($q) =>
                $q->where('periode_id', $periodeAktif->id)
            )->inRandomOrder()->limit($jumlahAnggota)->get();

            foreach ($anggotaSiswas as $i => $siswa) {
                AnggotaOsis::create([
                    'siswa_id'          => $siswa->id,
                    'periode_id'        => $periodeAktif->id,
                    'jabatan'           => "Anggota {$sekbid} #" . ($i + 1), // ← UNIK!
                    'bagian'            => $sekbid,
                    'tanggal_bergabung' => now()->subDays(rand(10, 100)),
                ]);
            }
        }

        $total = AnggotaOsis::where('periode_id', $periodeAktif->id)->count();

        $this->command->info("Anggota OSIS berhasil dibuat!");
        $this->command->info("Periode: {$periodeAktif->nama_periode}");
        $this->command->info("Total anggota: {$total} orang");
    }
}
