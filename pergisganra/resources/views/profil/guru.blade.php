@extends('layouts.app')

@section('title', 'Profil Guru')

@section('content')
<div class="px-6 md:px-12 py-16 bg-gradient-to-b from-green-100 to-gray-200 min-h-screen">

    <!-- Header -->
    <div class="text-center mb-16" data-aos="fade-down">
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800">Profil Guru</h2>
        <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
            Kenali para pendidik terbaik yang menjadi pilar utama dalam membimbing siswa-siswi 
            <span class="font-semibold text-green-600">MA Pergis Ganra</span> 
            menuju prestasi dan akhlak mulia.
        </p>
        <!-- Garis aksen -->
        <div class="flex justify-center mt-6">
            <span class="w-24 h-1 bg-green-600 rounded-full"></span>
            <span class="w-4 h-1 bg-green-400 mx-2 rounded-full"></span>
            <span class="w-24 h-1 bg-green-600 rounded-full"></span>
        </div>
    </div>

    <!-- Grid Guru -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 max-w-7xl mx-auto">
        @foreach($gurus as $guru)
        <div 
            class="relative flex flex-col items-center text-center bg-white/70 backdrop-blur-lg rounded-3xl shadow-md hover:shadow-2xl transition transform hover:-translate-y-2 group p-8 cursor-pointer"
            data-nama="{{ $guru->nama }}"
            data-mapel="{{ $guru->mata_pelajaran }}"
            data-foto="{{ asset('storage/guru/' . $guru->foto) }}"
            data-deskripsi="{{ $guru->deskripsi ?? 'Belum ada deskripsi.' }}"
            onclick="openModalFromData(this)"
        >
            <!-- Foto Guru -->
            <div class="relative">
                <img src="{{ asset('storage/guru/' . $guru->foto) }}" 
                     alt="{{ $guru->nama }}" 
                     class="w-32 h-32 object-cover rounded-full border-4 border-green-200 shadow-lg transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 rounded-full border-2 border-green-500 animate-pulse opacity-50"></div>
            </div>

            <!-- Nama & Mapel -->
            <h3 class="mt-6 text-xl font-bold text-gray-800 group-hover:text-green-700 transition">
                {{ $guru->nama }}
            </h3>
            <p class="text-sm text-green-600 font-medium italic">{{ $guru->mata_pelajaran }}</p>
        </div>
        @endforeach
    </div>
</div>

<!-- Modal -->
<div id="guruModal" class="fixed inset-0 bg-black/50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300 z-50">
    <div class="bg-white rounded-3xl shadow-xl max-w-2xl w-full relative p-8">
        <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-600 hover:text-gray-900 text-2xl font-bold">&times;</button>
        <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
            <img id="modalFoto" src="" alt="" class="w-40 h-40 object-cover rounded-full border-4 border-green-200 shadow-lg">
            <div>
                <h3 id="modalNama" class="text-2xl font-bold text-gray-800 mb-2"></h3>
                <p id="modalMapel" class="text-green-600 italic mb-4"></p>
                <p id="modalDeskripsi" class="text-gray-700 leading-relaxed"></p>
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<script>
function openModalFromData(el) {
    const nama = el.dataset.nama;
    const mapel = el.dataset.mapel;
    const foto = el.dataset.foto;
    const deskripsi = el.dataset.deskripsi;

    document.getElementById('modalNama').textContent = nama;
    document.getElementById('modalMapel').textContent = mapel;
    document.getElementById('modalFoto').src = foto;
    document.getElementById('modalDeskripsi').textContent = deskripsi;

    const modal = document.getElementById('guruModal');
    modal.classList.remove('opacity-0', 'pointer-events-none');
}

function closeModal() {
    const modal = document.getElementById('guruModal');
    modal.classList.add('opacity-0', 'pointer-events-none');
}

// Tutup modal saat klik di luar
document.getElementById('guruModal').addEventListener('click', function(e) {
    if(e.target === this) closeModal();
});
</script>
@endsection
