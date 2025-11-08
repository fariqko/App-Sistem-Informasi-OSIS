<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tingkatList = ['X', 'XI', 'XII'];
        $jurusanList = ['TKJ', 'DKV', 'AK', 'TKR', 'TP', 'TSM', 'MP'];

        $kelasData = [];

        foreach ($tingkatList as $tingkat) {
            foreach ($jurusanList as $jurusan) {
                for ($i = 1; $i <= 6; $i++) {
                    $kelasData[] = [
                        'tingkat' => $tingkat,
                        'jurusan' => $jurusan,
                        'kode_kelas' => "{$tingkat} {$jurusan} {$i}",
                    ];
                }
            }
        }

        Kelas::insert($kelasData);

    }
}
