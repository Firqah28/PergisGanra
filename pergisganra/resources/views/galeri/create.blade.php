@extends('layouts.app')

@section('title', 'Tambah Gambar Galeri')

@section('content')
<div class="min-h-screen bg-gray-100 py-10 px-6">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow hover:shadow-lg transition">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Tambah Gambar ke Galeri</h2>

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-100 text-red-700 rounded-lg">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="judul" class="block text-gray-700 font-semibold mb-2">Judul</label>
                <input type="text" name="judul" id="judul" class="w-full p-3 border rounded-lg" value="{{ old('judul') }}" required>
            </div>

            <div class="mb-4">
                <label for="gambar" class="block text-gray-700 font-semibold mb-2">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="w-full p-3 border rounded-lg" required>
            </div>

            <div class="mb-6">
                <label for="deskripsi" class="block text-gray-700 font-semibold mb-2">Deskripsi (Opsional)</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full p-3 border rounded-lg">{{ old('deskripsi') }}</textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
