<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnggotaOsis extends Model
{
    use HasFactory;

    protected $table = 'anggota_osis';

    protected $fillable = [
        'siswa_id',
        'periode_id',
        'jabatan',
        'bagian',
        'tanggal_bergabung',
    ];

    protected $casts = [
        'tanggal_bergabung' => 'date',
    ];

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    public function kandidats(): HasMany
    {
        return $this->hasMany(Kandidat::class, 'anggota_id');
    }

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    public function kandidatKetua()
    {
        return $this->hasOne(Kandidat::class, 'ketua_id');
    }

    // Relasi: Anggota OSIS ini pernah jadi WAKIL di kandidat mana saja
    public function kandidatWakil()
    {
        return $this->hasOne(Kandidat::class, 'wakil_id');
    }

    // Bonus: cek apakah anggota ini SUDAH jadi kandidat (ketua ATAU wakil) di periode tertentu
    public function sudahJadiKandidatDiPeriode($periodeId)
    {
        return $this->kandidatKetua()->where('periode_id', $periodeId)->exists()
            || $this->kandidatWakil()->where('periode_id', $periodeId)->exists();
    }
}
