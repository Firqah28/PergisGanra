@extends('layouts.app')

@section('title', 'Edit Berita')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded-xl shadow-md">
    <h2 class="text-2xl font-bold mb-6">Edit Berita</h2>

    @if ($errors->any())
        <div class="mb-4 text-sm text-red-600">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @method('PUT')

        <!-- Judul -->
        <div>
            <label for="judul" class="block text-gray-700 font-medium">Judul</label>
            <input type="text" id="judul" name="judul" value="{{ old('judul', $berita->judul) }}"
                   class="w-full border px-4 py-2 rounded" required>
        </div>

        <!-- Isi -->
        <div>
            <label for="isi" class="block text-gray-700 font-medium">Isi</label>
            <textarea id="isi" name="isi" rows="6"
                      class="w-full border px-4 py-2 rounded" required>{{ old('isi', $berita->isi) }}</textarea>
        </div>

        <!-- Penulis -->
        <div>
            <label for="penulis" class="block text-gray-700 font-medium">Penulis</label>
            <input type="text" id="penulis" name="penulis" value="{{ old('penulis', $berita->penulis) }}"
                   class="w-full border px-4 py-2 rounded">
        </div>

        <!-- Tanggal Rilis -->
        <div>
            <label for="tanggal_rilis" class="block text-gray-700 font-medium">Tanggal Rilis</label>
            <input type="date" id="tanggal_rilis" name="tanggal_rilis" value="{{ old('tanggal_rilis', $berita->tanggal_rilis) }}"
                   class="w-full border px-4 py-2 rounded">
        </div>

        <!-- Gambar -->
        <div>
            <label class="block text-gray-700 font-medium mb-2">Gambar Saat Ini</label>
            @if($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}"
                     alt="gambar berita" class="w-full h-48 object-cover rounded mb-4">
            @else
                <p class="text-gray-500 mb-4">Belum ada gambar.</p>
            @endif

            <label for="gambar" class="block text-gray-700 font-medium">Unggah Gambar Baru</label>
            <input type="file" id="gambar" name="gambar"
                   accept="image/*" class="w-full border px-4 py-2 rounded">
        </div>

        <!-- Tombol Simpan -->
        <div>
            <button type="submit"
                    class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                Perbarui Berita
            </button>
            <a href="{{ route('berita.index') }}"
               class="ml-4 text-gray-600 hover:underline">Batal</a>
        </div>
    </form>
</div>
@endsection
