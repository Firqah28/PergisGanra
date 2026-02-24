<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MA PERGIS GANRA</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"/>
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="icon" href="{{ asset('image/logo1.png') }}" type="image/png">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

<!-- Main Header (Logo & Branding) -->
<header class="bg-green-800 text-white shadow-md border-b border-green-700 sticky top-0 z-40 md:static md:z-auto">
  <div class="container mx-auto px-4 py-3 md:py-5 flex justify-between items-center">
    <!-- Logo & Nama Sekolah -->
    <a href="{{ url('/') }}" class="flex items-center space-x-3 md:space-x-4 hover:opacity-90 transition">
      <img src="{{ asset('image/logo1.png') }}" alt="Logo MA PERGIS GANRA" class="w-10 h-10 md:w-14 md:h-14 object-contain">
      <div>
        <h1 class="text-lg md:text-2xl font-bold tracking-tight leading-tight">MA PERGIS GANRA</h1>
        <p class="text-xs text-green-100 font-medium tracking-wide hidden md:block">MADRASAH ALIYAH PERGURUAN ISLAM GANRA</p>
      </div>
    </a>

    <!-- Mobile Menu Button -->
    <button id="menu-toggle" class="md:hidden text-white focus:outline-none p-2 rounded hover:bg-green-700">
      <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Desktop Action Button (Dynamic Login/Logout) -->
    <div class="hidden md:block">
      @auth
        <form action="{{ route('logout') }}" method="POST" class="inline">
          @csrf
          <button type="submit" class="bg-red-600 hover:bg-red-500 text-white px-6 py-2.5 rounded-full font-bold text-sm shadow hover:shadow-md transition transform hover:-translate-y-0.5 flex items-center">
            <i class="fas fa-sign-out-alt mr-2 text-lg"></i> Keluar Portal
          </button>
        </form>
      @else
        <a href="{{ route('login') }}" class="bg-yellow-500 hover:bg-yellow-400 text-green-900 px-6 py-2.5 rounded-full font-bold text-sm shadow hover:shadow-md transition transform hover:-translate-y-0.5 flex items-center">
          <i class="fas fa-user-circle mr-2 text-lg"></i> Login Portal
        </a>
      @endauth
    </div>
  </div>
</header>

<!-- Navigation Bar (Sticky on Desktop) -->
<nav class="bg-green-800 text-white shadow-lg sticky top-0 z-50 hidden md:block border-t border-green-700">
  <div class="container mx-auto px-4">
    <ul class="flex justify-center space-x-1 lg:space-x-2 text-sm font-semibold tracking-wide">
      <li><a href="{{ url('/') }}" class="block px-4 py-4 hover:bg-green-700 transition border-b-4 border-transparent hover:border-yellow-400 {{ request()->is('/') ? 'bg-green-700 border-yellow-400' : '' }}">BERANDA</a></li>
      
      <!-- Dropdown Profil -->
      <li class="relative">
        <button onclick="toggleDropdown()" class="flex items-center px-4 py-4 hover:bg-green-700 transition border-b-4 border-transparent hover:border-yellow-400 focus:outline-none">
          PROFIL <i class="fas fa-chevron-down ml-1.5 text-xs text-green-200"></i>
        </button>
        <div id="dropdown-profil" class="absolute left-0 top-full w-56 bg-white text-gray-800 shadow-xl rounded-b-lg overflow-hidden hidden border-t-2 border-yellow-500 transform origin-top transition-transform duration-200 z-50">
          <a href="{{ url('/profil/visi-misi') }}" class="block px-5 py-3 hover:bg-green-50 hover:text-green-700 border-b border-gray-50 transition">Visi & Misi</a>
          <a href="{{ url('/profil/sejarah') }}" class="block px-5 py-3 hover:bg-green-50 hover:text-green-700 border-b border-gray-50 transition">Sejarah Singkat</a>
          <a href="{{ url('/profil/identitas') }}" class="block px-5 py-3 hover:bg-green-50 hover:text-green-700 border-b border-gray-50 transition">Identitas Madrasah</a>
          <a href="{{ url('/profil/murid') }}" class="block px-5 py-3 hover:bg-green-50 hover:text-green-700 border-b border-gray-50 transition">Data Siswa</a>
          <a href="{{ url('/profil/guru') }}" class="block px-5 py-3 hover:bg-green-50 hover:text-green-700 transition">Dewan Guru</a>
        </div>
      </li>

      <li><a href="{{ url('/layanan') }}" class="block px-4 py-4 hover:bg-green-700 transition border-b-4 border-transparent hover:border-yellow-400">LAYANAN</a></li>
      <li><a href="{{ url('/mainberita') }}" class="block px-4 py-4 hover:bg-green-700 transition border-b-4 border-transparent hover:border-yellow-400">BERITA</a></li>
      <li><a href="{{ url('/maingaleri') }}" class="block px-4 py-4 hover:bg-green-700 transition border-b-4 border-transparent hover:border-yellow-400">GALERI KEGIATAN</a></li>
      <li><a href="{{ url('/hubungi-kami') }}" class="block px-4 py-4 hover:bg-green-700 transition border-b-4 border-transparent hover:border-yellow-400">HUBUNGI KAMI</a></li>
    </ul>
  </div>
