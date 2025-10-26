@extends('layouts.app')

@section('content')
<div class="p-6">
    <a href="{{ route('berita.create') }}" class="bg-green-600 text-white px-4 py-2 rounded">Tambah Berita</a>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
        @foreach($berita as $item)
        <div class="p-4 border rounded shadow bg-white">
            @if ($item->gambar)
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-48 object-cover mb-4 rounded">
            @endif
            <h2 class="font-bold">{{ $item->judul }}</h2>
            <p class="text-sm text-gray-600">
                {{ $item->penulis }} - 
                @if($item->tanggal_rilis)
                    {{ \Carbon\Carbon::parse($item->tanggal_rilis)->format('d M Y') }}
                @endif
                <p class="text-sm text-gray-500 mb-2">
    {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
</p>
            </p>
            <p class="mt-2">{{ \Illuminate\Support\Str::limit($item->isi, 100) }}</p>
            <div class="flex gap-2 mt-2">
                <a href="{{ route('berita.edit', $item->id) }}" class="text-blue-500">Edit</a>
                <form action="{{ route('berita.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500">Hapus</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
