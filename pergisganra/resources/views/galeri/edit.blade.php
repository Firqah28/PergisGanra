@extends('layouts.app')

@section('title', 'Edit Galeri')

@section('content')
<div class="min-h-screen bg-gray-100 py-10 px-6">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Edit Galeri</h2>

        <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="judul" class="block text-sm font-semibold text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul', $galeri->judul) }}" class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>

            <div class="mb-4">
                <label for="gambar" class="block text-sm font-semibold text-gray-700">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="w-full p-2 border border-gray-300 rounded mt-1">
                @if ($galeri->gambar)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}" class="w-32 h-32 object-cover">
                    </div>
                @endif
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block text-sm font-semibold text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="w-full p-2 border border-gray-300 rounded mt-1">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
