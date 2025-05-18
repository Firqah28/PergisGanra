@extends('layouts.app')

@section('title', 'Edit Guru')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow mt-10">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Form Edit Guru</h2>

    <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" name="nama" id="nama" class="mt-1 block w-full rounded border-gray-300" value="{{ old('nama', $guru->nama) }}" required>
        </div>

        <div class="mb-4">
            <label for="foto" class="block text-sm font-medium text-gray-700">Foto (Kosongkan jika tidak diganti)</label>
            <input type="file" name="foto" id="foto" class="mt-1 block w-full border-gray-300 rounded">
            @if($guru->foto)
                <img src="{{ asset('storage/guru/' . $guru->foto) }}" alt="{{ $guru->nama }}" class="w-24 h-24 mt-2 rounded-full">
            @endif
        </div>

        <div class="mb-4">
            <label for="mata_pelajaran" class="block text-sm font-medium text-gray-700">Mata Pelajaran</label>
            <input type="text" name="mata_pelajaran" id="mata_pelajaran" class="mt-1 block w-full rounded border-gray-300" value="{{ old('mata_pelajaran', $guru->mata_pelajaran) }}" required>
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="3" class="mt-1 block w-full rounded border-gray-300">{{ old('deskripsi', $guru->deskripsi) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="prestasi" class="block text-sm font-medium text-gray-700">Prestasi (pisahkan dengan koma)</label>
            <textarea name="prestasi" id="prestasi" rows="3" class="mt-1 block w-full rounded border-gray-300">{{ old('prestasi', $guru->prestasi) }}</textarea>
        </div>

        <div class="flex justify-end">
            <a href="{{ route('guru.index') }}" class="text-gray-600 hover:underline mr-4">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
@endsection
