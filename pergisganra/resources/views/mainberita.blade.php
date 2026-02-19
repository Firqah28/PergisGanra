@extends('layouts.app')

@section('title', 'Berita MA Pergis Ganra')

@section('content')
<main class="bg-white min-h-screen">
    <!-- Newsroom Header -->
    <header class="bg-gray-50 border-b border-gray-100 py-20 relative overflow-hidden">
        <!-- Floating Brand Accents -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-green-50 rounded-full blur-3xl opacity-60"></div>
        <div class="absolute top-1/2 -right-24 w-64 h-64 bg-yellow-50 rounded-full blur-3xl opacity-60"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-down">
                <div class="inline-flex items-center space-x-2 bg-green-800 text-white px-5 py-2 rounded-full text-xs font-black uppercase tracking-[0.2em] mb-8 shadow-lg shadow-green-900/20">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-yellow-500"></span>
                    </span>
                    <span>News Feed & Updates</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-black text-green-950 mb-6 tracking-tight leading-none">
                    Kabar <span class="text-green-600 underline decoration-yellow-400 decoration-8 underline-offset-[12px]">Madrasah</span>
                </h1>
                <p class="text-gray-500 text-xl font-medium max-w-2xl mx-auto leading-relaxed">
                    Informasi terkini mengenai prestasi, kegiatan, dan perkembangan akademik di MA Pergis Ganra.
                </p>
            </div>
        </div>
    </header>

    <!-- News Grid -->
    <section class="py-24 bg-white relative">
        <div class="container mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 max-w-7xl mx-auto">
                @foreach ($beritas as $index => $berita)
                <article class="group relative flex flex-col bg-white rounded-[2rem] overflow-hidden transition-all duration-500 hover:-translate-y-3" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                    <!-- Image Wrapper -->
                    <div class="relative h-72 overflow-hidden">
                        @if ($berita->gambar)
                            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        @else
                            <div class="w-full h-full bg-green-50 flex items-center justify-center text-green-200">
                                <i class="far fa-image text-6xl"></i>
                            </div>
                        @endif

                        <!-- Date Badge Overlay -->
                        <div class="absolute bottom-6 left-6 flex items-center bg-white/90 backdrop-blur shadow-xl rounded-2xl p-4 transform transition-transform group-hover:scale-105">
                            <div class="text-center">
                                <p class="text-[10px] font-black text-green-600 uppercase tracking-widest leading-none mb-1">
                                    {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('M') }}
                                </p>
                                <p class="text-2xl font-black text-green-950 leading-none">
                                    {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d') }}
                                </p>
                            </div>
                            <div class="ml-4 pl-4 border-l border-green-100 flex flex-col justify-center">
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest leading-none">
                                    {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('Y') }}
                                </p>
                            </div>
                        </div>

                        <!-- Card Accent -->
                        <div class="absolute inset-0 bg-gradient-to-t from-green-950/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>

                    <!-- Content -->
                    <div class="p-10 flex flex-col flex-grow relative bg-white border-x border-b border-gray-100 rounded-b-[2rem] shadow-sm group-hover:shadow-2xl group-hover:border-green-100 transition-all duration-500">
                        <!-- Category Tag (Mockup as none in DB) -->
                        <div class="mb-4">
                            <span class="text-[10px] font-black text-yellow-600 uppercase tracking-[0.2em] px-3 py-1 bg-yellow-50 rounded-full">
                                #WartaTerbaru
                            </span>
                        </div>

                        <h3 class="text-2xl font-black text-green-950 mb-4 line-clamp-2 leading-[1.3] group-hover:text-green-700 transition-colors">
                            {{ $berita->judul }}
                        </h3>

                        <div class="text-gray-500 text-sm leading-relaxed flex-grow font-medium mb-8">
                            {!! Str::limit(strip_tags($berita->isi), 120, '...') !!}
                        </div>

                        <!-- Read More Button -->
                        <div class="mt-auto">
                            @if($berita->sumber)
                                <a href="{{ $berita->sumber }}" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="inline-flex items-center space-x-3 text-green-800 font-black text-sm uppercase tracking-widest group/btn">
                                    <span>Lanjutkan Baca</span>
                                    <div class="w-8 h-8 rounded-full bg-green-50 flex items-center justify-center group-hover/btn:bg-green-800 group-hover/btn:text-white transition-all">
                                        <i class="fas fa-arrow-right text-[10px]"></i>
                                    </div>
                                </a>
                            @endif
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
