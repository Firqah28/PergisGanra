@extends('layouts.app')

@section('title', 'Layanan Sekolah')

@section('content')
<div class="px-6 md:px-12 py-16 bg-gray-50 min-h-screen">
<div class="container mx-auto bg-gray-100 px-4 py-8">
    <div class="grid md:grid-cols-2 gap-8">
        <!-- Informasi Pendaftaran -->
        <div>
            <h2 class="text-2xl font-semibold mb-4">Pendaftaran</h2>
            <p class="mb-2">
                Apakah Anda tertarik mendaftarkan anak Anda di <strong>MA Pergis Ganra</strong>? Tim kami siap membantu menjawab pertanyaan Anda dan mendampingi proses awal pendaftaran siswa.
            </p>
            <p class="mb-1"><strong>Telepon:</strong> 081 355 280 989</p>
            <p class="mb-1"><strong>Email:</strong> <class="text-blue-600 underline>mapergis.ganra@gmail.com  </a></p>
            <p><strong>Jam Operasional:</strong> 07.30 – 16.00, Senin – Jumat</p>
        </div>

        <!-- Google Maps Embed -->
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.472237765623!2d119.9183939747364!3d-4.322022395651948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95f7a9a9f22ff1%3A0x9e2856d014a62b40!2sMadrasah%20Aliyah%20Pergis%20Ganra!5e0!3m2!1sid!2sid!4v1745408115164!5m2!1sid!2sid"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <!-- Informasi Lokasi -->
    <div class="mt-8">
        <h2 class="text-2xl font-semibold mb-4">Lokasi Kami</h2>
        <p class="mb-2">
            <strong>MA Pergis Ganra</strong> terletak di kawasan yang nyaman dan tenang, cocok sebagai lingkungan belajar yang kondusif bagi siswa. Sekolah ini juga mudah diakses dan berada di lokasi strategis.
        </p>
        <p class="mb-1"><strong>Alamat:</strong><br>
            Jl.Pendidikan  Kec. Ganra Kab.Soppeng Sul – Sel 90861
        </p>
        <p><strong>Jam Operasional:</strong><br>
            07.30 – 16.00
        </p>
    </div>
</div>
@endsection
