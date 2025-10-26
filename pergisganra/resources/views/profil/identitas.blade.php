@extends('layouts.app')

@section('title', 'Identitas MA Pergis Ganra')

@section('content')
<div class="relative bg-gradient-to-b from-green-200 to-white text-center space-y-3 py-12" data-aos="fade-down">
    <!-- Aksen logo kecil -->
    <div class="flex justify-center">
        <div class="bg-green-100 p-4 rounded-full shadow-lg ring-4 ring-green-200">
            <img src="{{ asset('image/logo1.png') }}" alt="Logo MA Pergis Ganra" class="h-20 w-20 object-contain">
        </div>
    </div>

    <!-- Judul -->
    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 tracking-wide mt-4">
        Identitas Madrasah
    </h2>

    <!-- Deskripsi -->
    <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed mt-2">
        Profil singkat mengenai jati diri, visi, dan misi MA Pergis Ganra sebagai lembaga pendidikan
        berbasis nilai Islam yang berkomitmen pada mutu, prestasi, dan akhlak mulia.
    </p>
</div>

<!-- Struktur Organisasi -->
<section class="relative bg-gradient-to-b from-white to-green-50 py-12" id="struktur">
    <!-- Heading -->
    <div class="text-center mb-8" data-aos="fade-down">
        <h2 class="text-3xl md:text-4xl font-extrabold text-green-700 mb-2">
            Struktur Organisasi MA Pergis Ganra
        </h2>
        <div class="flex justify-center mt-3">
            <span class="w-20 h-1 bg-green-500 rounded-full"></span>
        </div>
    </div>

