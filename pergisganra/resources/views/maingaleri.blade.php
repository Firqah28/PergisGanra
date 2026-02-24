@extends('layouts.app')

@section('title', 'Galeri Sekolah')

@section('content')
<main class="bg-white min-h-screen">
    <!-- Hero Header -->
    <div class="relative bg-green-800 py-12 md:py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-10 drop-shadow-sm">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-yellow-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-1/4 w-64 h-64 bg-white rounded-full blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-down">
            <div class="inline-flex items-center space-x-2 bg-white/10 text-yellow-400 px-4 py-1.5 rounded-full text-[10px] md:text-xs font-bold uppercase tracking-widest mb-6 border border-white/10 backdrop-blur-md">
                <i class="fas fa-camera-retro"></i>
                <span>Visual & Dokumentasi</span>
            </div>
            <h1 class="text-3xl md:text-6xl font-extrabold text-white mb-6 tracking-tight leading-none px-4">
                Galeri <span class="text-yellow-400">Madrasah</span>
            </h1>
            <p class="text-green-100 text-base md:text-xl max-w-2xl mx-auto leading-relaxed font-medium px-4">
                Mengabadikan setiap momen berharga, prestasi, dan keceriaan civitas akademika di lingkungan MA Pergis Ganra.
            </p>
        </div>
    </div>

    <!-- Gallery Section -->
    <section class="py-12 md:py-24 bg-white relative overflow-hidden">
        <!-- Floating Brand Accents (Modern View - No Patterns) -->
        <div class="absolute top-1/4 -left-24 w-96 h-96 bg-green-50 rounded-full blur-[150px] opacity-40 pointer-events-none"></div>
        <div class="absolute bottom-1/4 -right-24 w-96 h-96 bg-yellow-50 rounded-full blur-[150px] opacity-40 pointer-events-none"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-7xl mx-auto">
                <!-- Standard Uniform Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                    @forelse ($galeris as $index => $galeri)
                        <div class="group relative bg-white rounded-[2.5rem] shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-green-100" 
                             data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                            
                            <!-- Media Frame -->
                            <div class="relative h-64 md:h-80 overflow-hidden">
                                <img src="{{ asset('storage/' . $galeri->gambar) }}" 
                                     alt="{{ $galeri->judul }}" 
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                
                                <!-- Floating Corner Accent (Modern View) -->
                                <div class="absolute top-4 right-4 md:top-6 md:right-6 opacity-0 group-hover:opacity-100 transition-all duration-700 -translate-y-4 group-hover:translate-y-0">
                                    <div class="w-10 h-10 md:w-12 md:h-12 bg-white/10 backdrop-blur-md rounded-xl md:rounded-2xl flex items-center justify-center text-white border border-white/20">
                                        <i class="fas fa-image text-[10px] md:text-xs"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Label Content (Text Below Image) -->
                            <div class="p-6 md:p-10 relative bg-white flex flex-col h-full">
                                <div class="flex items-center justify-between mb-4">
                                    <p class="text-[9px] md:text-[10px] font-black text-green-600/60 uppercase tracking-[0.3em]">Momen Dokumentasi</p>
                                    <div class="w-6 md:w-8 h-[2px] bg-yellow-400 rounded-full"></div>
                                </div>
                                <h3 class="text-xl md:text-2xl font-black text-gray-900 leading-tight group-hover:text-green-800 transition-colors mb-4 line-clamp-2">
                                    {{ $galeri->judul }}
                                </h3>
                                <p class="text-gray-500 text-xs md:text-sm font-medium leading-relaxed italic line-clamp-3">
                                    {{ $galeri->deskripsi ?? 'Dokumentasi kegiatan dan momen berharga sivitas akademika MA Pergis Ganra.' }}
                                </p>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full py-24 text-center" data-aos="fade-up">
                            <div class="w-24 h-24 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6 text-gray-300">
                                <i class="fas fa-camera-retro text-4xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-400">Belum ada foto di galeri.</h3>
                            <p class="text-gray-400 mt-2">Nantikan dokumentasi kegiatan menarik lainnya!</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
