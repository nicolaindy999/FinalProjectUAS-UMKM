<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriUMKM extends Model
{
    use HasFactory;

    protected $table = 'kategori_umkms'; 

    protected $fillable = [
        'nama',
    ];

    public $timestamps = true;
}
