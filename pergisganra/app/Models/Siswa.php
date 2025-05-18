<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa'; // Nama tabel sesuai database
    public $timestamps = false; // Kalau tidak ada created_at & updated_at
}