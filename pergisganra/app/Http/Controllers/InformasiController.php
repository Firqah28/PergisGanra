<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;

class InformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::all();
        return view('informasi.index', compact('informasi'));
    }

public function showInformasi()
{
    $informasi = Informasi::all(); // Fetch all records from the 'informasi' table
    return view('informasi', compact('informasi')); // Pass the data to the view
}
}
