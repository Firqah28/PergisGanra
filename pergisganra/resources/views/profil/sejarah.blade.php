@extends('layouts.app')

@section('title', 'Sejarah MA Pergis Ganra')

@section('content')
<!-- Hero Banner Ringkas -->
<main class="bg-gray-50 min-h-screen pb-24">
    <!-- Hero Section -->
    <div class="relative bg-green-800 py-12 md:py-24 overflow-hidden">
        <!-- Decoration -->
        <div class="absolute inset-0 opacity-10 drop-shadow-sm">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-yellow-500 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-up">
            <h1 class="text-3xl md:text-6xl font-extrabold text-white mb-6 tracking-tight px-4">
                Sejarah <span class="text-yellow-400">Madrasah</span>
            </h1>
            <p class="text-green-100 text-base md:text-xl max-w-3xl mx-auto leading-relaxed font-medium px-4">
                Jejak langkah perjuangan dan dedikasi MA Pergis Ganra dalam membangun peradaban melalui pendidikan Islam yang berkualitas.
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 -mt-12 relative z-20">
        <div class="max-w-4xl mx-auto">
            <!-- Intro Card -->
            <div class="bg-white rounded-3xl shadow-xl p-6 md:p-12 mb-12 border-b-8 border-green-800" data-aos="fade-up">
                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="w-full md:w-1/3">
                        <div class="relative">
                            <img src="/image/background3.jpg" alt="Sejarah" class="rounded-2xl shadow-lg w-full h-56 md:h-64 object-cover">
                            <div class="absolute -bottom-3 -right-3 md:-bottom-4 md:-right-4 bg-yellow-500 text-green-900 font-black px-4 py-2 md:px-6 md:py-3 rounded-xl shadow-lg text-sm md:text-base">
                                EST. 2005
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-2/3 space-y-4">
                        <h3 class="text-xl md:text-2xl font-bold text-green-800 text-center md:text-left">Awal Perjuangan</h3>
                        <p class="text-gray-700 text-base md:text-lg leading-relaxed text-center md:text-left">
                            Madrasah Aliyah (MA) Pergis Ganra berdiri sebagai wujud nyata dari komitmen kuat masyarakat dan tokoh agama dalam menyediakan wadah pendidikan menengah yang tidak hanya unggul secara akademis, tetapi juga kokoh dalam penanaman nilai-nilai karakter Islami.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Timeline/Story Highlights -->
            <div class="space-y-8">
                <div class="text-center mb-10" data-aos="fade-up">
                    <h2 class="text-3xl font-extrabold text-green-900 tracking-tight">Perjalanan Sejarah Kami</h2>
                    <div class="w-20 h-1.5 bg-yellow-500 mx-auto mt-2 rounded-full"></div>
                </div>

                <!-- 2005 Milestone -->
                <div class="flex flex-col sm:flex-row gap-4 md:gap-6 items-center sm:items-start group" data-aos="fade-left">
                    <div class="flex-shrink-0 w-14 h-14 md:w-16 md:h-16 bg-white shadow-lg rounded-2xl flex items-center justify-center border-t-4 border-yellow-500 transform group-hover:scale-110 transition-transform">
                        <span class="text-green-800 font-black text-lg md:text-xl">2005</span>
                    </div>
                    <div class="bg-white rounded-2xl shadow-md p-5 md:p-6 flex-grow border-l-4 border-green-800 text-center sm:text-left">
                        <h4 class="text-lg md:text-xl font-extrabold text-gray-900 mb-2">Resmi Beroperasi</h4>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            MA Pergis Ganra mulai membuka pintu bagi putra-putri terbaik daerah, menjadi langkah awal dalam menyediakan pendidikan menengah bagi lulusan Madrasah Tsanawiyah dan SMP di Ganra.
                        </p>
                    </div>
                </div>

                <!-- Transformation Milestone -->
                <div class="flex flex-col sm:flex-row gap-4 md:gap-6 items-center sm:items-start group" data-aos="fade-left" data-aos-delay="100">
                    <div class="flex-shrink-0 w-14 h-14 md:w-16 md:h-16 bg-white shadow-lg rounded-2xl flex items-center justify-center border-t-4 border-yellow-500 transform group-hover:scale-110 transition-transform">
                        <i class="fas fa-chart-line text-green-800 text-xl md:text-2xl"></i>
                    </div>
                    <div class="bg-white rounded-2xl shadow-md p-5 md:p-6 flex-grow border-l-4 border-green-800 text-center sm:text-left">
                        <h4 class="text-lg md:text-xl font-extrabold text-gray-900 mb-2">Pertumbuhan & Kepercayaan</h4>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            Berkat dukungan penuh dari masyarakat and kerja keras tenaga pendidik yang berdedikasi, Madrasah ini terus berkembang, meningkatkan fasilitas, and meraih berbagai prestasi di tingkat daerah.
                        </p>
                    </div>
                </div>

                <!-- Modern Era Milestone -->
                <div class="flex flex-col sm:flex-row gap-4 md:gap-6 items-center sm:items-start group" data-aos="fade-left" data-aos-delay="200">
                    <div class="flex-shrink-0 w-14 h-14 md:w-16 md:h-16 bg-green-900 shadow-xl rounded-2xl flex items-center justify-center border-t-4 border-yellow-500 transform group-hover:scale-110 transition-transform">
                        <i class="fas fa-graduation-cap text-yellow-500 text-xl md:text-2xl"></i>
                    </div>
                    <div class="bg-green-900 rounded-2xl shadow-md p-5 md:p-6 flex-grow text-white text-center sm:text-left">
                        <h4 class="text-lg md:text-xl font-extrabold text-yellow-400 mb-2">Masa Depan Unggul</h4>
                        <p class="text-xs md:text-base text-green-50 leading-relaxed">
                            Kini, MA Pergis Ganra terus bertransformasi menuju integrasi IPTEK and IMTAQ yang lebih mendalam, mempersiapkan lulusan untuk menghadapi tantangan zaman dengan bekal akhlak mulia.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Quote Final -->
            <div class="mt-20 text-center" data-aos="zoom-in">
                <div class="inline-block p-1 bg-yellow-500 rounded-2xl">
                    <div class="bg-white px-10 py-8 rounded-xl shadow-inner italic">
                         <p class="text-2xl font-bold text-green-900 leading-tight">
                            "Membangun Generasi Islami yang Unggul dan Berdaya Saing"
                         </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
