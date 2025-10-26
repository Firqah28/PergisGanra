<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Tampilkan semua gambar di galeri.
     */
    public function index()
    {
        $galeris = Galeri::latest()->get();
        return view('galeri.index', compact('galeris'));
    }

    /**
     * Tampilkan form untuk upload gambar baru.
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Simpan gambar baru ke database dan storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        // Upload file gambar ke storage/public/galeri
        $path = $request->file('gambar')->store('galeri', 'public');

        // Simpan ke database
        Galeri::create([
            'judul' => $request->judul,
            'gambar' => $path,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Gambar berhasil ditambahkan!');
    }

    /**
     * Tampilkan form untuk mengedit gambar.
     */
    public function edit(Galeri $galeri)
    {
        return view('galeri.edit', compact('galeri'));
    }

    /**
     * Update gambar yang telah ada di database dan storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        // Cek jika ada gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if (Storage::disk('public')->exists($galeri->gambar)) {
                Storage::disk('public')->delete($galeri->gambar);
            }

            // Upload gambar baru
            $path = $request->file('gambar')->store('galeri', 'public');
        } else {
            // Jika tidak ada gambar baru, gunakan gambar lama
            $path = $galeri->gambar;
        }

        // Update data galeri
        $galeri->update([
            'judul' => $request->judul,
            'gambar' => $path,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Gambar berhasil diperbarui!');
    }

    /**
     * (Opsional) Hapus gambar dari galeri.
     */
    public function destroy(Galeri $galeri)
    {
        // Hapus file gambar dari storage
        if (Storage::disk('public')->exists($galeri->gambar)) {
            Storage::disk('public')->delete($galeri->gambar);
        }

        // Hapus data dari database
        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Gambar berhasil dihapus!');
    }

}
