<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';  // Pastikan nama tabel sesuai dengan yang ada di database
    protected $fillable = [
        'nama', 'foto', 'mata_pelajaran', 'deskripsi', 'prestasi'
    ];
    protected $casts = [
        'prestasi' => 'array', // Menyimpan prestasi sebagai array
    ];
}
