<?php

namespace App\Http\Controllers;

use App\Models\Berita; // Pastikan model Berita di-import
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Pastikan facade Storage di-import

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menampilkan semua berita
        $berita = Berita::all();
        return view('berita.index', compact('berita'));
    }

    public function tampilkanBerita()
    {
        $berita = Berita::all();
        return view('welcome', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sumber' => 'nullable|url', // 👈 tambahan validasi sumber
        ]);

        // Menangani upload gambar jika ada
        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('images', 'public');
        }

        // Menyimpan berita ke database
        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $gambar,
            'penulis' => $request->penulis,
            'tanggal_rilis' => $request->tanggal_rilis,
            'sumber' => $request->sumber, // 👈 tambahkan ini
        ]);

        // Redirect ke halaman daftar berita dengan pesan sukses
        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'sumber' => 'nullable|url', // 👈 tambahan validasi sumber
        ]);

        $berita = Berita::findOrFail($id);

        // Menyimpan gambar baru jika di-upload
        $gambar = $berita->gambar;
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($gambar && Storage::exists('public/' . $gambar)) {
                Storage::delete('public/' . $gambar);
            }
            // Simpan gambar baru
            $gambar = $request->file('gambar')->store('images', 'public');
        }

        // Update berita dengan data baru
        $berita->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $gambar,
            'penulis' => $request->penulis,
            'tanggal_rilis' => $request->tanggal_rilis,
            'sumber' => $request->sumber, // 👈 tambahkan ini
        ]);

        // Redirect ke halaman daftar berita dengan pesan sukses
        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        // Hapus gambar jika ada
        if ($berita->gambar && Storage::exists('public/' . $berita->gambar)) {
            Storage::delete('public/' . $berita->gambar);
        }

        // Hapus berita dari database
        $berita->delete();

        // Redirect ke halaman daftar berita dengan pesan sukses
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }

    public function main()
    {
        $beritas = Berita::latest()->paginate(9);
        return view('mainberita', compact('beritas'));
    }

}
