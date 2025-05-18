@extends('layouts.app')

@section('content')
<div class="p-6">
    <a href="{{ route('guru.create') }}" class="bg-green-600 text-white px-4 py-2 rounded">Tambah Guru</a>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
        @foreach($gurus as $guru)
        <div class="p-4 border rounded shadow bg-white">
            <img src="{{ asset('storage/guru/' . $guru->foto) }}" alt="" class="w-20 h-20 object-cover rounded-full mb-2">
            <h2 class="font-bold">{{ $guru->nama }}</h2>
            <p>{{ $guru->mata_pelajaran }}</p>
            <div class="flex gap-2 mt-2">
                <a href="{{ route('guru.edit', $guru->id) }}" class="text-blue-500">Edit</a>
                <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" onsubmit="return confirm('Yakin?')">
                    @csrf @method('DELETE')
                    <button class="text-red-500">Hapus</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
