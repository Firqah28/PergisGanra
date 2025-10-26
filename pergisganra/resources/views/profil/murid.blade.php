@extends('layouts.app')

@section('title', 'Profil Murid')

@section('content')
<!-- Wrapper -->
<div class="relative bg-gradient-to-b from-green-100 to-gray-200 px-6 md:px-12 py-12 bg-gray-50">
    
    <!-- Header -->
    <div class="mb-12 text-center" data-aos="fade-down">
        <h2 class="text-3xl md:text-5xl font-extrabold text-gray-800 tracking-wide mb-1">Profil Murid</h2>
        <p class="text-gray-600 text-base md:text-lg max-w-1xl mx-auto leading-relaxed mt-8">
            Halaman ini menyajikan informasi terkait siswa yang terdaftar di 
            <span class="font-semibold text-yellow-600">MA Pergis Ganra</span>. 
            Siswa merupakan elemen utama dalam proses pendidikan, sehingga kami selalu berupaya 
            memberikan lingkungan belajar yang mendukung serta mendorong perkembangan potensi mereka.
        </p>
    </div>

    <!-- Kotak Total Jumlah Siswa -->
    <div class="bg-gradient-to-r from-gray-400 to-green-500 text-white px-8 py-8 rounded-2xl shadow-xl mb-12 flex flex-col sm:flex-row items-center justify-between hover:shadow-2xl transition duration-300" data-aos="zoom-in">
        <div class="text-center sm:text-left">
            <h3 class="text-2xl font-semibold">Total Jumlah Siswa</h3>
            <p class="text-6xl font-extrabold mt-2">139</p>
        </div>
        <div class="mt-6 sm:mt-0 sm:ml-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-28 w-28 opacity-40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                      d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 
                         013-3.87m9 0A4 4 0 0012 12a4 4 0 
                         00-3 2.13M12 12a4 4 0 100-8 4 4 0 000 8z" />
            </svg>
        </div>
    </div>

    <!-- Informasi tambahan -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-xl shadow-md transition-transform hover:scale-[1.03] hover:shadow-lg duration-300" data-aos="fade-right">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Aktivitas Unggulan Siswa</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Ekstrakurikuler Pramuka</li>
                <li>Olahraga dan Senam Pagi</li>
                <li>Kegiatan Sosial dan Keagamaan</li>
                <li>Proyek Kolaboratif antar Kelas</li>
            </ul>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md transition-transform hover:scale-[1.03] hover:shadow-lg duration-300" data-aos="fade-left">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Statistik Umum</h3>
            <ul class="text-gray-700 space-y-2">
                <li><strong>Total Kelas:</strong> 7</li>
                <li><strong>Jumlah Guru Pembimbing:</strong> 10</li>
                <li><strong>Rata-rata Kehadiran:</strong> 95%</li>
                <li><strong>Prestasi Akademik & Non-akademik:</strong> Meningkat setiap tahun</li>
            </ul>
        </div>
    </div>

    <!-- Galeri Aktivitas -->
<div class="relative bg-gradient-to-b from-green-50 to-white mt-16">
    <h3 class="text-3xl font-bold text-gray-800 mb-8 text-center" data-aos="fade-up">
        Galeri Aktivitas Siswa
    </h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
        <!-- Card -->
        @foreach([
            ['Pramuka', 'Kegiatan pramuka yang meningkatkan kerjasama dan kepemimpinan siswa.', 'image/pramuka1.jpg'],
            ['PMR', 'Kegiatan PMR untuk kesehatan dan kekompakan antar siswa.', 'image/pmr.jpg'],
            ['Kegiatan Sosial', 'Kegiatan sosial meningkatkan kepedulian siswa terhadap masyarakat.', 'image/sosial.jpg'],
            ['Lomba Kreativitas', 'Lomba-lomba yang mengasah kreativitas dan kemampuan siswa.', 'image/lomba.jpg'],
            ['Kegiatan Keagamaan', 'Pembinaan kegiatan keagamaan untuk memperdalam spiritualitas siswa.', 'image/pengajian.jpg'],
            ['Proyek Kolaboratif', 'Proyek kolaboratif antar kelas untuk melatih kerja sama tim.', 'image/kolab.jpg']
        ] as $index => [$title, $desc, $img])
        <div class="bg-white rounded-xl shadow-md overflow-hidden group hover:shadow-xl transition duration-300" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
            <img src="{{ asset($img) }}" alt="{{ $title }}" 
                 class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="p-5">
                <h4 class="text-xl font-semibold text-gray-800 mb-2">{{ $title }}</h4>
                <p class="text-gray-600 text-sm leading-relaxed">{{ $desc }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>

<!-- Tambahkan AOS Animation -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>
@endsection
