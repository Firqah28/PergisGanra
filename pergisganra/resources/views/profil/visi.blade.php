@extends('layouts.app')

@section('title', 'Visi dan Misi')

@section('content')
<!-- Wrapper -->
<div class="relative bg-gradient-to-b from-green-100 to-gray-100 px-6 md:px-12 py-16">
    
    <!-- Header -->
    <div class="mb-16 text-center" data-aos="fade-down">
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800">
            Visi dan Misi
        </h2>
        <p class="text-gray-600 text-lg md:text-xl max-w-2xl mx-auto mt-4">
            Panduan utama MA Pergis Ganra dalam melangkah menuju pendidikan yang berkualitas, berkarakter Islami, 
            dan berorientasi pada pengembangan IPTEK serta IMTAQ.
        </p>
        <!-- Garis aksen modern -->
        <div class="flex justify-center mt-6">
            <span class="w-24 h-1 bg-green-600 rounded-full"></span>
            <span class="w-4 h-1 bg-green-400 mx-2 rounded-full"></span>
            <span class="w-24 h-1 bg-green-600 rounded-full"></span>
        </div>
    </div>

    <!-- Konten Visi & Misi -->
    <div class="grid md:grid-cols-2 gap-12 max-w-6xl mx-auto items-center">
        <!-- Bagian Accordion -->
        <div class="space-y-6">
            <!-- Visi -->
            <div class="bg-white rounded-3xl shadow-lg border-t-4 border-green-500 overflow-hidden transition hover:shadow-2xl">
                <button onclick="toggleCard('visiContent','visiIcon')" 
                    class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-green-700 text-xl hover:bg-green-50">
                    <span class="flex items-center space-x-2">
                        <i class="fas fa-eye text-green-500"></i>
                        <span>Visi</span>
                    </span>
                    <span id="visiIcon" class="text-2xl">+</span>
                </button>
                <div id="visiContent" class="hidden px-6 pb-6 text-gray-700 text-lg leading-relaxed">
                    Terwujudnya kondisi kehidupan kemasyarakatan yang baik, maju, dan berakhlakul karimah 
                    sebagai hasil proses pendidikan dan dakwah yang bernafaskan Islam.
                </div>
            </div>

            <!-- Misi -->
            <div class="bg-white rounded-3xl shadow-lg border-t-4 border-green-500 overflow-hidden transition hover:shadow-2xl">
                <button onclick="toggleCard('misiContent','misiIcon')" 
                    class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-green-700 text-xl hover:bg-green-50">
                    <span class="flex items-center space-x-2">
                        <i class="fas fa-bullseye text-green-500"></i>
                        <span>Misi</span>
                    </span>
                    <span id="misiIcon" class="text-2xl">+</span>
                </button>
                <div id="misiContent" class="hidden px-6 pb-6">
                    <ul class="list-disc list-inside text-gray-700 text-lg space-y-3">
                        <li>Menyelenggarakan pendidikan IPTEK dan IMTAQ yang berdimensi keduniaan dan keakhiratan secara efektif, sistematis, dan terencana.</li>
                        <li>Menyelenggarakan pendidikan yang bermutu, adil, dan merata di lingkungan sekolah.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Foto Pemanis (staggered) -->
        <div class="grid grid-cols-2 gap-6" data-aos="zoom-in">
            <!-- Foto 1 -->
            <div class="relative group transform hover:-translate-y-2 transition">
                <div class="overflow-hidden rounded-2xl shadow-lg">
                    <img src="/image/apel.jpg" 
                         alt="Kegiatan Apel" 
                         class="w-full h-48 object-cover transition duration-500 group-hover:scale-105 group-hover:rotate-1">
                </div>
                <p class="text-center text-gray-600 text-sm mt-2">Kegiatan apel pagi siswa</p>
            </div>

            <!-- Foto 2 (lebih tinggi) -->
            <div class="relative group transform hover:-translate-y-2 transition mt-8">
                <div class="overflow-hidden rounded-2xl shadow-lg">
                    <img src="/image/pramuka1.jpg"
                         alt="Suasana Belajar" 
                         class="w-full h-64 object-cover transition duration-500 group-hover:scale-105 group-hover:rotate-1">
                </div>
                <p class="text-center text-gray-600 text-sm mt-2">Suasana belajar di kelas</p>
            </div>

            <!-- Foto 3 -->
            <div class="relative group transform hover:-translate-y-2 transition">
                <div class="overflow-hidden rounded-2xl shadow-lg">
                    <img src="/image/pramuka1.jpg"
                         alt="Ekstrakurikuler" 
                         class="w-full h-56 object-cover transition duration-500 group-hover:scale-105 group-hover:rotate-1">
                </div>
                <p class="text-center text-gray-600 text-sm mt-2">Kegiatan ekstrakurikuler siswa</p>
            </div>

            <!-- Foto 4 (lebih kecil) -->
            <div class="relative group transform hover:-translate-y-2 transition mt-6">
                <div class="overflow-hidden rounded-2xl shadow-lg">
                    <img src="/image/apel.jpg"
                         alt="Perpustakaan" 
                         class="w-full h-40 object-cover transition duration-500 group-hover:scale-105 group-hover:rotate-1">
                </div>
                <p class="text-center text-gray-600 text-sm mt-2">Perpustakaan sebagai pusat ilmu</p>
            </div>
        </div>
    </div>
</div>

<!-- Script Toggle -->
<script>
function toggleCard(contentId, iconId) {
    const content = document.getElementById(contentId);
    const icon = document.getElementById(iconId);

    if (content.classList.contains("hidden")) {
        content.classList.remove("hidden");
        icon.textContent = "−";
    } else {
        content.classList.add("hidden");
        icon.textContent = "+";
    }
}
</script>
@endsection
