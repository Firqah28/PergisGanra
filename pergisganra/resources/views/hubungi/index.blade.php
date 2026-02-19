@extends('layouts.app')

@section('title', 'Layanan Sekolah')

@section('content')
<main class="bg-white min-h-screen">
    <!-- Branded Hero Header -->
    <header class="bg-green-800 py-24 relative overflow-hidden">
        <!-- Brand Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-green-700/30 -skew-x-12 transform translate-x-20"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-yellow-500/10 rounded-full blur-[100px]"></div>
        
        <div class="container mx-auto px-6 relative z-10 text-center">
            <div class="inline-flex items-center space-x-3 px-6 py-2 bg-green-700/50 backdrop-blur-md border border-green-600/50 rounded-full mb-8" data-aos="fade-down">
                <span class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></span>
                <span class="text-xs font-black text-yellow-100 uppercase tracking-[0.4em]">Layanan & Kontak</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-black text-white leading-tight mb-8" data-aos="zoom-in">
                Hubungi <span class="text-yellow-400">Kami</span>
            </h1>
            
            <p class="text-green-100 text-lg md:text-xl max-w-2xl mx-auto font-medium leading-relaxed opacity-90" data-aos="fade-up" data-aos-delay="100">
                Informasi pendaftaran, kontak resmi, dan lokasi strategis <span class="text-white font-bold underline decoration-yellow-400 decoration-2 underline-offset-4">MA Pergis Ganra</span> untuk aksesibilitas terbaik.
            </p>
        </div>
    </header>

    <!-- Main Content Section -->
    <section class="py-24 relative overflow-hidden">
        <!-- Soft Brand Blurs (Modern View) -->
        <div class="absolute top-1/4 -left-20 w-80 h-80 bg-green-50 rounded-full blur-[100px] opacity-60"></div>
        <div class="absolute bottom-1/4 -right-20 w-80 h-80 bg-yellow-50 rounded-full blur-[100px] opacity-60"></div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Pendaftaran & Map Grid -->
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 max-w-7xl mx-auto items-stretch">
                
                <!-- Pendaftaran Card -->
                <div class="bg-white rounded-[3rem] p-10 md:p-14 shadow-sm border border-gray-100 hover:shadow-2xl hover:border-green-100 transition-all duration-500 flex flex-col justify-center" data-aos="fade-right">
                    <div class="mb-10">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-green-50 text-green-700 rounded-3xl mb-6 shadow-sm border border-green-100">
                            <i class="fas fa-user-plus text-3xl"></i>
                        </div>
                        <h2 class="text-4xl font-black text-gray-900 leading-tight">Prosedur <br><span class="text-green-700">Pendaftaran</span></h2>
                    </div>
                    
                    <p class="text-gray-600 text-lg leading-relaxed mb-8 font-medium italic">
                        "Tertarik bergabung dengan keluarga besar MA Pergis Ganra? Tim admisi kami siap mendampingi setiap langkah Anda."
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-6">
                            <div class="mt-1.5 w-6 h-6 rounded-full bg-yellow-400 flex items-center justify-center text-[10px] text-green-900 shadow-sm flex-shrink-0">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-green-600 uppercase tracking-widest mb-1">Telepon Utama</p>
                                <p class="text-xl font-bold text-gray-800">081 355 280 989</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-6">
                            <div class="mt-1.5 w-6 h-6 rounded-full bg-yellow-400 flex items-center justify-center text-[10px] text-green-900 shadow-sm flex-shrink-0">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-green-600 uppercase tracking-widest mb-1">Surel Resmi</p>
                                <a href="mailto:mapergis.ganra@gmail.com" class="text-xl font-bold text-gray-800 hover:text-green-700 transition-colors underline decoration-green-200">mapergis.ganra@gmail.com</a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-6">
                            <div class="mt-1.5 w-6 h-6 rounded-full bg-yellow-400 flex items-center justify-center text-[10px] text-green-900 shadow-sm flex-shrink-0">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-green-600 uppercase tracking-widest mb-1">Jam Operasional</p>
                                <p class="text-xl font-bold text-gray-800">07.30 – 16.00 (Senin – Jumat)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Maps Frame -->
                <div class="relative rounded-[3rem] overflow-hidden shadow-2xl border-8 border-white group" data-aos="fade-left">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.472237765623!2d119.9183939747364!3d-4.322022395651948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95f7a9a9f22ff1%3A0x9e2856d014a62b40!2sMadrasah%20Aliyah%20Pergis%20Ganra!5e0!3m2!1sid!2sid!4v1745408115164!5m2!1sid!2sid"
                        class="w-full h-full min-h-[500px] border-0 grayscale hover:grayscale-0 transition-all duration-700" 
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <div class="absolute top-8 right-8 pointer-events-none">
                        <div class="px-6 py-3 bg-white/90 backdrop-blur shadow-xl rounded-2xl flex items-center space-x-3 border border-gray-100">
                            <i class="fas fa-location-dot text-green-600"></i>
                            <span class="text-sm font-black text-gray-800 uppercase tracking-widest">Pusat Lokasi</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lokasi & Building Detail -->
            <div class="mt-32 max-w-7xl mx-auto grid lg:grid-cols-12 gap-12 items-center">
                <!-- Text Details -->
                <div class="lg:col-span-12 xl:col-span-5 space-y-12" data-aos="fade-up">
                    <div>
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="w-12 h-1 bg-yellow-500 rounded-full"></div>
                            <h2 class="text-4xl font-black text-gray-900 tracking-tight">Lingkungan <br>Belajar <span class="text-green-700">Kondusif</span></h2>
                        </div>
                        <p class="text-gray-600 text-lg leading-relaxed font-medium">
                            MA Pergis Ganra terletak di kawasan yang nyaman dan jauh dari kebisingan, menciptakan atmosfer akademik yang tenang dan fokus bagi setiap santri dan siswa.
                        </p>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-8">
                        <div class="p-8 bg-green-50 rounded-[2rem] border border-green-100">
                            <p class="text-[10px] font-black text-green-600 uppercase tracking-[0.2em] mb-3">Alamat Lengkap</p>
                            <p class="text-gray-800 font-bold leading-relaxed">
                                Jl. Pendidikan, Kec. Ganra, <br>Kab. Soppeng, Sul-Sel 90861
                            </p>
                        </div>
                        <div class="p-8 bg-yellow-50 rounded-[2rem] border border-yellow-100">
                            <p class="text-[10px] font-black text-yellow-700 uppercase tracking-[0.2em] mb-3">Waktu Kunjungan</p>
                            <p class="text-gray-800 font-bold leading-relaxed">
                                Senin – Jumat <br>Pukul 07.30 – 16.00
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Building Showcase -->
                <div class="lg:col-span-12 xl:col-span-7" data-aos="fade-left">
                    <div class="relative group">
                        <!-- Decorative Frame -->
                        <div class="absolute -inset-4 bg-green-50 rounded-[4rem] -z-10 rotate-2 group-hover:rotate-0 transition-transform duration-700"></div>
                        
                        <div class="overflow-hidden rounded-[3.5rem] shadow-2xl border-8 border-white">
                            <img src="{{ asset('image/gedungsekolah.jpg') }}" 
                                 alt="Gedung MA Pergis Ganra" 
                                 class="w-full h-[500px] object-cover transform transition duration-1000 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-green-950/40 to-transparent"></div>
                            
                            <div class="absolute bottom-10 left-10 right-10 flex justify-between items-end">
                                <div>
                                    <p class="text-white font-black text-2xl drop-shadow-lg mb-1">Fasilitas Utama</p>
                                    <p class="text-yellow-400 text-xs font-bold uppercase tracking-widest tracking-widest">Gedung Pendidikan Modern</p>
                                </div>
                                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-green-800 shadow-xl">
                                    <i class="fas fa-building text-xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