</nav>

<!-- Mobile Navigation (Hidden by default) -->
<nav id="mobile-nav" class="fixed inset-0 z-50 bg-green-900 bg-opacity-95 filter backdrop-blur-md text-white transform translate-x-full transition-transform duration-500 md:hidden flex flex-col pt-24 px-6 overflow-y-auto">
  <!-- Close Button -->
  <button id="close-menu" class="absolute top-6 right-6 w-12 h-12 flex items-center justify-center rounded-full bg-white bg-opacity-10 text-white hover:bg-yellow-500 hover:text-green-900 transition-all border border-white border-opacity-10">
    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
  </button>
  
  <!-- Mobile Logo Header -->
  <div class="flex items-center space-x-4 mb-10 pb-8 border-b border-white border-opacity-5">
    <img src="{{ asset('image/logo1.png') }}" alt="Logo" class="w-16 h-16 object-contain">
    <div>
      <h3 class="font-black text-xl leading-tight">MA PERGIS<br><span class="text-yellow-400">GANRA</span></h3>
    </div>
  </div>
  
  <div class="flex flex-col space-y-1">
    <a href="{{ url('/') }}" class="group flex items-center justify-between py-3.5 text-lg font-bold border-b border-white border-opacity-5 hover:text-yellow-400 transition-colors">
      <span>BERANDA</span>
      <i class="fas fa-home text-xs opacity-30 group-hover:opacity-100 transition-opacity"></i>
    </a>
    
    <!-- Profil Submenu Container -->
    <div class="w-full">
      <button onclick="document.getElementById('mobile-submenu').classList.toggle('hidden'); this.querySelector('.fa-chevron-right').classList.toggle('rotate-90')" 
              class="group flex items-center justify-between py-3.5 text-lg font-bold border-b border-white border-opacity-5 hover:text-yellow-400 transition-colors w-full focus:outline-none">
        <span>PROFIL MADRASAH</span>
        <i class="fas fa-chevron-right text-xs opacity-30 group-hover:opacity-100 transition-all"></i>
      </button>
      <div id="mobile-submenu" class="hidden flex flex-col space-y-0.5 bg-green-950/50 rounded-xl mt-2 overflow-hidden border border-white border-opacity-5">
        <a href="{{ url('/profil/visi-misi') }}" class="px-6 py-3 text-base font-medium text-green-100 hover:bg-green-800 transition-colors border-b border-white border-opacity-5">Visi & Misi</a>
        <a href="{{ url('/profil/sejarah') }}" class="px-6 py-3 text-base font-medium text-green-100 hover:bg-green-800 transition-colors border-b border-white border-opacity-5">Sejarah Singkat</a>
        <a href="{{ url('/profil/identitas') }}" class="px-6 py-3 text-base font-medium text-green-100 hover:bg-green-800 transition-colors border-b border-white border-opacity-5">Identitas & Struktur</a>
        <a href="{{ url('/profil/murid') }}" class="px-6 py-3 text-base font-medium text-green-100 hover:bg-green-800 transition-colors border-b border-white border-opacity-5">Informasi Siswa</a>
        <a href="{{ url('/profil/guru') }}" class="px-6 py-3 text-base font-medium text-green-100 hover:bg-green-800 transition-colors">Tenaga Pendidik</a>
      </div>
    </div>

    <a href="{{ url('/layanan') }}" class="group flex items-center justify-between py-3.5 text-lg font-bold border-b border-white border-opacity-5 hover:text-yellow-400 transition-colors">
      <span>LAYANAN</span>
      <i class="fas fa-hands-holding-child text-xs opacity-30 group-hover:opacity-100 transition-opacity"></i>
    </a>
    <a href="{{ url('/mainberita') }}" class="group flex items-center justify-between py-3.5 text-lg font-bold border-b border-white border-opacity-5 hover:text-yellow-400 transition-colors">
      <span>BERITA TERBARU</span>
      <i class="fas fa-newspaper text-xs opacity-30 group-hover:opacity-100 transition-opacity"></i>
    </a>
    <a href="{{ url('/maingaleri') }}" class="group flex items-center justify-between py-3.5 text-lg font-bold border-b border-white border-opacity-5 hover:text-yellow-400 transition-colors">
      <span>GALERI KEGIATAN</span>
      <i class="fas fa-images text-xs opacity-30 group-hover:opacity-100 transition-opacity"></i>
    </a>
    <a href="{{ url('/hubungi-kami') }}" class="group flex items-center justify-between py-3.5 text-lg font-bold border-b border-white border-opacity-5 hover:text-yellow-400 transition-colors">
      <span>HUBUNGI KAMI</span>
      <i class="fas fa-headset text-xs opacity-30 group-hover:opacity-100 transition-opacity"></i>
    </a>
  </div>

  <!-- Mobile Action (Auth) -->
  <div class="mt-8 mb-20">
    @auth
      <div class="bg-white bg-opacity-5 p-5 rounded-2xl border border-white border-opacity-10 mb-4">
        <p class="text-[9px] text-green-400 uppercase font-black tracking-widest mb-1">Status Login</p>
        <p class="text-base font-bold truncate">{{ Auth::user()->name }}</p>
      </div>
      <form action="{{ route('logout') }}" method="POST" class="block">
        @csrf
        <button type="submit" class="w-full bg-red-600 text-white px-8 py-4 rounded-2xl font-black text-base shadow-xl hover:bg-red-500 transition-all flex items-center justify-center space-x-3">
          <i class="fas fa-sign-out-alt"></i>
          <span>KELUAR PORTAL</span>
        </button>
      </form>
    @else
      <a href="{{ route('login') }}" class="w-full bg-yellow-500 text-green-950 px-8 py-4 rounded-2xl font-black text-base shadow-xl hover:bg-yellow-400 transition-all flex items-center justify-center space-x-3">
        <i class="fas fa-user-circle"></i>
        <span>LOGIN PORTAL</span>
      </a>
    @endauth
  </div>
