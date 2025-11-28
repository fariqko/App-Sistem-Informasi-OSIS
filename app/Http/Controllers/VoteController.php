<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\Periode;
use App\Models\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function index()
    {
        // Ambil periode aktif
        $periode = Periode::where('status', 1)->first();

        if (!$periode) {
            return view('vote', [
                'periode' => null,
                'kandidats' => []
            ]);
        }

        // Ambil kandidat berdasarkan periode aktif
        $kandidats = Kandidat::where('periode_id', $periode->id)
            ->with(['ketua.siswa', 'wakil.siswa'])
            ->get();

        return view('vote', compact('periode', 'kandidats'));
    }

    /**
     * Proses simpan vote
     */
    public function store(Request $request)
    {
        $request->validate([
            'kandidat_id' => 'required|exists:kandidats,id'
        ]);

        $user = Auth::user();

        // Ambil periode aktif
        $periode = Periode::where('status', 1)->first();

        if (!$periode) {
            return back()->with('error', 'Voting belum dibuka.');
        }

        // Cek apakah user sudah voting di periode ini
        $sudahVote = Vote::where('user_id', $user->id)
            ->where('periode_id', $periode->id)
            ->exists();

        if ($sudahVote) {
            return back()->with('error', 'Anda sudah melakukan voting pada periode ini.');
        }

        $kandidat = Kandidat::where('id', $request->kandidat_id)
            ->where('periode_id', $periode->id)
            ->first();

        if (!$kandidat) {
            return back()->with('error', 'Kandidat tidak valid untuk periode ini.');
        }

        // Simpan vote
        Vote::create([
            'user_id' => $user->id,
            'kandidat_id' => $kandidat->id,
            'periode_id' => $periode->id,
            'waktu_vote' => now(),
        ]);

        // Update jumlah suara kandidat
        $kandidat->increment('jumlah_suara');

        Auth::logout();

        return redirect('/thanks')->with('success', 'Voting berhasil!');
    }
}
