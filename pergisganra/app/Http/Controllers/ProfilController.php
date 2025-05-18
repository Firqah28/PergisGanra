<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class ProfilController extends Controller
{
    public function identitas()
    {
        return view('profil.identitas');
    }

    public function sejarah()
    {
        return view('profil.sejarah');
    }

    public function index()
    {
        $jumlahGuru = Guru::count();

        return view('identitas', compact('jumlahGuru'));
    }
}
