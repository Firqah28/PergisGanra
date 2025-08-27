@extends('layouts.app')

@section('title', 'Tambah Guru')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow mt-10">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Form Tambah Guru</h2>

    <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" name="nama" id="nama" class="mt-1 block w-full rounded border border-gray-400 focus:border-blue-500 focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="foto" class="block text-sm font-medium text-gray-700">Foto</label>
            <input type="file" name="foto" id="foto" class="mt-1 block w-full rounded border border-gray-400 focus:border-blue-500 focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="mata_pelajaran" class="block text-sm font-medium text-gray-700">Mata Pelajaran</label>
            <input type="text" name="mata_pelajaran" id="mata_pelajaran" class="mt-1 block w-full rounded border border-gray-400 focus:border-blue-500 focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="3"class="mt-1 block w-full rounded border border-gray-400 focus:border-blue-500 focus:ring-blue-500"></textarea>
        </div>

        <div class="mb-4">
            <label for="prestasi" class="block text-sm font-medium text-gray-700">Prestasi (pisahkan dengan koma)</label>
            <textarea name="prestasi" id="prestasi" rows="3" class="mt-1 block w-full rounded border border-gray-400 focus:border-blue-500 focus:ring-blue-500"></textarea>
        </div>

        <div class="flex justify-end">
            <a href="{{ route('guru.index') }}" class="text-gray-600 hover:underline mr-4">Batal</a>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Simpan</button>
        </div>
    </form>
</div>
@endsection
