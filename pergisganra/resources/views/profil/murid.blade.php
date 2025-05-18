@extends('layouts.app')

@section('title', 'Profil Murid')

@section('content')
<div class="px-6 md:px-12 py-10">
    <div class="mb-10">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Profil Murid</h2>
        <p class="text-gray-600 text-lg leading-relaxed max-w-3xl">
            Halaman ini menyajikan informasi terkait siswa yang terdaftar di MA Pergis Ganra. 
            Siswa merupakan elemen utama dalam proses pendidikan, sehingga kami selalu 
            berupaya memberikan lingkungan belajar yang mendukung dan mendorong perkembangan potensi setiap siswa.
        </p>
    </div>

    <!-- Kotak besar untuk jumlah siswa -->
    <div class="bg-gradient-to-r from-yellow-400 to-yellow-600 text-white px-8 py-6 rounded-2xl shadow-xl mb-10 flex flex-col sm:flex-row items-center justify-between">
        <div class="text-center sm:text-left">
            <h3 class="text-2xl font-semibold">Total Jumlah Siswa</h3>
            <p class="text-6xl font-extrabold mt-2">{{ $jumlahSiswa }}</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 opacity-40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m9 0A4 4 0 0012 12a4 4 0 00-3 2.13M12 12a4 4 0 100-8 4 4 0 000 8z" />
            </svg>
        </div>
    </div>

    <!-- Informasi tambahan -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-xl shadow-md transition-transform hover:scale-[1.02]">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Aktivitas Unggulan Siswa</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-1">
                <li>Ekstrakurikuler Pramuka</li>
                <li>Olahraga dan Senam Pagi</li>
                <li>Kegiatan Sosial dan Keagamaan</li>
                <li>Proyek Kolaboratif antar Kelas</li>
            </ul>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md transition-transform hover:scale-[1.02]">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Statistik Umum</h3>
            <ul class="text-gray-700 space-y-2">
                <li><strong>Total Kelas:</strong> 6</li>
                <li><strong>Jumlah Guru Pembimbing:</strong> 10</li>
                <li><strong>Rata-rata Kehadiran:</strong> 95%</li>
                <li><strong>Prestasi Akademik & Non-akademik:</strong> Meningkat setiap tahun</li>
            </ul>
        </div>
    </div>

    <!-- Grid Galeri -->
    <div class="mt-16">
        <h3 class="text-2xl font-semibold text-gray-800 mb-6">Galeri Aktivitas Siswa</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x300" alt="Aktivitas Siswa 1" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h4 class="text-xl font-semibold text-gray-800">Pramuka</h4>
                    <p class="text-gray-600">Kegiatan pramuka yang meningkatkan kerjasama dan kepemimpinan siswa.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x300" alt="Aktivitas Siswa 2" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h4 class="text-xl font-semibold text-gray-800">Olahraga</h4>
                    <p class="text-gray-600">Olahraga bersama untuk kesehatan dan kekompakan antar siswa.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x300" alt="Aktivitas Siswa 3" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h4 class="text-xl font-semibold text-gray-800">Kegiatan Sosial</h4>
                    <p class="text-gray-600">Kegiatan sosial untuk meningkatkan kesadaran dan kepedulian siswa terhadap masyarakat.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x300" alt="Aktivitas Siswa 4" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h4 class="text-xl font-semibold text-gray-800">Lomba Kreativitas</h4>
                    <p class="text-gray-600">Lomba-lomba yang mengasah kreativitas dan kemampuan individu siswa.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x300" alt="Aktivitas Siswa 5" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h4 class="text-xl font-semibold text-gray-800">Kegiatan Keagamaan</h4>
                    <p class="text-gray-600">Pembinaan kegiatan keagamaan yang memperdalam pemahaman spiritual siswa.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x300" alt="Aktivitas Siswa 6" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h4 class="text-xl font-semibold text-gray-800">Proyek Kolaboratif</h4>
                    <p class="text-gray-600">Proyek-proyek kolaboratif yang melibatkan beberapa kelas dalam kerja sama tim.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
