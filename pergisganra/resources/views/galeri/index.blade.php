@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
<div class="min-h-screen bg-gray-100 py-10 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Galeri</h2>
            <a href="{{ route('galeri.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                ➕ Tambah Gambar
            </a>
        </div>

        @if (session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($galeris as $galeri)
                <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800">{{ $galeri->judul }}</h3>
                        @if($galeri->deskripsi)
                            <p class="text-gray-600 text-sm mt-2">{{ $galeri->deskripsi }}</p>
                        @endif

                        <div class="flex justify-between mt-4">
                            <!-- Edit Button -->
                            <a href="{{ route('galeri.edit', $galeri->id) }}" class="text-blue-600 hover:text-blue-800 transition">
                                ✏️ Edit
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus gambar ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 transition">
                                    🗑️ Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-gray-600">Belum ada gambar di galeri.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
