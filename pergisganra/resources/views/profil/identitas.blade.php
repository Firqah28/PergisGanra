@extends('layouts.app')

@section('title', 'Identitas MA Pergis Ganra')

@section('content')
<main class="bg-gray-50 min-h-screen">
    <!-- Hero Header -->
    <div class="relative bg-green-800 py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-yellow-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-1/4 w-64 h-64 bg-white rounded-full blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-down">
            <div class="flex justify-center mb-6">
                <div class="bg-white/10 p-4 rounded-full backdrop-blur-md border border-white/20 shadow-2xl">
                    <img src="{{ asset('image/logo1.png') }}" alt="Logo MA Pergis Ganra" class="h-20 w-20 object-contain drop-shadow-lg">
                </div>
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight">
                Identitas <span class="text-yellow-400">Madrasah</span>
            </h1>
            <p class="text-green-100 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed font-medium">
                Profil lengkap jati diri, visi, dan misi MA Pergis Ganra sebagai lembaga pendidikan Islam yang berkomitmen pada mutu, prestasi, dan karakter.
            </p>
        </div>
    </div>

    <!-- Struktur Organisasi -->
    <section class="py-24 relative overflow-hidden bg-white" id="struktur">
        <!-- Subtle Floating Gradients -->
        <div class="absolute -left-24 top-1/4 w-96 h-96 bg-green-200 rounded-full blur-[150px] opacity-20 pointer-events-none"></div>
        <div class="absolute -right-24 bottom-1/4 w-96 h-96 bg-yellow-200 rounded-full blur-[150px] opacity-20 pointer-events-none"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-green-900 tracking-tight">
                    Struktur Organisasi
                </h2>
                <div class="w-20 h-1.5 bg-yellow-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="max-w-6xl mx-auto flex flex-col items-center space-y-16">
                <!-- Kepala Sekolah -->
                <div onclick="openModal('kepsek')" 
                     class="cursor-pointer bg-white shadow-xl rounded-3xl p-10 text-center border border-green-50 hover:shadow-2xl 
                            transition transform hover:-translate-y-2 group"
                     data-aos="fade-up">
                    <div class="relative mx-auto w-32 h-32">
                        <img src="{{ asset('image/kepsek.jpg') }}" alt="Kepala Madrasah" 
                             class="w-32 h-32 rounded-full object-cover border-4 border-green-100 shadow-md group-hover:border-green-500 transition-colors">
                        <div class="absolute bottom-0 right-0 bg-yellow-500 text-green-900 w-10 h-10 rounded-full shadow-lg flex items-center justify-center border-2 border-white">
                            <i class="fas fa-user-tie text-sm"></i>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mt-6">H. Muh. Asaad, S.Pd.I.</h3>
                    <p class="text-green-700 font-bold uppercase tracking-wider text-sm mt-1">Kepala Madrasah</p>
                </div>

                <!-- Baris Kedua: Staff - Waka -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 w-full">
                    
                    <!-- Item Builder Helper (Conceptual) -->
                    @php
                        $wakil = [
                            ['role' => 'staff', 'img' => 'staff.png', 'name' => 'Staff Madrasah', 'pos' => 'Administrasi', 'color' => 'green', 'icon' => 'user-cog'],
                            ['role' => 'sarpras', 'img' => 'halija.jpg', 'name' => 'Dra. St. Halijah', 'pos' => 'Waka Sarpras', 'color' => 'yellow', 'icon' => 'tools'],
                            ['role' => 'kesiswaan', 'img' => 'jumaiti.jpg', 'name' => 'Jumaiti, S.Pd.I', 'pos' => 'Waka Kesiswaan', 'color' => 'green', 'icon' => 'users'],
                            ['role' => 'kurikulum', 'img' => 'wakil1.png', 'name' => 'Radhiyah, S.Pd.I., M.Pd.I', 'pos' => 'Waka Kurikulum', 'color' => 'yellow', 'icon' => 'book'],
                        ];
                    @endphp

                    @foreach($wakil as $index => $w)
                    <div onclick="openModal('{{ $w['role'] }}')" 
                         class="cursor-pointer bg-white shadow-lg rounded-3xl p-8 text-center hover:shadow-xl transition transform hover:-translate-y-2 group hover:ring-2 hover:ring-green-500"
                         data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
                        <div class="relative mx-auto w-24 h-24">
                            <img src="{{ asset('image/' . $w['img']) }}" alt="{{ $w['name'] }}" 
                                 class="w-24 h-24 rounded-full object-cover border-4 border-gray-100 group-hover:border-green-200 shadow-sm transition-colors">
                            <div class="absolute -bottom-2 -right-2 bg-green-800 text-white w-8 h-8 rounded-full shadow-md flex items-center justify-center">
                                <i class="fas fa-{{ $w['icon'] }} text-[10px]"></i>
                            </div>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mt-6">{{ $w['name'] }}</h4>
                        <p class="text-green-700 font-semibold text-xs uppercase tracking-widest mt-1">{{ $w['pos'] }}</p>
                    </div>
                    @endforeach
                </div>

                <!-- Baris Ketiga: Guru -->
                <div class="w-full max-w-2xl" data-aos="fade-up">
                    <div onclick="openModal('guru')" 
                         class="cursor-pointer bg-white shadow-xl rounded-3xl p-8 flex flex-col md:flex-row items-center gap-8 hover:shadow-2xl transition transform hover:-translate-y-2 border border-green-50 group">
                        <div class="relative flex-shrink-0 w-28 h-28">
                            <img src="{{ asset('image/guru.jpg') }}" alt="Guru" 
                                 class="w-28 h-28 rounded-full object-cover border-4 border-green-100 group-hover:border-green-500 shadow-md">
                            <div class="absolute -bottom-2 -right-2 bg-yellow-500 text-green-900 w-10 h-10 rounded-full shadow-md flex items-center justify-center border-2 border-white">
                                <i class="fas fa-chalkboard-teacher text-sm"></i>
                            </div>
                        </div>
                        <div class="text-center md:text-left space-y-3">
                            <h4 class="text-2xl font-bold text-gray-900">Majelis Guru MA Pergis Ganra</h4>
                            <p class="text-gray-600 font-medium">Tenaga pendidik profesional yang berdedikasi tinggi dalam mendidik dan membimbing siswa.</p>
                            <a href="{{ url('profil/guru') }}" class="inline-flex items-center text-green-800 font-bold hover:text-green-600 transition group/btn">
                                Lihat Selengkapnya 
                                <i class="fas fa-arrow-right ml-2 transition-transform group-hover/btn:translate-x-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Identity Information Detail -->
    <section class="py-24 bg-gradient-to-b from-white to-green-50/50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                    <div data-aos="fade-right">
                        <div class="inline-flex items-center space-x-2 bg-green-100 text-green-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-4">
                            <span class="w-2 h-2 bg-yellow-500 rounded-full animate-pulse"></span>
                            <span>Legal & Administrasi</span>
                        </div>
                        <h2 class="text-3xl font-extrabold text-green-900 mb-6 tracking-tight">Data Administratif</h2>
                        <p class="text-gray-600 text-lg leading-relaxed font-medium">Informasi resmi mengenai status hukum, akreditasi, dan identifikasi madrasah dalam sistem pendidikan nasional.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    @php
                        $identityData = [
                            ['icon' => 'school', 'label' => 'Nama Sekolah', 'value' => 'MA Perguruan Islam Ganra', 'iconColor' => 'text-green-800'],
                            ['icon' => 'id-card', 'label' => 'NPSN', 'value' => '60729964', 'iconColor' => 'text-green-600'],
                            ['icon' => 'id-badge', 'label' => 'NSM', 'value' => '131 273 120 174', 'iconColor' => 'text-yellow-600'],
                            ['icon' => 'file-invoice', 'label' => 'NPWP', 'value' => '02.980.663.5-808.00', 'iconColor' => 'text-green-800'],
                            ['icon' => 'building', 'label' => 'Status Madrasah', 'value' => 'Swasta (Perguruan Islam)', 'iconColor' => 'text-green-600'],
                            ['icon' => 'map-marker-alt', 'label' => 'Kode Pos', 'value' => '90861', 'iconColor' => 'text-yellow-600'],
                            ['icon' => 'ruler-combined', 'label' => 'Luas Bangunan', 'value' => '18.500 m²', 'iconColor' => 'text-green-800'],
                            ['icon' => 'file-contract', 'label' => 'Akte Pendirian', 'value' => '10 Juli 1959 No.21', 'iconColor' => 'text-green-600'],
                            ['icon' => 'calendar-alt', 'label' => 'Tahun Berdiri', 'value' => '1959', 'iconColor' => 'text-yellow-600'],
                            ['icon' => 'users', 'label' => 'Jumlah Guru', 'value' => $jumlahGuru . ' Orang', 'iconColor' => 'text-green-800'],
                        ];
                    @endphp

                    @foreach($identityData as $index => $data)
                        <div class="group bg-white rounded-2xl p-6 flex items-center gap-5 border border-green-100 shadow-sm hover:shadow-xl hover:border-green-400 hover:-translate-y-1 transition-all duration-300" 
                             data-aos="fade-up" data-aos-delay="{{ 50 * $index }}">
                            <div class="w-14 h-14 bg-green-50 rounded-2xl shadow-inner flex items-center justify-center border border-green-100 group-hover:bg-green-800 transition-colors duration-500 overflow-hidden relative">
                                <!-- Decoration inside icon box -->
                                <div class="absolute -right-2 -bottom-2 w-8 h-8 bg-yellow-400/20 rounded-full blur-sm group-hover:bg-yellow-400/40 transition-all"></div>
                                <i class="fas fa-{{ $data['icon'] }} {{ $data['iconColor'] }} text-xl group-hover:text-white group-hover:scale-110 transition-all duration-500"></i>
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-green-600/60 uppercase tracking-[0.2em] mb-1 group-hover:text-yellow-600 transition-colors">{{ $data['label'] }}</p>
                                <h3 class="text-lg font-bold text-gray-900 leading-tight tracking-tight">{{ $data['value'] }}</h3>
                            </div>
                        </div>
                    @endforeach

                    <!-- Full width address -->
                    <div class="md:col-span-2 bg-green-900 rounded-[2rem] p-8 md:p-12 text-white flex flex-col md:flex-row items-center gap-8 shadow-2xl mt-6 relative overflow-hidden group border-b-8 border-yellow-500" data-aos="zoom-in">
                        <!-- Background glow effect -->
                        <div class="absolute top-0 right-0 w-64 h-64 bg-yellow-500/10 rounded-full blur-3xl -mr-32 -mt-32 group-hover:bg-yellow-500/20 transition-all duration-700"></div>
                        <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -ml-32 -mb-32"></div>
                        
                        <div class="w-20 h-20 bg-yellow-500 rounded-3xl flex items-center justify-center flex-shrink-0 shadow-lg relative z-10 group-hover:rotate-6 transition-transform duration-500">
                            <i class="fas fa-map-marked-alt text-3xl text-green-900"></i>
                        </div>
                        <div class="text-center md:text-left relative z-10">
                            <p class="text-yellow-400 font-black text-xs uppercase tracking-[0.3em] mb-2 opacity-80">Alamat Lembaga</p>
                            <h3 class="text-2xl md:text-3xl font-extrabold leading-tight tracking-tight">
                                Jl. Pendidikan No. 45, Ganra, <span class="text-yellow-400">Kabupaten Soppeng</span>, Sulawesi Selatan
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal System -->
    <div id="modal" class="fixed inset-0 bg-green-950/80 backdrop-blur-sm justify-center items-center z-50 hidden p-4 overflow-y-auto">
        <div class="bg-white rounded-[2.5rem] shadow-2xl max-w-lg w-full p-8 md:p-12 animate-fade-in relative">
            <button onclick="closeModal()" class="absolute top-6 right-6 w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 hover:bg-red-500 hover:text-white transition-all text-2xl group shadow-sm">
                <i class="fas fa-times"></i>
            </button>

            <div class="text-center">
                <div class="relative w-32 h-32 mx-auto mb-8">
                    <div class="absolute inset-0 bg-green-100 rounded-full animate-ping opacity-20"></div>
                    <img id="modalImg" src="" alt="Foto" class="w-32 h-32 relative z-10 rounded-full border-4 border-white shadow-xl object-cover">
                </div>
                <h2 id="modalTitle" class="text-3xl font-extrabold text-green-900 mb-2 tracking-tight line-clamp-1"></h2>
                <p id="modalSubtitle" class="text-yellow-600 font-bold uppercase tracking-widest text-xs mb-8"></p>
                <div class="bg-green-50 p-6 rounded-2xl">
                    <p id="modalContent" class="text-gray-700 leading-relaxed font-medium"></p>
                </div>
                <button onclick="closeModal()" class="mt-8 w-full py-4 bg-green-800 text-white rounded-2xl font-bold hover:bg-green-700 transition shadow-lg shadow-green-900/10 uppercase tracking-widest text-sm">
                    Tutup Profil
                </button>
            </div>
        </div>
    </div>
