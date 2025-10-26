@extends('layouts.app')

@section('title', 'Sejarah MA Pergis Ganra')

@section('content')
<!-- Hero Banner Ringkas -->
<div class="relative">
    <!-- Background image -->
    <img src="/image/background3.jpg" alt="Sejarah MA Pergis Ganra" class="w-full h-96 object-cover rounded-b-2xl">
    
    <!-- Overlay hijau dengan transparansi -->
    <div class="absolute inset-0 bg-green-900 bg-opacity-60 flex items-center rounded-b-2xl">
        <div class="container mx-auto px-6 text-white text-center md:text-left">
            <h2 class="text-3xl md:text-4xl font-bold mb-2 animate-fadeInDown text-center">Sejarah MA Pergis Ganra</h2>
            <p class="text-lg mb-4 animate-fadeInUp">
                Madrasah Aliyah (MA) Pergis Ganra berdiri sebagai komitmen masyarakat dalam menyediakan pendidikan menengah berbasis nilai-nilai Islam.
            </p>
        </div>
    </div>
</div>

<!-- Konten Ringkas Sejarah -->
<div class="px-6 md:px-12 py-16">
    <div class="bg-white p-8 rounded-2xl shadow-xl max-w-4xl mx-auto leading-relaxed text-gray-700 space-y-6 transform opacity-0 animate-slideUp">
        <p>
            MA Pergis Ganra mulai beroperasi pada tahun <strong>2005</strong> dan terus berkembang dengan dukungan masyarakat dan tenaga pendidik yang berkualitas.
        </p>

        <p class="text-center font-semibold text-green-600 mt-4 italic">
            "Membangun Generasi Islami yang Unggul dan Berdaya Saing"
        </p>
    </div>
</div>

<!-- Animasi Tailwind -->
<style>
@keyframes fadeInDown {
    0% { opacity: 0; transform: translateY(-20px); }
    100% { opacity: 1; transform: translateY(0); }
}
@keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
}
@keyframes slideUp {
    0% { opacity: 0; transform: translateY(40px); }
    100% { opacity: 1; transform: translateY(0); }
}

.animate-fadeInDown { animation: fadeInDown 1s ease forwards; }
.animate-fadeInUp { animation: fadeInUp 1s ease forwards; }
.animate-slideUp { animation: slideUp 1s ease forwards 0.5s; }
</style>
@endsection
