<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Periode;

class PeriodeSeeder extends Seeder
{
    public function run(): void
    {
        Periode::create([
            'nama_periode' => '2024/2025',
            'status' => true,
        ]);

        Periode::create([
            'nama_periode' => '2023/2024',
            'status' => false,
        ]);
    }
}