</main>

<script>
    function openModal(role) {
        const modal = document.getElementById('modal');
        const img = document.getElementById('modalImg');
        const title = document.getElementById('modalTitle');
        const subtitle = document.getElementById('modalSubtitle');
        const content = document.getElementById('modalContent');

        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.classList.add('overflow-hidden');

        if (role === 'kepsek') {
            img.src = "{{ asset('image/kepsek.jpg') }}";
            title.innerText = "H. Muh. Asaad, S.Pd.I.";
            subtitle.innerText = "Kepala Madrasah";
            content.innerText = "H. Muh. Asaad telah mendedikasikan bertahun-tahun pengalaman kepemimpinan untuk memajukan MA Pergis Ganra menuju standar pendidikan nasional yang unggul.";
        } else if (role === 'kurikulum') {
            img.src = "{{ asset('image/wakil1.png') }}";
            title.innerText = "Radhiyah, S.Pd.I., M.Pd.I";
            subtitle.innerText = "Wakil Kepala Kurikulum";
            content.innerText = "Bertanggung jawab dalam merancang sistem pembelajaran modern yang mengintegrasikan IPTEK dengan fondasi IMTAQ yang kuat.";
        } else if (role === 'kesiswaan') {
            img.src = "{{ asset('image/jumaiti.jpg') }}";
            title.innerText = "Jumaiti, S.Pd.I";
            subtitle.innerText = "Wakil Kepala Kesiswaan";
            content.innerText = "Membina karakter siswa melalui berbagai organisasi dan kegiatan ekstrakurikuler serta memastikan kedisiplinan berlandaskan moralitas Islami.";
        } else if (role === 'sarpras') {
            img.src = "{{ asset('image/halija.jpg') }}";
            title.innerText = "Dra. St. Halijah";
            subtitle.innerText = "Wakil Kepala Sarpras";
            content.innerText = "Mengelola infrastruktur madrasah untuk menciptakan lingkungan belajar yang nyaman, aman, dan memadai bagi seluruh sivitas akademika.";
        } else if (role === 'guru') {
            img.src = "{{ asset('image/guru.jpg') }}";
            title.innerText = "Guru Madrasah";
            subtitle.innerText = "Tenaga Pendidik";
            content.innerText = "Majelis guru kami terdiri dari tenaga pendidik profesional yang memiliki kualifikasi di bidangnya masing-masing, siap membimbing generasi masa depan.";
        } else if (role === 'staff') {
            img.src = "{{ asset('image/staff.png') }}";
            title.innerText = "Staff Madrasah";
            subtitle.innerText = "Administrasi & Pegawai";
            content.innerText = "Tim pendukung administrasi yang memastikan kelancaran seluruh operasional dan layanan madrasah kepada siswa dan orang tua.";
        }
    }

    function closeModal() {
        const modal = document.getElementById('modal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.classList.remove('overflow-hidden');
    }

    // Outside click listener
    document.getElementById('modal').addEventListener('click', function(e) {
        if (e.target === this) closeModal();
    });
</script>

<style>
    @keyframes fade-in {
        from { opacity: 0; transform: translateY(20px) scale(0.95); }
        to { opacity: 1; transform: translateY(0) scale(1); }
    }
    .animate-fade-in {
        animation: fade-in 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
</style>
@endsection
