<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{

    protected $fillable = [
        'nama_periode',
        'mulai',
        'selesai',
        'status',
    ];

    protected $casts = [
        'mulai' => 'date',
        'selesai' => 'date',
        'status' => 'boolean',
    ];

    protected static function booted()
    {
        static::saved(function ($record) {
            if ($record->status) {
                self::where('id', '!=', $record->id)
                    ->update(['status' => false]);
            }
        });
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($periode) {
            // Jika periode ini diaktifkan, non-aktifkan semua yang lain
            if ($periode->status == 1) {
                Periode::where('id', '!=', $periode->id)
                    ->update(['status' => 0]);
            }
        });
    }

    public function kandidats()
    {
        return $this->hasMany(Kandidat::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
