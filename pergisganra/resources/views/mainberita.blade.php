@extends('layouts.app')

@section('title', 'Berita MA Pergis Ganra')

@section('content')
<div class="px-6 md:px-12 py-16 bg-gray-50 min-h-screen">
    <div class="mb-14 text-center">
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">Berita Terbaru</h2>
        <p class="text-gray-500 text-lg md:text-xl max-w-2xl mx-auto">Selalu update berita dan informasi seputar MA Pergis Ganra.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        @foreach ($beritas as $berita)
            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col">
                @if ($berita->gambar)
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-56 object-cover hover:scale-105 transition-transform duration-300">
                @else
                    <img src="https://via.placeholder.com/400x300?text=No+Image" alt="No Image" class="w-full h-56 object-cover">
                @endif

                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 line-clamp-2">{{ $berita->judul }}</h3>
                    <p class="text-gray-400 text-xs mb-4">{{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }}</p>
                    <div class="text-gray-600 text-sm leading-relaxed flex-grow">
                        {!! Str::limit(strip_tags($berita->isi), 200, '...') !!}
                    </div>
                    <div class="mt-4">
                        <a href="#" class="inline-block text-green-600 font-semibold hover:underline text-sm">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination kalau ada -->
    <div class="mt-12">
        {{ $beritas->links() }}
    </div>
</div>
@endsection