</nav>
<!-- Hero -->
<div class="relative w-full">
  <img src="/image/backround.jpg" alt="Hero Banner" 
       class="w-full h-96 md:h-[500px] object-cover object-center"/>

  <!-- Overlay -->
  <div class="absolute inset-0 bg-green-900 bg-opacity-60 flex items-center">
    <div class="container mx-auto px-6 md:px-12 text-left text-white">
      <h2 class="text-3xl md:text-4xl font-bold mb-3">INFORMASI SEKOLAH</h2>
      <p class="text-lg mb-6">MA Perguruan Islam Ganra</p>
      <a href="{{ url('/profil/identitas') }}" 
         class="bg-white text-green-800 px-5 py-2 rounded shadow hover:bg-green-100 transition">
        Learn More
      </a>
    </div>
  </div>
</div>


  <!-- Quote -->

</section>

<!-- Main Content -->
<main class="container mx-auto px-4 py-16 space-y-20">

<!-- KEGIATAN SEKOLAH -->
<section class="py-12 md:py-24 bg-white overflow-hidden">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12 md:mb-20" data-aos="fade-up">
      <div class="inline-block px-4 py-1.5 bg-green-100 text-green-800 text-[10px] md:text-xs font-bold rounded-full uppercase tracking-widest mb-4">
        Info Aktivitas
      </div>
      <h2 class="text-2xl md:text-5xl font-extrabold text-green-900 mb-4 tracking-tight">
        Kegiatan Sekolah
      </h2>
      <div class="w-16 md:w-24 h-1.5 bg-yellow-500 mx-auto rounded-full"></div>
      <p class="mt-6 text-gray-600 text-base md:text-lg max-w-2xl mx-auto font-medium px-4">
        Dokumentasi aktivitas rutin dan spesial di lingkungan MA Pergis Ganra untuk mewujudkan generasi yang unggul.
      </p>
    </div>

    <div class="space-y-16 md:space-y-32">
      @forelse ($galeris as $galeri)
        <div class="group grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
          
          <!-- Image Column -->
          <div class="lg:col-span-7 {{ $loop->iteration % 2 == 0 ? 'lg:order-2' : '' }}" data-aos="{{ $loop->iteration % 2 == 0 ? 'fade-left' : 'fade-right' }}">
            <div class="relative">
              <!-- Decorative background element -->
              <div class="absolute -inset-4 bg-green-50 rounded-3xl -z-10 transform {{ $loop->iteration % 2 == 0 ? 'rotate-2' : '-rotate-2' }} transition-transform group-hover:rotate-0 duration-500"></div>
              
              <div class="overflow-hidden rounded-2xl shadow-2xl relative">
                <img src="{{ asset('storage/' . $galeri->gambar) }}" 
                     alt="{{ $galeri->judul }}" 
                     class="w-full h-80 md:h-[450px] object-cover transform transition duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-green-900/40 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
              </div>
            </div>
          </div>

          <!-- Content Column -->
          <div class="lg:col-span-5 {{ $loop->iteration % 2 == 0 ? 'lg:order-1 lg:text-right' : '' }}" data-aos="{{ $loop->iteration % 2 == 0 ? 'fade-right' : 'fade-left' }}">
            <div class="space-y-6">
              <div class="flex items-center space-x-2 text-yellow-600 {{ $loop->iteration % 2 == 0 ? 'lg:justify-end' : '' }}">
                <i class="fas fa-star text-sm"></i>
                <span class="text-sm font-bold uppercase tracking-widest">Unggulan</span>
              </div>
              <h3 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                {{ $galeri->judul }}
              </h3>
              @if($galeri->deskripsi)
                <p class="text-gray-600 text-lg leading-relaxed lg:pl-4 {{ $loop->iteration % 2 == 0 ? 'lg:pl-0 lg:pr-4' : '' }}">
                  {{ $galeri->deskripsi }}
                </p>
              @endif
              <div class="pt-4 flex {{ $loop->iteration % 2 == 0 ? 'lg:justify-end' : '' }}">
                <a href="{{ url('/maingaleri') }}" class="inline-flex items-center px-6 py-3 bg-green-800 text-white rounded-xl font-bold hover:bg-green-700 transition-all shadow-lg hover:shadow-green-900/20 group/link">
                  Detail Kegiatan
                  <i class="fas fa-arrow-right ml-2 transition-transform group-hover/link:translate-x-1"></i>
                </a>
              </div>
            </div>
          </div>

        </div>
      @empty
        <div class="text-center py-20 bg-gray-50 rounded-3xl border-2 border-dashed border-gray-200" data-aos="fade-up">
           <i class="fas fa-images text-5xl text-gray-300 mb-4 block"></i>
           <p class="text-gray-500 text-xl font-medium">Belum ada kegiatan yang ditampilkan saat ini.</p>
        </div>
      @endforelse
    </div>

    <!-- View All Button -->
    @if(count($galeris) > 0)
      <div class="mt-32 text-center" data-aos="fade-up">
        <a href="{{ url('/maingaleri') }}" 
           class="inline-flex items-center justify-center px-12 py-5 bg-yellow-500 text-green-900 font-extrabold rounded-full shadow-xl hover:bg-yellow-400 hover:shadow-2xl transition-all transform hover:-translate-y-1">
          <i class="fas fa-th-large mr-3"></i> LIHAT SEMUA KEGIATAN
        </a>
      </div>
    @endif
  </div>
