<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    use HasFactory;

    protected $table = 'buku_tamu';
    protected $primaryKey = 'id_tamu';

    protected $fillable = [
        'tanggal',
        'nama_tamu',
        'alamat',
        'no_hp',
        'bertemu',
        'kepentingan',
        'gambar',
    ];
}
