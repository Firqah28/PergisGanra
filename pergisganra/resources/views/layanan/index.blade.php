@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
<div class="relative">
    <!-- Background -->
    <img src="/image/background3.jpg" alt="Background" class="w-full h-96 object-cover">

    <!-- Overlay hitam transparan -->
    <div class="absolute inset-0 bg-green-700 bg-opacity-50"></div>
    <div class="absolute inset-0 bg-green-50/40 flex items-center justify-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white drop-shadow-lg">Layanan Sekolah</h1>
    </div>
</div>

<div class="max-w-6xl mx-auto px-6 py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Layanan 1: PPDB Online -->
        <div data-aos="fade-up" class="bg-white rounded-2xl shadow-lg p-6 text-center hover:scale-105 transition-transform duration-300">
            <div class="text-green-600 mb-4">
                <i class="fas fa-user-graduate text-5xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">PPDB Online</h3>
            <p class="text-gray-600 text-sm">
                Pendaftaran Peserta Didik Baru secara online, mudah diakses dari rumah.
            </p>
        </div>

        <!-- Layanan 2: E-Learning -->
        <div data-aos="fade-up" data-aos-delay="100" class="bg-white rounded-2xl shadow-lg p-6 text-center hover:scale-105 transition-transform duration-300">
            <div class="text-green-600 mb-4">
                <i class="fas fa-laptop-code text-5xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">E-Learning</h3>
            <p class="text-gray-600 text-sm">
                Fasilitas belajar online untuk siswa dengan materi pelajaran dan tugas.
            </p>
        </div>

        <!-- Layanan 3: Perpustakaan Digital -->
        <div data-aos="fade-up" data-aos-delay="200" class="bg-white rounded-2xl shadow-lg p-6 text-center hover:scale-105 transition-transform duration-300">
            <div class="text-green-600 mb-4">
                <i class="fas fa-book-open text-5xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Perpustakaan</h3>
            <p class="text-gray-600 text-sm">
                Koleksi buku dan referensi pelajaran yang dapat diakses.
            </p>
        </div>

        <!-- Layanan 4: Pengumuman -->
        <div data-aos="zoom-in" class="bg-white rounded-2xl shadow-lg p-6 text-center hover:scale-105 transition-transform duration-300">
            <div class="text-green-600 mb-4">
                <i class="fas fa-bullhorn text-5xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Pengumuman</h3>
            <p class="text-gray-600 text-sm">
                Informasi terbaru mengenai kegiatan dan kebijakan sekolah.
            </p>
        </div>

        <!-- Layanan 5: Konseling -->
        <div data-aos="zoom-in" data-aos-delay="100" class="bg-white rounded-2xl shadow-lg p-6 text-center hover:scale-105 transition-transform duration-300">
            <div class="text-green-600 mb-4">
                <i class="fas fa-comments text-5xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Layanan Konseling</h3>
            <p class="text-gray-600 text-sm">
                Konseling untuk siswa dalam mengatasi masalah akademik maupun pribadi.
            </p>
        </div>

        <!-- Layanan 6: Ekstrakurikuler -->
        <div data-aos="zoom-in" data-aos-delay="200" class="bg-white rounded-2xl shadow-lg p-6 text-center hover:scale-105 transition-transform duration-300">
            <div class="text-green-600 mb-4">
                <i class="fas fa-futbol text-5xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Ekstrakurikuler</h3>
            <p class="text-gray-600 text-sm">
                Berbagai kegiatan ekstrakurikuler untuk mengembangkan bakat dan minat siswa.
            </p>
        </div>
    </div>
</div>
@endsection
