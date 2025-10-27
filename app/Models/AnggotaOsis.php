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
        'jabatan',
        'foto',
        'tanggal_bergabung',
        'status',
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
}
