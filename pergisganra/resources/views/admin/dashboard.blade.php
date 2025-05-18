@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="min-h-screen bg-gray-100 py-10 px-6">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Dashboard Admin</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Total Pengguna -->
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h4 class="text-lg font-semibold text-gray-700">Total Pengguna</h4>
                <p class="text-4xl font-bold text-green-600 mt-3">{{ \App\Models\User::count() }}</p>
            </div>

            <!-- Total Guru -->
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h4 class="text-lg font-semibold text-gray-700">Total Guru</h4>
                <p class="text-4xl font-bold text-blue-600 mt-3">{{ \App\Models\Guru::count() }}</p>
            </div>

            <!-- Total Siswa -->
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h4 class="text-lg font-semibold text-gray-700">Total Siswa</h4>
                <p class="text-4xl font-bold text-purple-600 mt-3">{{ \App\Models\Siswa::count() }}</p>
            </div>

            <!-- Total Berita -->
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h4 class="text-lg font-semibold text-gray-700">Total Berita</h4>
                <p class="text-4xl font-bold text-yellow-600 mt-3">{{ \App\Models\Berita::count() }}</p>
            </div>
        </div>

        <!-- Aksi Cepat -->
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition mb-8">
            <h4 class="text-2xl font-bold text-gray-700 mb-4">Aksi Cepat</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <a href="{{ route('guru.index') }}" class="block p-4 bg-blue-100 rounded-lg text-center hover:bg-blue-200 transition">
                    📚 Lihat Guru
                </a>
                <a href="{{ route('guru.create') }}" class="block p-4 bg-blue-100 rounded-lg text-center hover:bg-blue-200 transition">
                    ➕ Tambah Guru
                </a>
                <a href="#" class="block p-4 bg-purple-100 rounded-lg text-center hover:bg-purple-200 transition">
                    📋 Lihat Siswa
                </a>
                <a href="#" class="block p-4 bg-purple-100 rounded-lg text-center hover:bg-purple-200 transition">
                    ➕ Tambah Siswa
                </a>
                <a href="{{ route('berita.index') }}" class="block p-4 bg-yellow-100 rounded-lg text-center hover:bg-yellow-200 transition">
                    📰 Lihat Berita
                </a>
                <a href="{{ route('berita.create') }}" class="block p-4 bg-yellow-100 rounded-lg text-center hover:bg-yellow-200 transition">
                    ➕ Tambah Berita
                </a>
                <a href="{{ route('galeri.index') }}" class="block p-4 bg-pink-100 rounded-lg text-center hover:bg-pink-200 transition">
                    🖼️ Lihat Galeri
                </a>
                <a href="{{ route('galeri.create') }}" class="block p-4 bg-pink-100 rounded-lg text-center hover:bg-pink-200 transition">
                    ➕ Tambah Gambar
                </a>
            </div>
        </div>

        <!-- Informasi Sistem -->
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <h4 class="text-2xl font-bold text-gray-700 mb-4">Informasi Sistem</h4>
            <p class="text-gray-600 text-sm">Versi aplikasi: <strong>1.0.0</strong></p>
            <p class="text-gray-600 text-sm">Login terakhir: {{ Auth::user()->updated_at->format('d M Y H:i') }}</p>
        </div>
    </div>
</div>
@endsection
