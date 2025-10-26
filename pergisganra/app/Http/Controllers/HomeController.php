<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;

class HomeController extends Controller
{
    public function index()
    {
        $berita  = Berita::latest()->take(9)->get();   // untuk grid 3 kolom
        $galeris = Galeri::latest()->take(6)->get();

        return view('welcome', compact('berita', 'galeris'));
    }
}
