<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\Siswa;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PemiluController extends Controller
{
    public function create(Request $request): View
    {
       {
            // === AMBIL DATA DINAMIS DARI DATABASE ===
            $totalSiswa  = Siswa::count();
            $sudahVote   = Vote::distinct('user_id')->count('user_id');
            $belumVote   = $totalSiswa - $sudahVote;
            $partisipasi = $totalSiswa > 0 ? round(($sudahVote / $totalSiswa) * 100) : 0;

            // Kirim data ke view login voting kamu
            return view('pages.pemilu', [   // ← GANTI DENGAN NAMA FILE BLADE KAMU YANG SEBENARNYA!
                'totalSiswa'  => $totalSiswa,
                'sudahVote'   => $sudahVote,
                'belumVote'   => $belumVote,
                'partisipasi' => $partisipasi,
            ]);
        }

        return  view('pages.pemilu');
    }
}
