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
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

<!-- Header dan Navigation Gabungan -->
<header class="bg-green-800 text-white sticky top-0 z-50 shadow-md">
  <div class="container mx-auto px-4 py-4">

    <!-- Bagian Atas: Logo + Nama Sekolah + Kontak (desktop) -->
    <div class="flex justify-between items-center">
      <!-- Kiri: Logo dan Nama -->
      <div class="flex items-center space-x-4">
        <img src="{{ asset('image/logo1.png') }}" alt="Logo MA PERGIS GANRA" class="w-12 h-12 object-contain">
        <div>
          <h1 class="text-2xl font-bold text-white">MA PERGIS GANRA</h1>
          <p class="text-sm text-green-100">Madrasah Unggul, Berakhlak Mulia</p>
        </div>
      </div>

      <!-- Kanan: Kontak + Login (desktop only) -->
      <div class="hidden md:flex items-center space-x-6 text-sm text-white">
        <span><i class="fas fa-envelope mr-2"></i>mapergis.ganra@gmail.com  </span>
        <span><i class="fas fa-phone mr-2"></i>081 355 280 989</span>
        <a href="{{ route('login') }}" class="bg-white p-3 rounded-full hover:bg-green-200 transition shadow">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A7 7 0 0112 15a7 7 0 016.879 2.804M12 12a5 5 0 100-10 5 5 0 000 10z" />
          </svg>
        </a>
      </div>
    </div>

    <!-- Mobile: Menu dan Login -->
    <div class="md:hidden flex justify-between items-center mt-4">
      <!-- Tombol Menu -->
      <button id="menu-toggle">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>

      <!-- Tombol Login -->
      <a href="{{ route('login') }}" class="bg-white p-2 rounded-full hover:bg-green-200 transition shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A7 7 0 0112 15a7 7 0 016.879 2.804M12 12a5 5 0 100-10 5 5 0 000 10z" />
        </svg>
      </a>
    </div>

  </div>
</header>

<!-- Navigation -->
<nav class="bg-white text-gray-800">
  <div class="container mx-auto px-10">
    <ul class="hidden md:flex space-x-4 py-3 text-sm font-medium items-center">
      <li><a href="{{ url('/') }}" class="hover:text-green-600">Home</a></li>

      <!-- Dropdown Profil -->
      <li class="relative">
        <button onclick="toggleDropdown()" class="hover:text-green-600 text-sm font-medium">Profil</button>
        <ul id="dropdown-profil" class="absolute left-0 top-full mt-3 bg-white border border-gray-200 shadow-lg rounded-md hidden min-w-[160px] z-50">
          <li><a href="{{ url('/profil/visi-misi') }}" class="block px-4 py-2 hover:bg-green-100  whitespace-nowrap">Visi & Misi</a></li>
          <li><a href="{{ url('/profil/sejarah') }}" class="block px-4 py-2 hover:bg-green-100  whitespace-nowrap">Sejarah</a></li>
          <li><a href="{{ url('/profil/identitas') }}" class="block px-4 py-2 hover:bg-green-100">Identitas</a></li>
          <li><a href="{{ url('/profil/murid') }}" class="block px-4 py-2 hover:bg-green-100">Siswa</a></li>
          <li><a href="{{ url('/profil/guru') }}" class="block px-4 py-2 hover:bg-green-100">Guru</a></li>
        </ul>
      </li>

      <li><a href="{{ url('/layanan') }}" class="hover:text-green-600">Layanan</a></li>
      <li><a href="{{ url('/mainberita') }}" class="hover:text-green-600">Berita</a></li>
      <li><a href="{{ url('/galeri') }}" class="hover:text-green-600">Galeri</a></li>
      <li><a href="{{ url('/hubungi-kami') }}" class="hover:text-green-600">Hubungi Kami</a></li>
    </ul>

    <!-- Mobile Navigation -->
    <ul id="mobile-nav" class="md:hidden hidden flex-col py-4 space-y-2 text-sm font-medium">
      <li><a href="{{ url('/') }}" class="hover:text-green-600">Home</a></li>
      <li>
        <details class="group">
          <summary class="cursor-pointer hover:text-green-600">Profil</summary>
          <ul class="ml-4 mt-1 space-y-1">
            <li><a href="{{ url('/profil/visi-misi') }}" class="block hover:text-green-600">Visi & Misi</a></li>
            <li><a href="{{ url('/profil/murid') }}" class="block hover:text-green-600">Siswa</a></li>
            <li><a href="{{ url('/profil/guru') }}" class="block hover:text-green-600">Guru</a></li>
          </ul>
        </details>
      </li>
      <li><a href="{{ url('/layanan') }}" class="hover:text-green-600">Layanan</a></li>
      <li><a href="{{ url('/galeri') }}" class="hover:text-green-600">Galeri</a></li>
      <li><a href="{{ url('/hubungi-kami') }}" class="hover:text-green-600">Hubungi Kami</a></li>
    </ul>
  </div>
</nav>
</header>



  <!-- Hero -->
  <div class="relative">
    <img src="/image/backround.jpg" alt="Hero Banner" class="w-full h-96 object-cover"/>
    <div class="absolute inset-0 bg-green-900 bg-opacity-60 flex items-center">
      <div class="container mx-auto px-6 text-white">
        <h2 class="text-3xl md:text-4xl font-bold mb-2">INFORMASI SEKOLAH</h2>
        <p class="text-lg mb-4">MA Perguruan Islam Ganra</p>
        <a href="#" class="bg-white text-green-800 px-4 py-2 rounded shadow hover:bg-green-100 transition">Learn More</a>
      </div>
    </div>
  </div>

  <!-- Quote -->
  <section class="bg-yellow-500 text-white text-center py-3 px-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-500 ease-in-out">
  <p class="text-lg font-semibold italic opacity-90 hover:opacity-100 transition-opacity duration-300">
    "Hiduplah seakan-akan kau akan mati besok. Belajarlah seakan-akan kau akan hidup selamanya." - Anonim
  </p>
