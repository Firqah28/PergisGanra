@extends('layouts.app')

@section('title', 'Visi dan Misi')

@section('content')
<!-- Wrapper -->
@section('content')
<main class="bg-gray-50 min-h-screen">
    <!-- Hero Header -->
    <div class="relative bg-green-800 py-24 overflow-hidden">
        <!-- Decorative background -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-yellow-500 rounded-full blur-3xl -mr-48 -mt-48"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl -ml-48 -mb-48"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight">
                Visi & <span class="text-yellow-400">Misi</span>
            </h1>
            <p class="text-green-100 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed font-medium">
                Dua pilar utama yang mendasari setiap langkah dan kebijakan di MA Pergis Ganra untuk mencetak generasi yang cerdas secara spritual dan intelektual.
            </p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container mx-auto px-4 -mt-16 pb-24">
        <div class="max-w-6xl mx-auto">
            <!-- Visi & Misi Cards -->
            <div class="grid lg:grid-cols-12 gap-8 items-start">
                
                <!-- Left Column: The Vision (Large Card) -->
                <div class="lg:col-span-12 xl:col-span-5" data-aos="fade-right">
                    <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 border-b-8 border-yellow-500 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 p-8 opacity-5">
                            <i class="fas fa-eye text-9xl text-green-900"></i>
                        </div>
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 text-green-800 rounded-2xl mb-8">
                            <i class="fas fa-eye text-2xl"></i>
                        </div>
                        <h2 class="text-3xl font-extrabold text-green-900 mb-6">Visi Madrasah</h2>
                        <div class="relative">
                            <span class="text-6xl text-green-100 absolute -top-8 -left-4 font-serif">"</span>
                            <p class="text-2xl md:text-3xl font-bold text-gray-800 leading-tight italic relative z-10">
                                Terwujudnya kondisi kehidupan kemasyarakatan yang baik, maju, dan berakhlakul karimah sebagai hasil proses pendidikan dan dakwah yang bernafaskan Islam.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: The Mission (List Card) -->
                <div class="lg:col-span-12 xl:col-span-7" data-aos="fade-left">
                    <div class="bg-green-900 rounded-3xl shadow-xl p-8 md:p-12 text-white relative h-full">
                        <div class="flex items-center space-x-4 mb-10">
                            <div class="w-16 h-16 bg-yellow-500 text-green-900 rounded-2xl flex items-center justify-center">
                                <i class="fas fa-bullseye text-2xl"></i>
                            </div>
                            <h2 class="text-3xl font-extrabold tracking-tight">Misi Strategis</h2>
                        </div>
                        
                        <div class="space-y-10">
                            <!-- Misi 1 -->
                            <div class="flex items-start space-x-6 group">
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-800 border-2 border-yellow-500/50 flex items-center justify-center font-bold text-yellow-400 group-hover:bg-yellow-500 group-hover:text-green-900 transition-colors duration-300">
                                    1
                                </div>
                                <div class="space-y-2">
                                    <h4 class="text-xl font-bold text-yellow-400 tracking-wide uppercase text-xs">Pendidikan Holistik</h4>
                                    <p class="text-lg text-green-50 leading-relaxed font-medium">
                                        Menyelenggarakan pendidikan IPTEK dan IMTAQ yang berdimensi keduniaan dan keakhiratan secara efektif, sistematis, dan terencana.
                                    </p>
                                </div>
                            </div>

                            <!-- Misi 2 -->
                            <div class="flex items-start space-x-6 group">
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-800 border-2 border-yellow-500/50 flex items-center justify-center font-bold text-yellow-400 group-hover:bg-yellow-500 group-hover:text-green-900 transition-colors duration-300">
                                    2
                                </div>
                                <div class="space-y-2">
                                    <h4 class="text-xl font-bold text-yellow-400 tracking-wide uppercase text-xs">Kualitas & Keadilan</h4>
                                    <p class="text-lg text-green-50 leading-relaxed font-medium">
                                        Menyelenggarakan pendidikan yang bermutu, adil, dan merata di lingkungan sekolah untuk seluruh elemen masyarakat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Visual Gallery & Accents -->
            <div class="mt-24">
                <div class="text-center mb-12" data-aos="fade-up">
                    <h3 class="text-2xl font-bold text-green-900 flex items-center justify-center space-x-3">
                        <span class="w-8 h-1 bg-yellow-500 rounded-full"></span>
                        <span>Lingkungan Madrasah Kami</span>
                        <span class="w-8 h-1 bg-yellow-500 rounded-full"></span>
                    </h3>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6" data-aos="zoom-in">
                    <!-- Gallery Item 1 -->
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg aspect-square">
                        <img src="/image/apel.jpg" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Apel Pagi">
                        <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <span class="text-white font-bold tracking-wide">Kegiatan Apel Pagi</span>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 2 -->
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg aspect-[4/5] md:row-span-2">
                        <img src="/image/pramuka1.jpg" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Siswa Belajar">
                        <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <span class="text-white font-bold tracking-wide">Pramuka & Karakter</span>
                        </div>
                    </div>

                    <!-- Gallery Item 3 -->
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg aspect-square">
                        <img src="/image/pramuka1.jpg" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Ekstrakurikuler">
                        <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <span class="text-white font-bold tracking-wide">Minat & Bakat</span>
                        </div>
                    </div>

                    <!-- Gallery Item 4 -->
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg aspect-square">
                        <img src="/image/apel.jpg" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Fasilitas">
                        <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <span class="text-white font-bold tracking-wide">Sapa Pagi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
