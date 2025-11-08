<?php

namespace App\Models;

use App\Traits\DeletesFileOnModelDelete;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasFactory, DeletesFileOnModelDelete;

    protected $fillable = [
        'ketua_id',
        'wakil_id',
        'visi',
        'misi',
        'foto',
        'jumlah_suara',
    ];

    protected array $fileFields = ['foto'];

    public function ketua()
    {
        return $this->belongsTo(AnggotaOsis::class, 'ketua_id');
    }

    public function wakil()
    {
        return $this->belongsTo(AnggotaOsis::class, 'wakil_id');
    }
}
