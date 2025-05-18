@extends('layouts.app')

@section('title', 'Profil Guru')

@section('content')
<div class="px-6 md:px-12 py-14 bg-white min-h-screen">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-extrabold text-gray-800">Profil Guru</h2>
        <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
            Temui para pendidik hebat yang membimbing siswa-siswi MA Pergis Ganra dengan semangat dan dedikasi.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        @foreach($gurus as $guru)
        <div class="bg-gray-50 border border-gray-200 p-6 rounded-xl shadow-sm hover:shadow-md transition">
            <div class="text-center">
                <img src="{{ asset('storage/guru/' . $guru->foto) }}" alt="{{ $guru->nama }}" class="w-24 h-24 mx-auto rounded-full object-cover shadow mb-4">
                <h3 class="text-xl font-semibold text-gray-800">{{ $guru->nama }}</h3>
                <p class="text-sm text-green-600 font-medium mt-1">{{ $guru->mata_pelajaran }}</p>
            </div>
            @if($guru->prestasi)
            <div class="mt-4">
                <h4 class="text-sm font-semibold text-gray-700 mb-1">Prestasi:</h4>
                <ul class="list-disc list-inside text-sm text-gray-600">
                    @foreach(explode(',', $guru->prestasi) as $prestasi)
                        <li>{{ trim($prestasi) }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection
