@extends('layouts.app')

@section('title', 'Layanan Sekolah')

@section('content')
<div class="px-6 md:px-12 py-16 bg-gradient-to-b from-green-100 to-gray-100 min-h-screen">

    <!-- Header -->
    <div class="text-center mb-12" data-aos="fade-down">
        <h1 class="text-5xl md:text-6xl font-extrabold text-gray-800 leading-tight">
            Layanan Sekolah
        </h1>
        <p class="mt-4 text-gray-600 text-lg md:text-xl max-w-3xl mx-auto">
            Informasi pendaftaran, kontak, dan lokasi <span class="font-semibold text-green-600">MA Pergis Ganra</span> untuk mempermudah akses bagi orang tua dan siswa.
        </p>
        <div class="flex justify-center mt-6">
            <span class="w-24 h-1 bg-green-600 rounded-full"></span>
            <span class="w-4 h-1 bg-green-400 mx-2 rounded-full"></span>
            <span class="w-24 h-1 bg-green-600 rounded-full"></span>
        </div>
    </div>

    <!-- Grid Layanan -->
    <div class="grid md:grid-cols-2 gap-16 max-w-6xl mx-auto items-start">

        <!-- Pendaftaran -->
        <div class="relative flex flex-col justify-center" data-aos="fade-right">
            <div class="flex items-center space-x-4 mb-4">
                <div class="bg-green-100 p-4 rounded-full text-green-600">
                    <i class="fas fa-user-plus text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-800">Pendaftaran</h2>
            </div>
            <p class="text-gray-700 text-lg mb-4">
                Apakah Anda tertarik mendaftarkan anak Anda di <strong>MA Pergis Ganra</strong>? Tim kami siap membantu menjawab pertanyaan Anda dan mendampingi proses awal pendaftaran siswa.
            </p>
            <ul class="text-gray-700 space-y-2 text-lg">
                <li><strong>Telepon:</strong> 081 355 280 989</li>
                <li><strong>Email:</strong> <a href="mailto:mapergis.ganra@gmail.com" class="text-green-600 underline">mapergis.ganra@gmail.com</a></li>
                <li><strong>Jam Operasional:</strong> 07.30 – 16.00, Senin – Jumat</li>
            </ul>
        </div>

        <!-- Google Maps -->
        <div class="relative" data-aos="fade-left">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.472237765623!2d119.9183939747364!3d-4.322022395651948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95f7a9a9f22ff1%3A0x9e2856d014a62b40!2sMadrasah%20Aliyah%20Pergis%20Ganra!5e0!3m2!1sid!2sid!4v1745408115164!5m2!1sid!2sid"
                class="w-full h-96 rounded-2xl shadow-lg border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <!-- Lokasi & Info tambahan -->
    <div class="mt-16 max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-center">
        <div class="relative" data-aos="fade-up">
            <div class="flex items-center space-x-4 mb-4">
                <div class="bg-green-100 p-4 rounded-full text-green-600">
                    <i class="fas fa-map-marker-alt text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-800">Lokasi Kami</h2>
            </div>
            <p class="text-gray-700 text-lg mb-2">
                <strong>MA Pergis Ganra</strong> terletak di kawasan yang nyaman dan tenang, cocok sebagai lingkungan belajar yang kondusif bagi siswa. Mudah diakses dan strategis.
            </p>
            <p class="text-gray-700 text-lg"><strong>Alamat:</strong><br>Jl. Pendidikan, Kec. Ganra, Kab. Soppeng, Sul-Sel 90861</p>
            <p class="text-gray-700 text-lg mt-2"><strong>Jam Operasional:</strong><br>07.30 – 16.00</p>
        </div>

        <div class="relative" data-aos="fade-left">
            <img src="{{ asset('image/gedungsekolah.jpg') }}" 
                 alt="Gedung Sekolah" 
                 class="w-full h-80 object-cover rounded-2xl shadow-lg transform transition duration-500 hover:scale-105 hover:rotate-1">
        </div>
    </div>

</div>
@endsection
