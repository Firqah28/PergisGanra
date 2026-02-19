@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="min-h-screen bg-gray-50 pb-12">
    <!-- Premium Branded Header -->
    <div class="bg-green-800 text-white pt-10 pb-24 px-6 relative overflow-hidden shadow-inner">
        <!-- Visual Accents -->
        <div class="absolute top-0 right-0 -mt-16 -mr-16 w-64 h-64 bg-green-700 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -mb-16 -ml-16 w-48 h-48 bg-yellow-400 rounded-full opacity-10 blur-2xl"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div>
                    <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-green-900/40 text-yellow-400 text-xs font-bold tracking-widest uppercase mb-4 border border-green-700/50">
                        <i class="fas fa-shield-halved mr-2"></i> Portal Manajemen
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black tracking-tight">Dashboard Admin</h2>
                    <p class="text-green-100 font-medium mt-3 text-lg">Kelola konten dan data madrasah dengan efisien.</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="bg-white/10 backdrop-blur-lg p-5 rounded-2xl border border-white/20 shadow-xl max-w-xs">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center text-green-950 shadow-inner">
                                <i class="fas fa-key text-xl"></i>
                            </div>
                            <div>
                                <p class="text-[10px] text-green-300 uppercase font-black tracking-tighter">Akses Terotorisasi</p>
                                <p class="text-sm font-bold text-white">{{ Auth::user()->name }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Logout Button -->
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-600 hover:bg-red-500 text-white p-5 rounded-2xl shadow-xl border border-red-500/50 transition-all transform hover:-translate-y-1 group">
                            <i class="fas fa-sign-out-alt text-xl group-hover:rotate-12 transition-transform"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Dashboard Body -->
    <div class="max-w-7xl mx-auto px-6 -mt-12 relative z-20">
        <!-- Dashboard Statistics -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <!-- Total Pengguna -->
            <div class="group bg-white p-7 rounded-3xl shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-4 opacity-5 group-hover:scale-125 transition-transform">
                    <i class="fas fa-users text-5xl"></i>
                </div>
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-green-50 rounded-2xl flex items-center justify-center text-green-600 shadow-sm border border-green-100">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4 class="ml-3 text-sm font-bold text-gray-400 uppercase tracking-widest">Pengguna</h4>
                </div>
                <p class="text-4xl font-black text-gray-800">{{ \App\Models\User::count() }}</p>
                <div class="mt-4 flex items-center text-xs text-green-600 font-bold bg-green-50 w-fit px-2 py-0.5 rounded">
                    <i class="fas fa-circle text-[6px] mr-1.5 animate-pulse"></i> Terdaftar
                </div>
            </div>

            <!-- Total Guru -->
            <div class="group bg-white p-7 rounded-3xl shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-4 opacity-5 group-hover:scale-125 transition-transform">
                    <i class="fas fa-chalkboard-teacher text-5xl"></i>
                </div>
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 shadow-sm border border-blue-100">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h4 class="ml-3 text-sm font-bold text-gray-400 uppercase tracking-widest">Guru</h4>
                </div>
                <p class="text-4xl font-black text-gray-800">{{ \App\Models\Guru::count() }}</p>
                <div class="mt-4 flex items-center text-xs text-blue-600 font-bold bg-blue-50 w-fit px-2 py-0.5 rounded">
                    <i class="fas fa-circle text-[6px] mr-1.5"></i> Aktif
                </div>
            </div>

            <!-- Total Siswa -->
            <div class="group bg-white p-7 rounded-3xl shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-4 opacity-5 group-hover:scale-125 transition-transform">
                    <i class="fas fa-user-graduate text-5xl"></i>
                </div>
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-purple-50 rounded-2xl flex items-center justify-center text-purple-600 shadow-sm border border-purple-100">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h4 class="ml-3 text-sm font-bold text-gray-400 uppercase tracking-widest">Siswa</h4>
                </div>
                <p class="text-4xl font-black text-gray-800">{{ \App\Models\Siswa::count() }}</p>
                <div class="mt-4 flex items-center text-xs text-purple-600 font-bold bg-purple-50 w-fit px-2 py-0.5 rounded">
                    <i class="fas fa-circle text-[6px] mr-1.5"></i> Terdata
                </div>
            </div>

            <!-- Total Berita -->
            <div class="group bg-white p-7 rounded-3xl shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-4 opacity-5 group-hover:scale-125 transition-transform">
                    <i class="fas fa-newspaper text-5xl"></i>
                </div>
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-yellow-50 rounded-2xl flex items-center justify-center text-yellow-600 shadow-sm border border-yellow-100">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h4 class="ml-3 text-sm font-bold text-gray-400 uppercase tracking-widest">Berita</h4>
                </div>
                <p class="text-4xl font-black text-gray-800">{{ \App\Models\Berita::count() }}</p>
                <div class="mt-4 flex items-center text-xs text-yellow-600 font-bold bg-yellow-50 w-fit px-2 py-0.5 rounded">
                    <i class="fas fa-circle text-[6px] mr-1.5"></i> Publikasi
                </div>
            </div>
        </div>

        <!-- Aksi Cepat Dashboard -->
        <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden mb-12">
            <div class="px-10 py-8 border-b border-gray-50 flex items-center justify-between bg-gray-50/40">
                <div>
                    <h4 class="text-2xl font-black text-gray-800 flex items-center leading-none">
                        <span class="w-2.5 h-8 bg-green-600 rounded-full mr-4"></span>
                        Aksi Cepat Manajemen
                    </h4>
                    <p class="text-sm text-gray-500 font-medium mt-1 ml-6.5">Kelola data madrasah dalam satu langkah.</p>
                </div>
            </div>
            
            <div class="p-10">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                    <!-- Guru Group -->
                    <div class="flex flex-col space-y-3">
                        <a href="{{ route('guru.index') }}" class="flex items-center space-x-3 p-5 bg-blue-600 text-white rounded-2xl font-bold hover:bg-blue-700 transition-all shadow-lg shadow-blue-200 group transform hover:-translate-y-1">
                            <i class="fas fa-users-viewfinder text-lg opacity-80 group-hover:opacity-100"></i>
                            <span>Lihat Daftar Guru</span>
                        </a>
                        <a href="{{ route('guru.create') }}" class="flex items-center space-x-3 p-5 bg-white border-2 border-blue-100 text-blue-700 rounded-2xl font-bold hover:border-blue-600 hover:bg-blue-50 transition-all group">
                            <i class="fas fa-plus-circle text-lg opacity-40 group-hover:opacity-100"></i>
                            <span>Tambah Guru</span>
                        </a>
                    </div>

                    <!-- Siswa Group -->
                    <div class="flex flex-col space-y-3">
                        <a href="#" class="flex items-center space-x-3 p-5 bg-purple-600 text-white rounded-2xl font-bold hover:bg-purple-700 transition-all shadow-lg shadow-purple-200 group transform hover:-translate-y-1">
                            <i class="fas fa-id-card-clip text-lg opacity-80 group-hover:opacity-100"></i>
                            <span>Lihat Daftar Siswa</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 p-5 bg-white border-2 border-purple-100 text-purple-700 rounded-2xl font-bold hover:border-purple-600 hover:bg-purple-50 transition-all group">
                            <i class="fas fa-plus-circle text-lg opacity-40 group-hover:opacity-100"></i>
                            <span>Tambah Siswa</span>
                        </a>
                    </div>

                    <!-- Berita Group -->
                    <div class="flex flex-col space-y-3">
                        <a href="{{ route('berita.index') }}" class="flex items-center space-x-3 p-5 bg-yellow-500 text-green-950 rounded-2xl font-bold hover:bg-yellow-600 transition-all shadow-lg shadow-yellow-100 group transform hover:-translate-y-1">
                            <i class="fas fa-file-invoice text-lg opacity-60 group-hover:opacity-100"></i>
                            <span>Manajemen Berita</span>
                        </a>
                        <a href="{{ route('berita.create') }}" class="flex items-center space-x-3 p-5 bg-white border-2 border-yellow-100 text-yellow-700 rounded-2xl font-bold hover:border-yellow-600 hover:bg-yellow-50 transition-all group">
                            <i class="fas fa-pen-to-square text-lg opacity-40 group-hover:opacity-100"></i>
                            <span>Tulis Berita baru</span>
                        </a>
                    </div>

                    <!-- Galeri Group -->
                    <div class="flex flex-col space-y-3">
                        <a href="{{ route('galeri.index') }}" class="flex items-center space-x-3 p-5 bg-green-600 text-white rounded-2xl font-bold hover:bg-green-700 transition-all shadow-lg shadow-green-200 group transform hover:-translate-y-1">
                            <i class="fas fa-images text-lg opacity-80 group-hover:opacity-100"></i>
                            <span>Koleksi Galeri</span>
                        </a>
                        <a href="{{ route('galeri.create') }}" class="flex items-center space-x-3 p-5 bg-white border-2 border-green-100 text-green-700 rounded-2xl font-bold hover:border-green-600 hover:bg-green-50 transition-all group">
                            <i class="fas fa-cloud-arrow-up text-lg opacity-40 group-hover:opacity-100"></i>
                            <span>Upload Media</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- System & Environment Info -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 bg-white p-10 rounded-[2rem] shadow-sm border border-gray-100">
                <div class="flex items-center justify-between mb-8 pb-4 border-b border-gray-50">
                    <h4 class="text-xl font-black text-gray-800 flex items-center leading-none">
                        <i class="fas fa-info-circle text-green-600 mr-3 text-2xl"></i> Informasi Sistem
                    </h4>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-center p-6 bg-gray-50 rounded-3xl border border-gray-100/50 group hover:bg-white hover:shadow-xl transition-all">
                        <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center text-green-600 mr-4 shadow-sm">
                            <i class="fas fa-code-branch"></i>
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Versi Portal</p>
                            <p class="text-sm font-black text-gray-700">v1.2.0-STABLE</p>
                        </div>
                    </div>
                    <div class="flex items-center p-6 bg-gray-50 rounded-3xl border border-gray-100/50 group hover:bg-white hover:shadow-xl transition-all">
                        <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center text-green-600 mr-4 shadow-sm">
                            <i class="fas fa-clock-rotate-left"></i>
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Sesi Login</p>
                            <p class="text-sm font-black text-gray-700">{{ Auth::user()->updated_at->format('d/m/Y - H:i') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Management Sidebar/Quote -->
            <div class="bg-gradient-to-br from-green-800 to-green-900 p-10 rounded-[2rem] shadow-2xl relative overflow-hidden flex flex-col justify-center text-white border border-green-700/50">
                <div class="absolute -top-10 -right-10 opacity-10">
                    <i class="fas fa-award text-[12rem]"></i>
                </div>
                <h5 class="text-2xl font-black mb-4 relative z-10 text-yellow-500">Info Madrasah</h5>
                <p class="text-green-50/80 text-base font-medium leading-relaxed relative z-10 italic">
                    "Kualitas manajemen menentukan kualitas pendidikan. Terus kembangkan MA PERGIS GANRA melalui data yang akurat dan tepat waktu."
                </p>
                <div class="mt-8 pt-8 border-t border-white/10 relative z-10">
                    <div class="flex items-center space-x-3">
                        <div class="w-1 h-12 bg-yellow-500 rounded-full"></div>
                        <p class="text-xs font-bold text-green-200 leading-tight uppercase tracking-widest">Status Keamanan<br><span class="text-white text-sm font-black">Enkripsi Aktif</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
