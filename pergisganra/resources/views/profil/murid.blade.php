@extends('layouts.app')

@section('title', 'Profil Murid')

@section('content')
<main class="bg-white min-h-screen">
    <!-- Hero Header -->
    <div class="relative bg-green-800 py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-yellow-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-1/4 w-64 h-64 bg-white rounded-full blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-down">
            <div class="inline-flex items-center space-x-2 bg-white/10 text-yellow-400 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-6 border border-white/10 backdrop-blur-md">
                <i class="fas fa-user-graduate"></i>
                <span>Sivitas Akademika</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight">
                Profil <span class="text-yellow-400">Murid</span>
            </h1>
            <p class="text-green-100 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed font-medium">
                Membina generasi Rabbani yang unggul dalam IPTEK, berkarakter dalam IMTAQ, dan siap berkontribusi bagi masyarakat.
            </p>
        </div>
    </div>

    <!-- Stats & Total -->
    <section class="py-20 bg-gray-50 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-6xl mx-auto">
                <!-- Main Counter Box -->
                <div class="bg-white rounded-[2.5rem] shadow-2xl p-8 md:p-12 mb-16 border border-green-50 relative overflow-hidden group" data-aos="fade-up">
                    <div class="absolute top-0 right-0 w-64 h-full bg-green-800 transform skew-x-12 translate-x-32 hidden md:block"></div>
                    
                    <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
                        <div class="text-center md:text-left">
                            <h2 class="text-3xl font-extrabold text-green-900 mb-2">Total Jumlah Siswa</h2>
                            <p class="text-gray-500 font-medium mb-6">Tahun Pelajaran 2023/2024</p>
                            <div class="flex items-baseline gap-2">
                                <span class="text-7xl md:text-8xl font-black text-green-800 tracking-tighter">139</span>
                                <span class="text-xl font-bold text-yellow-600 uppercase tracking-widest">Siswa Terdaftar</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0 relative">
                            <div class="w-40 h-40 bg-yellow-500 rounded-3xl flex items-center justify-center shadow-lg group-hover:rotate-6 transition-transform duration-500 border-4 border-white">
                                <i class="fas fa-users text-6xl text-green-900"></i>
                            </div>
                            <!-- Small accent -->
                            <div class="absolute -bottom-4 -left-4 w-12 h-12 bg-green-800 rounded-full flex items-center justify-center text-white text-xl shadow-lg">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Secondary Stats -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @php
                        $muridStats = [
                            ['icon' => 'door-open', 'label' => 'Total Kelas', 'value' => '7 Kelas'],
                            ['icon' => 'star', 'label' => 'Aktivitas', 'value' => 'Unggulan'],
                            ['icon' => 'calendar-check', 'label' => 'Kehadiran', 'value' => '95% Average'],
                            ['icon' => 'medal', 'label' => 'Prestasi', 'value' => 'Meningkat'],
                        ];
                    @endphp

                    @foreach($muridStats as $idx => $stat)
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-green-50 hover:border-green-400 hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="{{ $idx * 100 }}">
                        <div class="w-12 h-12 bg-green-100 rounded-2xl flex items-center justify-center text-green-800 mb-6">
                            <i class="fas fa-{{ $stat['icon'] }} text-xl"></i>
                        </div>
                        <p class="text-[10px] font-black text-green-600/60 uppercase tracking-widest mb-1">{{ $stat['label'] }}</p>
                        <h4 class="text-xl font-bold text-gray-900">{{ $stat['value'] }}</h4>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Aktivitas Unggulan -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                    <div data-aos="fade-right">
                        <h2 class="text-4xl font-extrabold text-green-900 mb-8 tracking-tight">Aktivitas Unggulan & <span class="text-yellow-600">Ekskul</span></h2>
                        <p class="text-gray-600 text-lg leading-relaxed mb-10 font-medium">Kami menyediakan berbagai wadah pengembangan diri untuk mengasah minat, bakat, dan karakter setiap siswa.</p>
                        
                        <div class="space-y-6">
                            @foreach(['Ekstrakurikuler Pramuka', 'Olahraga & Senam Pagi', 'Kegiatan Sosial & Keagamaan', 'Proyek Kolaboratif Antar Kelas'] as $feature)
                            <div class="flex items-center gap-4 group">
                                <div class="w-10 h-10 bg-green-50 rounded-full flex items-center justify-center text-green-600 group-hover:bg-green-800 group-hover:text-white transition-colors">
                                    <i class="fas fa-check text-sm"></i>
                                </div>
                                <span class="text-gray-800 font-bold tracking-tight text-lg">{{ $feature }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="relative" data-aos="fade-left">
                        <div class="bg-green-900 rounded-[3rem] overflow-hidden shadow-2xl rotate-2 hover:rotate-0 transition-transform duration-500">
                            <img src="{{ asset('image/pramuka1.jpg') }}" alt="Student Activities" class="w-full h-[500px] object-cover opacity-80">
                        </div>
                        <!-- Absolute floating card -->
                        <div class="absolute -bottom-10 -left-10 bg-white p-8 rounded-3xl shadow-2xl max-w-xs border border-green-50 hidden md:block">
                            <i class="fas fa-quote-left text-yellow-500 text-3xl mb-4"></i>
                            <p class="text-gray-700 font-medium italic mb-4">"Sekolah disini seru banget, banyak kegiatan yang bikin kita jadi lebih berani dan kreatif!"</p>
                            <p class="text-green-800 font-black text-sm uppercase">- Siswa Kelas XII</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri Aktivitas Sections -->
    <section class="py-24 bg-gray-50 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-extrabold text-green-900 tracking-tight">Galeri Aktivitas Murid</h2>
                <div class="w-24 h-1.5 bg-yellow-500 mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                @foreach([
                    ['Pramuka', 'Latihan kepemimpinan dan kemandirian.', 'image/pramuka1.jpg'],
                    ['PMR', 'Pelayanan kesehatan dan kepedulian sesama.', 'image/pmr.jpg'],
                    ['Kegiatan Sosial', 'Membangun empati terhadap masyarakat.', 'image/sosial.jpg'],
                    ['Lomba Kreativitas', 'Mengasah kemampuan kritis dan kreatif.', 'image/lomba.jpg'],
                    ['Kegiatan Keagamaan', 'Penguatan nilai spiritual dan akhlak.', 'image/pengajian.jpg'],
                    ['Proyek Tim', 'Kolaborasi nyata membangun kerjasama.', 'image/kolab.jpg']
                ] as $index => [$title, $desc, $img])
                <div class="group bg-white rounded-[2rem] shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 translate-y-0 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="relative overflow-hidden h-64">
                        <img src="{{ asset($img) }}" alt="{{ $title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-green-950/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                            <p class="text-white text-sm font-medium">{{ $desc }}</p>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-center mb-2">
                            <h4 class="text-2xl font-bold text-gray-900 tracking-tight">{{ $title }}</h4>
                            <div class="w-8 h-8 rounded-full bg-green-50 flex items-center justify-center text-green-600 group-hover:bg-yellow-500 group-hover:text-green-900 transition-colors">
                                <i class="fas fa-arrow-up-right-from-square text-xs"></i>
                            </div>
                        </div>
                        <div class="w-10 h-1 bg-green-500 rounded-full group-hover:w-full transition-all duration-500"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
