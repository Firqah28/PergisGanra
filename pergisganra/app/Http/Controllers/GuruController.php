<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
class GuruController extends Controller
{
        public function index()
    {
        $gurus = Guru::all();
        return view('guru.index', compact('gurus'));
    }

    public function tampilkanGuru()
    {
        $gurus = Guru::all();
        return view('profil.guru', compact('gurus'));
    }

        public function indexx()
    {
        $gurus = Guru::all();
        return view('guru.index', compact('gurus'));
    }

    public function create()
{
    return view('guru.create');
}

    public function store(Request $request)
    {
            $request->validate([
                'nama' => 'required',
                'mata_pelajaran' => 'required',
                'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            $foto = null;
            if ($request->hasFile('foto')) {
                $foto = $request->file('foto')->store('guru', 'public');
            }

            Guru::create([
                'nama' => $request->nama,
                'mata_pelajaran' => $request->mata_pelajaran,
                'foto' => $foto ? basename($foto) : null,
                'deskripsi' => $request->deskripsi,
                'prestasi' => $request->prestasi,
            ]);

            return redirect()->route('guru.index')->with('success', 'Guru berhasil ditambahkan.');
        }

        public function edit(Guru $guru)
        {
            return view('guru.edit', compact('guru'));
        }

        public function update(Request $request, Guru $guru)
        {
            $request->validate([
                'nama' => 'required',
                'mata_pelajaran' => 'required',
            ]);

            if ($request->hasFile('foto')) {
                $foto = $request->file('foto')->store('guru', 'public');
                $guru->foto = basename($foto);
            }

            $guru->update([
                'nama' => $request->nama,
                'mata_pelajaran' => $request->mata_pelajaran,
                'deskripsi' => $request->deskripsi,
                'prestasi' => $request->prestasi,
                'foto' => $guru->foto,
            ]);

            return redirect()->route('guru.index')->with('success', 'Guru berhasil diperbarui.');
        }

        public function destroy(Guru $guru)
        {
            $guru->delete();
            return redirect()->route('guru.index')->with('success', 'Guru berhasil dihapus.');
        }

        public function showGuruUntukUser()
            {
                $gurus = Guru::all();
                return view('profil.guru', compact('gurus'));
            }
}

