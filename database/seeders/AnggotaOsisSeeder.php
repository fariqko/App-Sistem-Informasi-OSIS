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
        $periodeAktif = Periode::where('status', true)->first();

        if (!$periodeAktif) {
            $this->command->error("❌ Tidak ada periode aktif");
            return;
        }

        $siswa = Siswa::inRandomOrder()->limit(20)->get();

        foreach ($siswa as $row) {
            AnggotaOsis::create([
                'siswa_id' => $row->id,
                'jabatan' => 'Anggota',
                'tanggal_bergabung' => now(),
                'periode_id' => $periodeAktif->id,
            ]);
        }

        $this->command->info("✅ Anggota OSIS berhasil dibuat!");
    }
}
