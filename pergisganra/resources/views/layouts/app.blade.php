<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'MA PERGIS GANRA')</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"/>
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="icon" href="{{ asset('image/logo1.png') }}" type="image/png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased selection:bg-yellow-200 selection:text-green-900 flex flex-col min-h-screen">

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

<!-- Main Content -->
<main class="flex-grow">
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-green-900 text-white pt-16 pb-8 mt-auto border-t-4 border-yellow-500">
  <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">

    <!-- Kolom 1: Identitas -->
    <div class="space-y-6">
      <div class="flex items-center space-x-4">
        <img src="{{ asset('image/logo1.png') }}" alt="Logo MA PERGIS GANRA" class="w-20 h-20 object-contain drop-shadow-md brightness-110">
        <div>
          <h1 class="text-xl font-bold tracking-wider text-white">MA PERGIS GANRA</h1>
          <p class="text-sm text-green-200">Mewujudkan Generasi Islami Berprestasi</p>
        </div>
      </div>
      <p class="text-green-100/80 text-sm leading-relaxed pr-4">
        Kami berkomitmen untuk memberikan pendidikan berkualitas dengan memadukan ilmu pengetahuan umum dan nilai-nilai keislaman yang kuat.
      </p>
      <div class="flex space-x-3 pt-2">
        <a href="https://www.instagram.com/ganramapergis/" target="_blank" class="w-10 h-10 rounded-full bg-green-800 flex items-center justify-center hover:bg-pink-600 transition shadow-lg">
          <i class="fab fa-instagram text-lg"></i>
        </a>
        <a href="https://www.youtube.com/@pondokpesantrenperguruanis2669" target="_blank" class="w-10 h-10 rounded-full bg-green-800 flex items-center justify-center hover:bg-red-600 transition shadow-lg">
          <i class="fab fa-youtube text-lg"></i>
        </a>
        <a href="mailto:pergisganra@gmail.com" class="w-10 h-10 rounded-full bg-green-800 flex items-center justify-center hover:bg-yellow-500 hover:text-green-900 transition shadow-lg">
          <i class="fas fa-envelope text-lg"></i>
        </a>
      </div>
    </div>
    
    <!-- Kolom 2: Navigasi -->
    <div class="md:pl-10">
      <h2 class="text-lg font-bold mb-6 text-white border-b border-green-700 pb-2 inline-block">Navigasi Utama</h2>
      <ul class="space-y-3 text-sm text-green-100">
        <li><a href="{{ url('/') }}" class="hover:text-yellow-400 hover:translate-x-1 transition flex items-center"><i class="fas fa-caret-right mr-2 text-yellow-500"></i> Home</a></li>
        <li><a href="{{ url('/profil/visi-misi') }}" class="hover:text-yellow-400 hover:translate-x-1 transition flex items-center"><i class="fas fa-caret-right mr-2 text-yellow-500"></i> Profil</a></li>
        <li><a href="{{ url('/maingaleri') }}" class="hover:text-yellow-400 hover:translate-x-1 transition flex items-center"><i class="fas fa-caret-right mr-2 text-yellow-500"></i> Galeri</a></li>
        <li><a href="{{ url('/layanan') }}" class="hover:text-yellow-400 hover:translate-x-1 transition flex items-center"><i class="fas fa-caret-right mr-2 text-yellow-500"></i> Layanan</a></li>
        <li><a href="{{ url('/hubungi-kami') }}" class="hover:text-yellow-400 hover:translate-x-1 transition flex items-center"><i class="fas fa-caret-right mr-2 text-yellow-500"></i> Hubungi Kami</a></li>
      </ul>
    </div>

    <!-- Kolom 3: Kontak -->
    <div>
      <h2 class="text-lg font-bold mb-6 text-white border-b border-green-700 pb-2 inline-block">Kontak Kami</h2>
      <ul class="text-sm space-y-4 text-green-100">
        <li class="flex items-start group">
          <div class="mt-1 mr-3 w-8 h-8 rounded-full bg-green-800 flex items-center justify-center flex-shrink-0 group-hover:bg-yellow-500 group-hover:text-green-900 transition">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <span>Ganra, Soppeng, Sulawesi Selatan<br>Indonesia</span>
        </li>
        <li class="flex items-center group">
          <div class="mr-3 w-8 h-8 rounded-full bg-green-800 flex items-center justify-center flex-shrink-0 group-hover:bg-yellow-500 group-hover:text-green-900 transition">
            <i class="fas fa-envelope"></i>
          </div>
          <span>pergisganra@gmail.com</span>
        </li>
        <li class="flex items-center group">
           <div class="mr-3 w-8 h-8 rounded-full bg-green-800 flex items-center justify-center flex-shrink-0 group-hover:bg-yellow-500 group-hover:text-green-900 transition">
            <i class="fas fa-phone"></i>
          </div>
          <span>0825-2525-2525</span>
        </li>
      </ul>
    </div>
  </div>

  <div class="border-t border-green-800 pt-8 mt-4 text-center">
    <p class="text-green-300 text-sm">
      &copy; 2025 <span class="text-white font-semibold">MA Pergis Ganra</span>. All rights reserved.
    </p>
  </div>
</footer>

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
