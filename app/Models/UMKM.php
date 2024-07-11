<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMKM extends Model
{
    protected $fillable = [
        'nama',
        'modal',
        'pemilik',
        'alamat',
        'website',
        'email',
        'kabkota_id',
        'rating',
        'kategori_umkm_id',
        'pembina_id',
        'foto',
    ];
}
