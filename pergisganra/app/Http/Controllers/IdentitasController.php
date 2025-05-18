<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Guru; // Pastikan Model Guru ada ya

class IdentitasController extends Controller
{
    public function index()
    {
        $jumlahGuru = Guru::count(); // Hitung semua guru di tabel 'gurus'

        return view('/profil/identitas', compact('jumlahGuru'));
    }
}
