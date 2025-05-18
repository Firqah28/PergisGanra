@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md">
        @csrf

        <div class="flex flex-col">
            <label for="judul" class="text-sm font-semibold text-gray-700">Judul</label>
            <input type="text" name="judul" id="judul" required class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="flex flex-col">
            <label for="isi" class="text-sm font-semibold text-gray-700">Isi</label>
            <textarea name="isi" id="isi" required class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>

        <div class="flex flex-col">
            <label for="gambar" class="text-sm font-semibold text-gray-700">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="flex flex-col">
            <label for="penulis" class="text-sm font-semibold text-gray-700">Penulis</label>
            <input type="text" name="penulis" id="penulis" class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="flex flex-col">
            <label for="tanggal_rilis" class="text-sm font-semibold text-gray-700">Tanggal Rilis</label>
            <input type="date" name="tanggal_rilis" id="tanggal_rilis" class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="mt-4">
            <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Simpan</button>
        </div>
    </form>
</div>
@endsection