<div class="max-w-6xl mx-auto flex flex-col items-center space-y-14 relative z-10">

    <!-- Kepala Sekolah -->
    <div onclick="openModal('kepsek')" 
         class="cursor-pointer bg-white shadow-xl rounded-3xl p-10 text-center border border-green-100 hover:shadow-2xl 
                transition transform hover:-translate-y-2 hover:ring-2 hover:ring-green-400"
         data-aos="fade-down" data-aos-delay="100">
        <div class="relative mx-auto w-28 h-28">
            <img src="{{ asset('image/kepsek.jpg') }}" alt="Kepala Madrasah" 
                 class="w-28 h-28 rounded-full object-cover border-4 border-green-500 shadow-md">
            <div class="absolute -bottom-2 -right-2 bg-green-500 text-white p-2 rounded-full shadow-md">
                <i class="fas fa-user-tie text-sm"></i>
            </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mt-4">H. Muh. Asaad, S.Pd.I.</h3>
        <p class="text-green-600 font-medium mt-1">Kepala Madrasah</p>
    </div>

    <!-- Baris Kedua: Staff - Sarpras - Kesiswaan - Kurikulum -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 w-full text-center">

        <!-- Staff -->
        <div onclick="openModal('staff')" 
             class="cursor-pointer bg-white shadow-lg rounded-3xl p-8 hover:shadow-2xl 
                    transition transform hover:-translate-y-2 hover:ring-2 hover:ring-red-400"
             data-aos="fade-up" data-aos-delay="200">
            <div class="relative mx-auto w-24 h-24">
                <img src="{{ asset('image/staff.png') }}" alt="Staff" 
                     class="w-24 h-24 rounded-full object-cover border-4 border-red-500 shadow-md">
                <div class="absolute -bottom-2 -right-2 bg-red-500 text-white p-2 rounded-full shadow-md">
                    <i class="fas fa-user-cog text-xs"></i>
                </div>
            </div>
            <h4 class="text-lg font-semibold text-gray-800 mt-4">Staff Madrasah</h4>
            <p class="text-red-600">Staff </p>
        </div>

        <!-- Sarpras -->
        <div onclick="openModal('sarpras')" 
             class="cursor-pointer bg-white shadow-lg rounded-3xl p-8 hover:shadow-2xl 
                    transition transform hover:-translate-y-2 hover:ring-2 hover:ring-purple-400"
             data-aos="fade-up" data-aos-delay="300">
            <div class="relative mx-auto w-24 h-24">
                <img src="{{ asset('image/halija.jpg') }}" alt="Sarpras" 
                     class="w-24 h-24 rounded-full object-cover border-4 border-purple-500 shadow-md">
                <div class="absolute -bottom-2 -right-2 bg-purple-500 text-white p-2 rounded-full shadow-md">
                    <i class="fas fa-tools text-xs"></i>
                </div>
            </div>
            <h4 class="text-lg font-semibold text-gray-800 mt-4">Dra. St. Halijah</h4>
            <p class="text-purple-600">Wakil Kepala Sarpras</p>
        </div>

        <!-- Kesiswaan -->
        <div onclick="openModal('kesiswaan')" 
             class="cursor-pointer bg-white shadow-lg rounded-3xl p-8 hover:shadow-2xl 
                    transition transform hover:-translate-y-2 hover:ring-2 hover:ring-yellow-400"
             data-aos="fade-up" data-aos-delay="400">
            <div class="relative mx-auto w-24 h-24">
                <img src="{{ asset('image/jumaiti.jpg') }}" alt="Kesiswaan" 
                     class="w-24 h-24 rounded-full object-cover border-4 border-yellow-500 shadow-md">
                <div class="absolute -bottom-2 -right-2 bg-yellow-500 text-white p-2 rounded-full shadow-md">
                    <i class="fas fa-users text-xs"></i>
                </div>
            </div>
            <h4 class="text-lg font-semibold text-gray-800 mt-4">Jumaiti, S.Pd.I</h4>
            <p class="text-yellow-600">Wakil Kepala Kesiswaan</p>
        </div>

        <!-- Kurikulum -->
        <div onclick="openModal('kurikulum')" 
             class="cursor-pointer bg-white shadow-lg rounded-3xl p-8 hover:shadow-2xl 
                    transition transform hover:-translate-y-2 hover:ring-2 hover:ring-blue-400"
             data-aos="fade-up" data-aos-delay="500">
            <div class="relative mx-auto w-24 h-24">
                <img src="{{ asset('image/wakil1.png') }}" alt="Kurikulum" 
                     class="w-24 h-24 rounded-full object-cover border-4 border-blue-500 shadow-md">
                <div class="absolute -bottom-2 -right-2 bg-blue-500 text-white p-2 rounded-full shadow-md">
                    <i class="fas fa-book text-xs"></i>
                </div>
            </div>
            <h4 class="text-lg font-semibold text-gray-800 mt-4">Radhiyah, S.Pd.I., M.Pd.I</h4>
            <p class="text-blue-600">Wakil Kepala Kurikulum</p>
        </div>
    </div>

    <!-- Baris Ketiga: Guru -->
    <div class="w-full flex justify-center">
        <div onclick="openModal('guru')" 
             class="cursor-pointer bg-white shadow-lg rounded-3xl p-8 text-center hover:shadow-2xl 
                    transition transform hover:-translate-y-2 hover:ring-2 hover:ring-pink-400 w-full md:w-1/2"
             data-aos="fade-up" data-aos-delay="600">
            <div class="relative mx-auto w-24 h-24">
                <img src="{{ asset('image/guru.jpg') }}" alt="Guru" 
                     class="w-24 h-24 rounded-full object-cover border-4 border-pink-500 shadow-md">
                <div class="absolute -bottom-2 -right-2 bg-pink-500 text-white p-2 rounded-full shadow-md">
                    <i class="fas fa-chalkboard-teacher text-xs"></i>
                </div>
            </div>
            <h4 class="text-lg font-bold text-gray-800 mt-4">Guru MA Pergis Ganra</h4>
            <p class="text-pink-600 mb-4">Tenaga Pendidik</p>
            <a href="{{ url('profil/guru') }}" 
               class="inline-block bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-5 rounded-full shadow-md 
                      transition transform hover:-translate-y-1 hover:shadow-lg">
                Show More
            </a>
        </div>
    </div>
</div>
</section>

<!-- Modal -->
<div id="modal"
     class="fixed inset-0 bg-black/50 justify-center items-center z-50 hidden">
    <div class="bg-white rounded-xl shadow-xl max-w-lg w-full p-6 animate-fade-in relative">
        <!-- Tombol close -->
        <button onclick="closeModal()" 
                class="absolute top-3 right-3 text-gray-600 hover:text-red-500 text-xl font-bold">
        x
        </button>

        <!-- Gambar -->
        <img id="modalImg" src="" alt="Foto" class="w-32 h-32 mx-auto rounded-full shadow-md mb-4">

        <!-- Judul & Subjudul -->
        <h2 id="modalTitle" class="text-xl font-semibold text-center"></h2>
        <p id="modalSubtitle" class="text-gray-600 text-center mb-3"></p>

        <!-- Isi konten -->
        <p id="modalContent" class="text-gray-700 text-justify"></p>
    </div>
