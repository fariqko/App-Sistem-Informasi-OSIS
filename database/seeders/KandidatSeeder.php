<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kandidat;
use App\Models\AnggotaOsis;
use Illuminate\Support\Str;

class KandidatSeeder extends Seeder
{
    public function run(): void
    {
        $anggota = AnggotaOsis::with('siswa')->inRandomOrder()->get();

        if ($anggota->count() < 2) {
            $this->command->warn('⚠️ Jumlah anggota OSIS kurang untuk membuat kandidat.');
            return;
        }

        $pasangan = $anggota->chunk(2);

        foreach ($pasangan as $pair) {
            if ($pair->count() < 2) continue;

            $pair = $pair->values();

            $ketua = $pair->get(0);
            $wakil = $pair->get(1);

            if (!$ketua || !$wakil) continue;

            Kandidat::create([
                'ketua_id' => $ketua->id,
                'wakil_id' => $wakil->id,
                'visi' => 'Menjadikan OSIS sebagai organisasi yang aktif, kreatif, dan berintegritas.',
                'misi' => "1. Meningkatkan partisipasi siswa.\n"
                    . "2. Membangun solidaritas.\n"
                    . "3. Mengembangkan program kreatif.",
                'foto' => 'pasangan_' . Str::slug(optional($ketua->siswa)->nama . '_' . optional($wakil->siswa)->nama) . '.jpg',
                'jumlah_suara' => 0,
            ]);
        }

        $this->command->info('✅ Kandidat berhasil dibuat!');
    }
}
