@extends('layouts.app')

@section('title', 'Identitas MA Pergis Ganra')

@section('content')
<div class="px-6 md:px-12 py-16 bg-gray-50 min-h-screen">
    <!-- Header -->
    <div class="mb-16 text-center space-y-6">
        <!-- Logo -->
        <div class="flex justify-center">
            <div class="bg-white p-4 rounded-full shadow-lg">
            <img src="{{ asset('image/logo1.png') }}" alt="Logo MA Pergis Ganra" class="h-24 w-24 object-contain">
            </div>
        </div>

        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800">Identitas Madrasah</h2>
        <p class="text-gray-500 text-lg md:text-xl max-w-2xl mx-auto">
            Informasi lengkap mengenai profil dan identitas resmi MA Pergis Ganra.
        </p>
    </div>

    <!-- Card Informasi -->
    <div class="bg-white shadow-2xl rounded-3xl p-8 md:p-12 max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">
        <!-- Item -->
        <div class="flex items-start gap-4">
            <div class="bg-indigo-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M3 7l9-4 9 4-9 4-9-4zM21 10.5v6a2 2 0 01-1 1.732l-8 4.5-8-4.5a2 2 0 01-1-1.732v-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Nama Sekolah</p>
                <h3 class="text-xl font-semibold text-gray-800">MA Pergis Ganra</h3>
            </div>
        </div>

        <div class="flex items-start gap-4">
            <div class="bg-green-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-500 text-sm">NPSN</p>
                <h3 class="text-xl font-semibold text-gray-800">12345678</h3>
            </div>
        </div>

        <div class="flex items-start gap-4">
            <div class="bg-yellow-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M16 21v-2a4 4 0 00-8 0v2M12 3a4 4 0 00-4 4v1a4 4 0 004 4 4 4 0 004-4V7a4 4 0 00-4-4z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-500 text-sm">NSS</p>
                <h3 class="text-xl font-semibold text-gray-800">401234567890</h3>
            </div>
        </div>

        <div class="flex items-start gap-4">
            <div class="bg-pink-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M3 7h18M3 12h18M3 17h18" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-500 text-sm">NSM</p>
                <h3 class="text-xl font-semibold text-gray-800">5101.234567</h3>
            </div>
        </div>

        <div class="flex items-start gap-4">
            <div class="bg-blue-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M9 12l2 2l4-4M7 17h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v8a2 2 0 002 2z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Status Madrasah</p>
                <h3 class="text-xl font-semibold text-gray-800">Swasta</h3>
            </div>
        </div>

        <div class="flex items-start gap-4">
            <div class="bg-purple-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M3 10h11M9 21V3m6 18l6-6-6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Kode Pos</p>
                <h3 class="text-xl font-semibold text-gray-800">92715</h3>
            </div>
        </div>

        <div class="flex items-start gap-4">
            <div class="bg-teal-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M3 5h12M9 3v2m0 4h12m-6-2v2m-6 6h12m-6-2v2m-6 6h12m-6-2v2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Nomor Telepon</p>
                <h3 class="text-xl font-semibold text-gray-800">0821-2345-6789</h3>
            </div>
        </div>

        <div class="flex items-start gap-4">
            <div class="bg-red-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M3 7v4h18V7M4 19h16a2 2 0 002-2V9a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Nomor SK Pendirian</p>
                <h3 class="text-xl font-semibold text-gray-800">SK.123/MA/2020</h3>
            </div>
        </div>

        <div class="md:col-span-2 flex items-start gap-4">
            <div class="bg-orange-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M17 20h5V4H2v16h5m10 0v-4a4 4 0 00-8 0v4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Alamat Sekolah</p>
                <h3 class="text-xl font-semibold text-gray-800">
                    Jl. Pendidikan No. 45, Ganra, Kabupaten Soppeng, Sulawesi Selatan
                </h3>
            </div>
        </div>

        <div class="flex items-start gap-4">
            <div class="bg-lime-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M12 8v4l3 3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Tahun Berdiri</p>
                <h3 class="text-xl font-semibold text-gray-800">1995</h3>
            </div>
        </div>

        <div class="flex items-start gap-4">
            <div class="bg-cyan-100 p-3 rounded-full">
                <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M16 12H8m0 0V8m0 4v4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Jumlah Guru</p>
                <h3 class="text-xl font-semibold text-gray-800">{{ $jumlahGuru }} orang</h3>
            </div>
        </div>
    </div>
</div>
@endsection