</div>

    <!-- Deskripsi -->
    <p class="text-gray-500 text-lg md:text-xl max-w-2xl mx-auto mb-10 text-center">
        Informasi lengkap mengenai profil dan identitas resmi MA Pergis Ganra.
    </p>


    <!-- Card Informasi -->
    <div class="bg-white shadow-2xl rounded-3xl p-8 md:p-12 max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">
        
        <!-- Item Identitas -->
        <div class="flex items-start gap-4" data-aos="fade-up" data-aos-delay="100">
            <div class="bg-indigo-100 p-3 rounded-full shadow-md">
                <i class="fas fa-school text-indigo-600 text-xl"></i>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Nama Sekolah</p>
                <h3 class="text-xl font-semibold text-gray-800">MA Perguruan Islam Ganra</h3>
            </div>
        </div>

        <div class="flex items-start gap-4" data-aos="fade-up" data-aos-delay="200">
            <div class="bg-green-100 p-3 rounded-full shadow-md">
                <i class="fas fa-id-badge text-yellow-600 text-xl"></i>
            </div>
            <div>
                <p class="text-gray-500 text-sm">NPSN</p>
                <h3 class="text-xl font-semibold text-gray-800">60729964</h3>
            </div>
        </div>

        <div class="flex items-start gap-4" data-aos="fade-up" data-aos-delay="300">
            <div class="bg-yellow-100 p-3 rounded-full shadow-md">
                <i class="fas fa-id-badge text-yellow-600 text-xl"></i>
            </div>
            <div>
                <p class="text-gray-500 text-sm">NSM</p>
                <h3 class="text-xl font-semibold text-gray-800">131 273 120 174</h3>
            </div>
        </div>

        <div class="flex items-start gap-4" data-aos="fade-up" data-aos-delay="400">
            <div class="bg-pink-100 p-3 rounded-full shadow-md">
                <i class="fas fa-file-invoice text-pink-600 text-xl"></i>
            </div>
            <div>
                <p class="text-gray-500 text-sm">NPWP</p>
                <h3 class="text-xl font-semibold text-gray-800">02.980.663.5-808.00</h3>
            </div>
        </div>

        <div class="flex items-start gap-4" data-aos="fade-up" data-aos-delay="500">
            <div class="bg-blue-100 p-3 rounded-full shadow-md">
                <i class="fas fa-check-circle text-blue-600 text-xl"></i>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Status Madrasah</p>
                <h3 class="text-xl font-semibold text-gray-800">Negeri</h3>
            </div>
        </div>

        <div class="flex items-start gap-4" data-aos="fade-up" data-aos-delay="600">
            <div class="bg-purple-100 p-3 rounded-full shadow-md">
                <i class="fas fa-map-marker-alt text-purple-600 text-xl"></i>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Kode Pos</p>
                <h3 class="text-xl font-semibold text-gray-800">90861</h3>
            </div>
        </div>

        <div class="flex items-start gap-4" data-aos="fade-up" data-aos-delay="700">
            <div class="bg-teal-100 p-3 rounded-full shadow-md">
                <i class="fas fa-building text-teal-600 text-xl"></i>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Luas Bangunan</p>
                <h3 class="text-xl font-semibold text-gray-800">18.500 m<sup>2</sup></h3>
            </div>
        </div>

        <div class="flex items-start gap-4" data-aos="fade-up" data-aos-delay="800">
            <div class="bg-red-100 p-3 rounded-full shadow-md">
                <i class="fas fa-file-contract text-red-600 text-xl"></i>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Nomor Akte Pendirian</p>
                <h3 class="text-xl font-semibold text-gray-800">10 Juli 1959 No.21 (O.D.Pietersz)</h3>
            </div>
        </div>

        <div class="md:col-span-2 flex items-start gap-4" data-aos="fade-up" data-aos-delay="900">
            <div class="bg-orange-100 p-3 rounded-full shadow-md">
                <i class="fas fa-map text-orange-600 text-xl"></i>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Alamat Sekolah</p>
                <h3 class="text-xl font-semibold text-gray-800">
                    Jl. Pendidikan No. 45, Ganra, Kabupaten Soppeng, Sulawesi Selatan
                </h3>
            </div>
        </div>

        <div class="flex items-start gap-4" data-aos="fade-up" data-aos-delay="1000">
            <div class="bg-lime-100 p-3 rounded-full shadow-md">
                <i class="fas fa-calendar text-lime-600 text-xl"></i>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Tahun Berdiri</p>  
                <h3 class="text-xl font-semibold text-gray-800">1959</h3>
            </div>
        </div>

        <div class="flex items-start gap-4" data-aos="fade-up" data-aos-delay="1100">
            <div class="bg-cyan-100 p-3 rounded-full shadow-md">
                <i class="fas fa-chalkboard-teacher text-cyan-600 text-xl"></i>
            </div>
            <div>
                <p class="text-gray-500 text-sm">Jumlah Guru</p>
                <h3 class="text-xl font-semibold text-gray-800">{{ $jumlahGuru }} orang</h3>
            </div>
        </div>
    </div>