</section>


  <!-- BERITA TERBARU -->
  <section>
    <h2 class="text-4xl font-extrabold text-center text-black mb-14 tracking-wide" data-aos="zoom-in">
      BERITA TERBARU
    </h2>

    <div class="bg-gradient-to-brrelative bg-gradient-to-b from-green-50 to-gray-200 grid md:grid-cols-3 gap-10">
      @foreach ($berita as $item)
        <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition duration-500" data-aos="fade-up">
          <img src="{{ asset('storage/' . $item->gambar) }}" 
               alt="{{ $item->judul }}" 
               class="w-full h-52 object-cover">
          <div class="p-6">
            <h3 class="font-bold text-xl mb-2 text-gray-900">{{ $item->judul }}</h3>
            <p class="text-sm text-gray-500 mb-2">
              {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
            </p>
            <p class="text-gray-700 mb-4">{{ Str::limit($item->isi, 120) }}</p>
            <a href="{{ route('mainberita', $item->id) }}" 
               class="inline-block text-green-700 hover:text-green-900 font-semibold transition">
              Baca Selengkapnya →
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </section>
</main>

<!-- Sidebar -->
<aside class="bg-white p-6 rounded-2xl shadow-md space-y-4">
  <h4 class="text-xl font-semibold text-gray-800">Kategori</h4>
  <ul class="space-y-2 text-gray-700 text-sm">
    <li>
      <a href="#" class="hover:underline hover:text-green-700 transition-colors">Berita</a>
    </li>
    <li>
      <a href="#" class="hover:underline hover:text-green-700 transition-colors">Pengumuman</a>
    </li>
    <li>
      <a href="#" class="hover:underline hover:text-green-700 transition-colors">Event</a>
    </li>
    <li>
      <a href="#" class="hover:underline hover:text-green-700 transition-colors">Kegiatan</a>
    </li>
  </ul>
</aside>


  <footer class="bg-green-800 text-white py-10">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">


    <div class="flex items-center space-x-4">
    <!-- Logo -->
    <img src="{{ asset('image/logo1.png') }}" alt="Logo MA PERGIS GANRA" class="w-28 h-28 object-contain">

    <!-- Teks & Sosial Media -->
    <div>
      <h1 class="text-2xl font-bold">MA PERGIS GANRA</h1>
      <p class="text-sm text-green-100">Madrasah Unggul, Berakhlak Mulia</p>

      <!-- Ikon Media Sosial -->
      <div class="flex space-x-4 mt-2">
        <a href="https://www.instagram.com/ganramapergis/" target="_blank">
          <i class="fab fa-instagram text-xl hover:text-pink-500"></i>
        </a>
        <a href="https://www.youtube.com/@pondokpesantrenperguruanis2669" target="_blank">
          <i class="fab fa-youtube text-xl hover:text-red-600"></i>
        </a>
        <a href="mailto:pergisganra@gmail.com">
          <i class="fas fa-envelope text-xl hover:text-green-300"></i>
        </a>
      </div>
    </div>
  </div>

      
      <!-- Bagian Kiri: Deskripsi -->

      <!-- Bagian Tengah: Navigasi -->
      <div>
        <h2 class="text-lg font-semibold mb-3 ml-8">Navigasi</h2>
        <ul class="space-y-2 text-sm ml-8">
          <li><a href="{{ url('/') }}" class="hover:underline">Home</a></li>
          <li><a href="{{ url('/profil/visi-misi') }}" class="hover:underline">Profil</a></li>
          <li><a href="{{ url('/maingaleri') }}" class="hover:underline">Galeri</a></li>
          <li><a href="{{ url('/layanan') }}" class="hover:underline">Layanan</a></li>
          <li><a href="{{ url('/hubungi-kami') }}" class="hover:underline">Hubungi Kami</a></li>
        </ul>
      </div>

      <!-- Bagian Kanan: Kontak -->
      <div>
        <h2 class="text-lg font-semibold mb-3">Kontak Kami</h2>
        <ul class="text-sm space-y-2">
          <li><i class="fas fa-envelope mr-2"></i>pergisganra@gmail.com</li>
          <li><i class="fas fa-phone mr-2"></i>0825-2525-2525</li>
          <li><i class="fas fa-map-marker-alt mr-2"></i>Ganra, Soppeng, Sulawesi Selatan</li>
        </ul>
      </div>
    </div>

    <div class="border-t border-green-700 mt-10 pt-4 text-center text-sm text-green-100">
      © 2025 MA Pergis Ganra. All rights reserved.
    </div>
  </footer>



  <!-- Script -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init();

    const menuBtn = document.getElementById('menu-toggle');
    const closeBtn = document.getElementById('close-menu');
    const mobileNav = document.getElementById('mobile-nav');

    function toggleMenu() {
      mobileNav.classList.toggle('translate-x-full');
      document.body.classList.toggle('overflow-hidden');
    }

    if(menuBtn) menuBtn.addEventListener('click', toggleMenu);
    if(closeBtn) closeBtn.addEventListener('click', toggleMenu);

    // Desktop Dropdown Logic
    function toggleDropdown() {
      const dropdown = document.getElementById('dropdown-profil');
      dropdown.classList.toggle('hidden');
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
      const dropdown = document.getElementById('dropdown-profil');
      const toggleBtn = document.querySelector('button[onclick="toggleDropdown()"]');
      
      // Check if dropdown is open
      if (dropdown && !dropdown.classList.contains('hidden')) {
        // If click is outside dropdown AND outside the toggle button
        if (!dropdown.contains(e.target) && (!toggleBtn || !toggleBtn.contains(e.target))) {
          dropdown.classList.add('hidden');
        }
      }
    });
  </script>
</body>
</html>
