<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\Periode;
use App\Models\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{
    public function index()
    {
        // Cache periode aktif 5 menit (biar nggak query DB tiap akses)
        $periode = Cache::remember('periode_aktif', 300, function () {
            return Periode::where('status', 1)->first();
        });

        if (!$periode) {
            return view('vote', [
                'periode' => null,
                'kandidats' => collect()
            ]);
        }

        $kandidats = Kandidat::where('periode_id', $periode->id)
            ->with(['ketua.siswa', 'wakil.siswa'])
            ->get();

        return view('vote', compact('periode', 'kandidats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kandidat_id' => 'required|exists:kandidats,id'
        ]);

        $user = Auth::user();

        // Ambil periode aktif sekali saja + cache
        $periode = Cache::remember('periode_aktif', 300, function () {
            return Periode::where('status', 1)->first();
        });

        if (!$periode) {
            return back()->with('error', 'Voting belum dibuka.');
        }

        // Cek apakah user sudah vote di periode ini
        $sudahVote = Vote::where('user_id', $user->id)
            ->where('periode_id', $periode->id)
            ->exists();

        if ($sudahVote) {
            return back()->with('error', 'Kamu sudah voting di periode ini!');
        }

        // Ambil kandidat + pastikan milik periode aktif (PAKAI RELASI!)
        $kandidat = Kandidat::where('id', $request->kandidat_id)
            ->where('periode_id', $periode->id)
            ->first();

        if (!$kandidat) {
            return back()->with('error', 'Kandidat tidak valid.');
        }

        // Simpan vote dalam transaksi (biar aman kalau error)
        DB::transaction(function () use ($user, $kandidat, $periode) {
            Vote::create([
                'user_id' => $user->id,
                'kandidat_id' => $kandidat->id,
                'periode_id' => $periode->id,
                'waktu_vote' => now(),
            ]);

            $kandidat->increment('jumlah_suara');
        });

        Auth::logout();

        return redirect('/thanks')->with('success', 'Terima kasih! Suara kamu telah direkam.');
    }
}