</div>

<script>
    function openModal(role) {
        const modal = document.getElementById('modal');
        const img = document.getElementById('modalImg');
        const title = document.getElementById('modalTitle');
        const subtitle = document.getElementById('modalSubtitle');
        const content = document.getElementById('modalContent');

            // Tampilkan modal: hilangkan hidden, jadikan flex
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        
        document.addEventListener('click', (e) => {
        const modal = document.getElementById('modal');
        if (!modal.classList.contains('hidden') && e.target === modal) {
        closeModal();
        }
    });

        if (role === 'kepsek') {
            img.src = "{{ asset('image/kepsek.jpg') }}";
            title.innerText = "H. Muh. Asaad, S.Pd.I.";
            subtitle.innerText = "Kepala Madrasah";
            content.innerText = "Kepala Madrasah sejak 2020. Berpengalaman lebih dari 15 tahun di dunia pendidikan.";
        } else if (role === 'kurikulum') {
            img.src = "{{ asset('image/wakil1.png') }}";
            title.innerText = "Radhiyah, S.Pd.I., M.Pd.I";
            subtitle.innerText = "Wakil Kepala Madrasah Kurikulum";
            content.innerText = "Mengembangkan kurikulum dan strategi pembelajaran modern di madrasah.";
        } else if (role === 'kesiswaan') {
            img.src = "{{ asset('image/jumaiti.jpg') }}";
            title.innerText = "Jumaiti, S.Pd.I";
            subtitle.innerText = "Wakil Kepala Madrasah Kesiswaan";
            content.innerText = "Membina peserta didik dalam kegiatan akademik maupun non-akademik.";
        } else if (role === 'sarpras') {
            img.src = "{{ asset('image/halija.jpg') }}";
            title.innerText = "Dra. St. Halijah";
            subtitle.innerText = "Wakil Kepala Madrasah Sarana Prasarana";
            content.innerText = "Bertanggung jawab atas pengelolaan sarana dan prasarana madrasah.";
        } else if (role === 'guru') {
            img.src = "{{ asset('image/backround1.jpg') }}";
            title.innerText = "Guru MA Pergis Ganra";
            subtitle.innerText = "Tenaga Pendidik";
            content.innerText = "Terdiri dari guru profesional yang berdedikasi dalam mengajar dan mendidik siswa.";
        } else if (role === 'staff') {
            img.src = "{{ asset('image/staff.png') }}";
            title.innerText = "Staff Madrasah";
            subtitle.innerText = "Staff & Pegawai";
            content.innerText = "Mendukung seluruh kegiatan administrasi dan operasional madrasah.";
        }

        modal.classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
        m.classList.add('hidden'); // sembunyikan lagi
    }
</script>

<style>
    @keyframes fade-in {
        from { opacity: 0; transform: scale(0.9); }
        to { opacity: 1; transform: scale(1); }
    }
    .animate-fade-in {
        animation: fade-in 0.3s ease-out;
    }
</style>
@endsection
