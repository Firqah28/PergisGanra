@extends('layouts.app')

@section('title', 'Galeri Sekolah')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-green-100 to-gray-200 bg-gray-100 py-10 px-6">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Galeri Sekolah</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($galeris as $galeri)
                <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800">{{ $galeri->judul }}</h3>
                        @if($galeri->deskripsi)
                            <p class="text-gray-600 text-sm mt-2">{{ $galeri->deskripsi }}</p>
                        @endif
                    </div>
                </div>
            @empty
                <p class="text-gray-600 col-span-3 text-center">Belum ada foto di galeri.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