</section>

  <!-- Main Content -->
  <main class="container mx-auto px-4 py-10 space-y-12">
    <section class="px-4 py-10 bg-gray-50 rounded-lg shadow">
      <h2 class="text-3xl font-bold text-center mb-10">KEGIATAN SEKOLAH</h2>

      <!-- Kegiatan 1 -->
      <div class="grid md:grid-cols-2 gap-6 items-center mb-12" data-aos="fade-up">
        <img src="/image/pramuka.jpg" alt="Kegiatan Pramuka" class="rounded-lg shadow  w-full max-h-64 object-cover">
        <div>
          <h3 class="text-xl font-bold mb-2">KEGIATAN PRAMUKA</h3>
          <p class="text-gray-700">
            Kegiatan Pramuka di MA Pergis Ganra melatih siswa untuk menjadi disiplin, mandiri, serta cinta lingkungan.
            Dengan kegiatan rutin dan perkemahan, siswa juga belajar kepemimpinan dan kerja sama tim.
          </p>
        </div>
      </div>

      <!-- Kegiatan 2 -->
      <div class="grid md:grid-cols-2 gap-6 items-center mb-12" data-aos="zoom-in">
        <div class="md:order-2">
          <img src="/image/apel.jpg" alt="Kegiatan Kartini" class="rounded-lg shadow h-64 w-full object-cover">
        </div>
        <div class="md:order-1">
          <h3 class="text-xl font-bold mb-2">APEL</h3>
          <p class="text-gray-700">
            “Kartini adalah kita—yang terus belajar, berdaya, dan berkarya.” Hari Kartini bukan cuma soal mengenang,
            tapi meneruskan mimpi, semangat, dan keberanian jadi diri sendiri.
          </p>
        </div>
      </div>

      <!-- Kegiatan 3 -->
      <div class="grid md:grid-cols-2 gap-6 items-center mb-12" data-aos="fade-up">
        <img src="/image/pmr.jpg" alt="Kegiatan Pramuka" class="rounded-lg shadow h-64 w-full object-cover">
        <div>
          <h3 class="text-xl font-bold mb-2">KEGIATAN PRAMUKA</h3>
          <p class="text-gray-700">
            Kegiatan Pramuka di MA Pergis Ganra melatih siswa untuk menjadi disiplin, mandiri, serta cinta lingkungan.
            Dengan kegiatan rutin dan perkemahan, siswa juga belajar kepemimpinan dan kerja sama tim.
          </p>
        </div>
      </div>

      <!-- Kegiatan 4 -->
      <div class="grid md:grid-cols-2 gap-6 items-center mb-12" data-aos="zoom-in">
        <div class="md:order-2">
          <img src="/image/pengajian.jpg" alt="Kegiatan Kartini" class="rounded-lg shadow h-64 w-full object-cover">
        </div>
        <div class="md:order-1">
          <h3 class="text-xl font-bold mb-2">PENGAJIAN</h3>
          <p class="text-gray-700">
            “Kartini adalah kita—yang terus belajar, berdaya, dan berkarya.” Hari Kartini bukan cuma soal mengenang,
            tapi meneruskan mimpi, semangat, dan keberanian jadi diri sendiri.
          </p>
        </div>
      </div>

      <section class="bg-white py-10 rounded-lg shadow" data-aos="fade-up">
  <h2 class="text-3xl font-bold text-center mb-10">BERITA TERBARU</h2>

  <div class="grid md:grid-cols-3 gap-8">
    @foreach ($berita as $item)
      <div class="bg-gray-100 rounded-lg overflow-hidden shadow">
        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="font-bold text-lg mb-2">{{ $item->judul }}</h3>
          <p class="text-sm text-gray-600 mb-2">{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</p>
          <p class="text-gray-700 mb-4">{{ Str::limit($item->isi, 100) }}</p>
          <a href="{{ route('mainberita', $item->id) }}" class="text-green-700 hover:underline font-medium">Baca Selengkapnya</a>
        </div>
      </div>
    @endforeach
  </div>
</section>
      
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
        <a href="https://instagram.com" target="_blank">
          <i class="fab fa-instagram text-xl hover:text-pink-500"></i>
        </a>
        <a href="https://youtube.com" target="_blank">
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
          <li><a href="{{ url('/galeri') }}" class="hover:underline">Galeri</a></li>
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

    const toggle = document.getElementById('menu-toggle');
    const nav = document.getElementById('mobile-nav');
    toggle.addEventListener('click', () => {
      nav.classList.toggle('hidden');
    });

    function toggleDropdown() {
      const dropdown = document.getElementById('dropdown-profil');
      dropdown.classList.toggle('hidden');
    }

    document.addEventListener('click', function (e) {
      const btn = e.target.closest('button');
      const dropdown = document.getElementById('dropdown-profil');
      if (!e.target.closest('li') || (btn && !btn.onclick)) {
        if (!e.target.closest('#dropdown-profil')) {
          dropdown?.classList?.add('hidden');
        }
      }
    });

    function toggleDropdown() {
    const dropdown = document.getElementById('dropdown-profil');
    dropdown.classList.toggle('hidden');
  }

  // Optional: klik di luar dropdown untuk menutup
  window.addEventListener('click', function(e) {
    const dropdown = document.getElementById('dropdown-profil');
    const button = document.querySelector('button[onclick="toggleDropdown()"]');
    if (!button.contains(e.target) && !dropdown.contains(e.target)) {
      dropdown.classList.add('hidden');
    }
  });
  </script>
</body>
</html>
