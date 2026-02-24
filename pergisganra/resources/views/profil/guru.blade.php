@extends('layouts.app')

@section('title', 'Profil Guru')

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
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Pilar Pendidikan</span>
            </div>
            <h1 class="text-3xl md:text-6xl font-extrabold text-white mb-6 tracking-tight px-4">
                Profil <span class="text-yellow-400">Guru</span>
            </h1>
            <p class="text-green-100 text-base md:text-xl max-w-2xl mx-auto leading-relaxed font-medium px-4">
                Dibimbing oleh tenaga pendidik profesional yang berdedikasi tinggi dalam membentuk karakter dan mencetak prestasi generasi masa depan.
            </p>
        </div>
    </div>

    <!-- Grid Guru -->
    <section class="py-24 bg-gray-50 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl mx-auto">
                @foreach($gurus as $index => $guru)
                <div 
                    class="group relative bg-white rounded-[2rem] md:rounded-[2.5rem] p-6 md:p-10 flex flex-col items-center text-center shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-green-50 hover:border-green-400 cursor-pointer"
                    data-nama="{{ $guru->nama }}"
                    data-mapel="{{ $guru->mata_pelajaran }}"
                    data-foto="{{ asset('storage/guru/' . $guru->foto) }}"
                    data-deskripsi="{{ $guru->deskripsi ?? 'Pendidik profesional di MA Pergis Ganra yang berdedikasi tinggi dalam membimbing siswa-siswi.' }}"
                    onclick="openModalFromData(this)"
                    data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}"
                >
                    <!-- User Icon Backdrop -->
                    <div class="absolute top-6 right-8 opacity-[0.03] group-hover:opacity-[0.08] transition-opacity duration-500">
                        <i class="fas fa-user-tie text-8xl text-green-900"></i>
                    </div>

                    <!-- Foto Guru -->
                    <div class="relative mb-6 md:mb-8">
                        <div class="absolute inset-0 bg-yellow-500 rounded-full blur-xl opacity-0 group-hover:opacity-40 transition-opacity duration-500"></div>
                        <div class="relative w-28 h-28 md:w-36 md:h-36 rounded-full p-1 md:p-1.5 bg-gradient-to-br from-green-600 to-yellow-500 group-hover:rotate-6 transition-transform duration-500">
                            <img src="{{ asset('storage/guru/' . $guru->foto) }}" 
                                 alt="{{ $guru->nama }}" 
                                 class="w-full h-full object-cover rounded-full border-4 border-white shadow-inner">
                        </div>
                    </div>

                    <!-- Nama & Mapel -->
                    <div class="space-y-3 md:space-y-4">
                        <div class="space-y-1">
                            <p class="text-[9px] md:text-[10px] font-black text-green-600 uppercase tracking-[0.3em] opacity-80 group-hover:text-yellow-600 transition-colors">Tenaga Pendidik</p>
                            <h3 class="text-xl md:text-2xl font-black text-gray-900 leading-tight group-hover:text-green-800 transition-colors line-clamp-2">
                                {{ $guru->nama }}
                            </h3>
                        </div>
                        <div class="inline-block px-4 py-1 md:py-1.5 bg-green-50 text-green-800 rounded-full text-[10px] md:text-xs font-bold border border-green-100 group-hover:bg-green-800 group-hover:text-white transition-all">
                            {{ $guru->mata_pelajaran }}
                        </div>
                    </div>

                    <!-- Footer card subtle decoration -->
                    <div class="mt-8 w-12 h-1 bg-gray-200 rounded-full group-hover:bg-green-500 group-hover:w-full transition-all duration-500"></div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modal System -->
    <div id="guruModal" class="fixed inset-0 bg-green-950/80 backdrop-blur-sm flex justify-center items-center opacity-0 pointer-events-none transition-all duration-300 z-50 p-4">
        <div class="bg-white rounded-[2rem] md:rounded-[3rem] shadow-2xl max-w-2xl w-full relative overflow-hidden transform scale-95 transition-transform duration-300" id="modalContainer">
            <!-- Close Button -->
            <button onclick="closeModal()" class="absolute top-4 right-4 md:top-6 md:right-6 w-10 h-10 md:w-12 md:h-12 bg-gray-100 rounded-full flex items-center justify-center text-gray-400 hover:bg-red-500 hover:text-white transition-all z-20 group">
                <i class="fas fa-times text-xl md:text-2xl"></i>
            </button>

            <div class="flex flex-col md:flex-row min-h-[350px] md:min-h-[400px]">
                <!-- Left: Photo side -->
                <div class="md:w-2/5 bg-green-800 p-8 md:p-12 flex flex-col items-center justify-center relative">
                    <!-- Overlay Pattern -->
                    <div class="absolute inset-0 opacity-[0.05]" style="background-image: radial-gradient(white 1.5px, transparent 1.5px); background-size: 20px 20px;"></div>
                    <div class="relative group">
                        <div class="absolute inset-0 bg-yellow-500 rounded-full blur-2xl opacity-20"></div>
                        <img id="modalFoto" src="" alt="" class="w-32 h-32 md:w-40 md:h-40 object-cover rounded-full border-4 border-white shadow-2xl relative z-10">
                    </div>
                </div>
                
                <!-- Right: Info side -->
                <div class="md:w-3/5 p-8 md:p-12 flex flex-col justify-center">
                    <div class="mb-6 md:mb-8">
                        <p class="text-[9px] md:text-xs font-black text-yellow-600 uppercase tracking-[0.3em] mb-2">Profil Pendidik</p>
                        <h3 id="modalNama" class="text-2xl md:text-3xl font-black text-green-900 leading-tight mb-2"></h3>
                        <div class="inline-block px-4 py-1 md:py-1.5 bg-green-100 text-green-800 rounded-full text-[10px] md:text-xs font-bold border border-green-200">
                            <span id="modalMapel"></span>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <i class="fas fa-quote-left text-green-100 text-3xl md:text-4xl absolute -top-3 md:-top-4 -left-2 -z-0"></i>
                        <p id="modalDeskripsi" class="text-sm md:text-base text-gray-700 leading-relaxed font-medium relative z-10"></p>
                    </div>

                    <div class="mt-10 pt-8 border-t border-gray-100">
                        <div class="flex items-center space-x-4 text-green-800 font-bold">
                            <div class="w-10 h-10 bg-green-50 rounded-full flex items-center justify-center">
                                <i class="fas fa-school"></i>
                            </div>
                            <span>MA Pergis Ganra</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

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
    const container = document.getElementById('modalContainer');
    
    modal.classList.remove('opacity-0', 'pointer-events-none');
    container.classList.remove('scale-95');
    container.classList.add('scale-100');
    document.body.classList.add('overflow-hidden');
}

function closeModal() {
    const modal = document.getElementById('guruModal');
    const container = document.getElementById('modalContainer');
    
    modal.classList.add('opacity-0', 'pointer-events-none');
    container.classList.remove('scale-100');
    container.classList.add('scale-95');
    document.body.classList.remove('overflow-hidden');
}

// Close on outside click
document.getElementById('guruModal').addEventListener('click', function(e) {
    if(e.target === this) closeModal();
});
</script>
@endsection
