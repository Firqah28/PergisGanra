<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        // Ambil jumlah siswa
        $jumlahSiswa = Siswa::count();
    
        // Ambil daftar siswa
        $daftarSiswa = Siswa::select('nama', 'kelas')->get();
    
        // Kirim data ke view
        return view('profil.murid', compact('jumlahSiswa', 'daftarSiswa'));
    }
}
