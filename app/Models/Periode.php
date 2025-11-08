<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{

    protected $fillable = [
        'nama_periode',
        'mulai',
        'selesai',
        'aktif',
    ];

    protected $casts = [
        'mulai' => 'date',
        'selesai' => 'date',
        'aktif' => 'boolean',
    ];

    protected static function booted()
    {
        static::saved(function ($record) {
            if ($record->aktif) {
                self::where('id', '!=', $record->id)
                    ->update(['aktif' => false]);
            }
        });
    }
}
