@extends('layouts.app')

@section('title', 'Visi dan Misi')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-10">
    <h2 class="text-3xl font-bold text-green-800 mb-6 border-b-4 border-green-300 pb-2">Visi dan Misi</h2>

    <!-- Visi -->
    <div class="mb-8">
        <h3 class="text-2xl font-semibold text-green-700 mb-2">Visi</h3>
        <p class="text-gray-700 text-lg">
            Menjadi sekolah unggulan yang membentuk karakter dan prestasi siswa.
        </p>
    </div>

    <!-- Misi -->
    <div>
        <h3 class="text-2xl font-semibold text-green-700 mb-2">Misi</h3>
        <ul class="list-disc list-inside text-gray-700 text-lg space-y-1">
            <li>Meningkatkan kualitas pembelajaran</li>
            <li>Membangun lingkungan yang kondusif</li>
            <li>Menanamkan nilai-nilai moral dan sosial</li>
        </ul>
    </div>
</div>
@endsection
