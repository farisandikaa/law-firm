<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','HYP & Partners')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo.png')}}">

    @vite(['resources/css/styles.css','resources/js/app.js'])
    @stack('styles')

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    <nav class="flex items-center justify-between px-4 sm:px-8 py-3 bg-white shadow-md sticky top-0 z-50">
        <div class="logo">
            <img src="{{asset('images/logo1bg.png')}}" alt="logo" class="h-10 sm:h-12">
        </div>

        <!-- Hamburger (mobile) -->
        <button class="md:hidden text-gray-700 focus:outline-none" id="hamburgerBtn">
            <i class="bi bi-list text-3xl"></i>
        </button>

        <!-- Links -->
        <div class="hidden md:flex gap-6 font-medium text-gray-700" id="navLinks">
            <a href="{{ route('home') }}" class="hover:text-yellow-500">Home</a>
            <a href="{{ route('about') }}" class="hover:text-yellow-500">Tentang Kami</a>
            <a href="{{ route('artikel.index') }}" class="hover:text-yellow-500">Artikel</a>
            <a href="{{ route('pengacara') }}" class="hover:text-yellow-500">Pengacara</a>
            <a href="{{ route('jasa') }}" class="hover:text-yellow-500">Jasa Hukum</a>
            <a href="{{ route('hubungi') }}" class="hover:text-yellow-500">Hubungi Kami</a>
            @guest
                {{-- User belum login --}}
                <a href="{{ route('login') }}" class="hover:text-yellow-500">Login</a>
            @endguest

            @auth
                {{-- User sudah login --}}
                <a href="{{ route('dashboard') }}" class="hover:text-yellow-500">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-yellow-500">Logout</button>
                </form>
            @endauth

        </div>
    </nav>

    {{-- Konten --}}
    <main>
        @yield('content')
    </main>

    {{-- FAQ --}}
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6">
        <h2 class="text-2xl sm:text-3xl font-bold mb-10 text-center" data-aos="fade-up">
            Pertanyaan Sering Diajukan (FAQ)
        </h2>
        <div class="space-y-4 max-w-4xl mx-auto">
            {{-- FAQ Items --}}
            <div class="space-y-4 mx-auto w-full max-w-3xl px-2 sm:px-4 lg:px-0">

                <details class="bg-blue-100 p-4 rounded-lg" data-aos="fade-up" data-aos-delay="100">
                    <summary class="font-semibold cursor-pointer">
                        Cara mengurus perceraian atau surat cerai Islam ?
                    </summary>
                    <p class="mt-2 text-gray-700">
                        Untuk yang menikah menurut agama Islam, mengurus perceraian / Gugatan cerai diajukan di Pengadilan Agama wilayah domisili Isteri.
                    </p>
                    <br>
                    <p>
                        Adapun syarat mengurus perceraian di Pengadilan Agama yaitu : (1) KTP Isteri, (2) Alamat lengkap suami, (3) Buku Nikah, (4) siapkan 2 orang saksi yang dapat dari keluarga, serta (5) sipakan gugatan cerai secara tertulis.
                    </p>
                    <br>
                    <p>
                        Apabila meminta hak asuh anak, maka wajib menambah dokumen (1) Akta Kelahiran Anak, serta (2) Kartu Keluarga (KK)
                    </p>
                </details>

                <details class="bg-blue-100 p-4 rounded-lg" data-aos="fade-up" data-aos-delay="200">
                    <summary class="font-semibold cursor-pointer">
                        Cara mengajukan gugatan cerai untuk Non Muslim ?
                    </summary>
                    <p class="mt-2 text-gray-700">
                        Untuk yang menikah menurut agama Kristen, Katolik, Hindu, Budha dan Konghucu serta mencatatkan perkawinan di Disdukcapil, maka gugatan cerai diajukan di Pengadilan Negeri wilayah domisili pihak yang digugat cerai.
                    </p>
                    <br>
                    <p>
                        Contoh: apabila isteri bertempat tinggal di Jakarta Selatan dan ingin mengajukan gugatan cerai terhadap suami yang bertempat tinggal di Jakarta Barat, maka gugatan cerai diajukan di Pengadilan Negeri Jakarta Barat sesuai domisili tempat tinggal suami.
                    </p>
                    <br>
                    <p>
                        Syarat perceraian non Muslim: (1) KTP Penggugat, (2) Alamat lengkap Tergugat, (3) Akta Perkawinan dari Disdukcapil, (4) siapkan 2 orang saksi keluarga.
                    </p>
                    <br>
                    <p>
                        Jika meminta hak asuh anak, wajib menambah dokumen (1) Akta Kelahiran Anak, (2) Kartu Keluarga (KK).
                    </p>
                </details>

                <details class="bg-blue-100 p-4 rounded-lg" data-aos="fade-up" data-aos-delay="300">
                    <summary class="font-semibold cursor-pointer">
                        Cara mengurus surat cerai dari luar negeri ?
                    </summary>
                    <p class="mt-2 text-gray-700">
                        Untuk mengurus surat cerai dari luar negeri, biasanya klien dapat memakai jasa pengacara.
                    </p>
                    <br>
                    <p>
                        Pengacara membantu mendaftarkan serta mewakili klien dalam persidangan di pengadilan hingga mengambil akta cerai.
                    </p>
                    <br>
                    <p>
                        Surat kuasa dari klien wajib dilegalisasi oleh KBRI di luar negeri.
                    </p>
                </details>

                <details class="bg-blue-100 p-4 rounded-lg" data-aos="fade-up" data-aos-delay="400">
                    <summary class="font-semibold cursor-pointer">
                        Cara membuat perjanjian pra nikah / prenup / perjanjian pisah harta pasca nikah ?
                    </summary>
                    <p class="mt-2 text-gray-700">
                        Perjanjian perkawinan terdiri 2 macam: <strong>pra nikah</strong> (prenuptial agreement) & <strong>pasca nikah</strong> (postnuptial agreement).
                    </p>
                    <br>
                    <p>
                        Tujuannya agar harta tetap terpisah, tidak bercampur jadi harta bersama.
                    </p>
                    <br>
                    <p>
                        Dibuat dalam bentuk akta autentik notaris, dicatatkan di KUA (Islam) atau Disdukcapil (Non Muslim).
                    </p>
                </details>

                <details class="bg-blue-100 p-4 rounded-lg" data-aos="fade-up" data-aos-delay="500">
                    <summary class="font-semibold cursor-pointer">Mengajukan gugatan cerai di pengadilan wajib memakai jasa pengacara ?</summary>
                    <p class="mt-2 text-gray-700">Mengurus perceraian di pengadilan tidak wajib memakai jasa pengacara.</p>
                    </br>
                    <p>
                        Anda dapat mengajukan cerai di pengadilan tanpa harus memakai jasa pengacara perceraian.
                    </p>
                    </br>
                    <p>
                        Biasanya di setiap pengadilan telah disiapkan “Posbakum” dimana membantu anda dalam membuat gugatan cerai serta menjawab segala pertanyaan berkaitan dengan gugatan cerai yang akan diajukan.
                    </p>
                </details>

                <details class="bg-blue-100 p-4 rounded-lg" data-aos="fade-up" data-aos-delay="600">
                    <summary class="font-semibold cursor-pointer">Bolehkah menggugat pembagian gono gini terkait harta yang masih KPR ?</summary>
                    <p class="mt-2 text-gray-700">
                        Berdasarkan SEMA No. 3 Tahun 2018 tentang Pemberlakuan Rapat Pleno  Kamar Mahkamah Agung Tahun 2018, Huruf d Rumusan Kamar Agama Perkara Keluarga pada prinsipnya menyatakan gugatan pembagian harta gono gini (harta bersama) yang objek sengketanya masih diagungkan sebagai jaminan utang atau objek tersebut mengandung sengketa kepemilikan akibat transaksi kedua dan seterusnya, maka gugatan atas objek tersebut harus dinyatakan tidak dapat diterima.
                    </p>
                </details>

                <details class="bg-blue-100 p-4 rounded-lg" data-aos="fade-up" data-aos-delay="700">
                    <summary class="font-semibold cursor-pointer">Ketika terjadi perceraian, hak asuh anak akan jatuh ke mantan isteri atau mantan suami ?</summary>
                    <p class="mt-2 text-gray-700">
                        Sesuai ketentuan Pasal 105 KHI menyebutkan anak yang masih dibawah umur 12 tahun, pemeliharaan anak jatuh kepada ibunya.
                    </p>
                    </br>
                    <p>
                        Sedangkan bila sudah umur diatas 12 tahun, anak berhak memilih ikut dengan ayah atau ibunya.
                    </p>
                    </br>
                    <p>
                        Putusan MA RI No. 126 K/Pdt/2001 tanggal 28 Agustus 2003 juga menyebutkan Bila terjadi perceraian, anak yang masih di bawah umur pemeliharaannya seyogiyanya diserahkan kepada orang terdekat dan akrab dengan si anak yaitu Ibu.
                    </p>
                </details>

                <details class="bg-blue-100 p-4 rounded-lg" data-aos="fade-up" data-aos-delay="800">
                    <summary class="font-semibold cursor-pointer">Cara Mengajukan Penetapan Ahli Waris di Pengadilan ?</summary>
                    <p class="mt-2 text-gray-700">
                        Penetapan Ahli Waris diajukan di Pengadilan Agama oleh para ahli waris dari pewaris yang meninggal dunia.
                    </p>
                    </br>
                    <p>
                        Tujuan penetapan ahli waris adalah untuk menetapkan, yaitu : (1) pihak yang menjadi pewaris, (2) pihak yang menjadi ahli waris, (3) menentukan besaran bagian dari ahli waris.
                    </p>
                    </br>
                    <p>
                        Adapun syarat yang perlu dilengkapi dalam mengajukan penetapan ahli waris, yaitu : (1) KTP Perwaris, (2) Surat Kematian Pewaris, (3) KTP Ahli Waris, (4) Akta Kelahiran Ahli Waris, (4) Kartu Keluarga, (5) Buku Nikah Pewaris, (6) Siapkan 2 orang saksi.
                    </p>
                </details>

            </div>
        </div>
    </div>
</section>


    
            
    <section>
        <!-- Floating WhatsApp -->
        <a href="https://wa.me/62895389329944" class="floating-wa" target="_blank">
            <div class="wa-icon">
                <i class="fab bi-whatsapp"></i>
            </div>
        </a>
    </section>

    {{-- Footer --}}
<footer class="bg-gray-900 text-gray-300 pt-12">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 text-sm">

        <!-- Kolom 1 -->
<div class="flex flex-col items-start">
    <img src="{{ asset('images/logo2bg.png') }}" 
         alt="Logo" 
         class="max-h-[400px] w-auto -mb-2"> {{-- Logo besar tapi rapat --}}
         
    <p class="leading-relaxed">
        Layanan konsultasi & jasa pengacara perceraian, hak asuh anak, harta gono gini, 
        pembagian waris, perwalian anak, itsbat nikah, pembuatan perjanjian pra nikah, 
        asal usul anak serta dibidang hukum keluarga lainnya.
    </p>
    <p class="mt-3 font-bold">Hotline</p>
    <p>0895-3893-29944</p>
    <p>hyuda.putranto@gmail.com</p>
</div>



        <!-- Kolom 2 -->
        <div>
            <h4 class="text-lg font-semibold mb-3">Jadwalkan Konsultasi</h4>
            <a href="https://wa.me/62895389329944"
               class="bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-medium px-4 py-2 rounded-lg flex items-center gap-2 w-max">
               <i class="bi bi-whatsapp"></i> Jadwalkan Konsultasi
            </a>
        </div>

        <!-- Kolom 3 -->
        <div>
            <h4 class="text-lg font-semibold mb-3">Lokasi</h4>
            <h2 class="font-bold">Bogor</h2>
            <p>Perumahan Bukit Cileungsi Indah Blok B9 Nomor 4, Desa Cikahuripan, Kecamatan Klapanunggal</p>
            <p>Kabupaten Bogor - 16710 </p>
        </div>

        <!-- Kolom 4 -->
        <div>
            <h4 class="text-lg font-semibold mb-3">Kontak</h4>
            <a href="{{ route('hubungi') }}" class="hover:text-yellow-400">Hubungi Kami</a>
            <div class="flex gap-4 mt-3">
                <a href="https://www.instagram.com/hanifyuda_/" target="__blank" class="hover:text-yellow-400">
                    <i class="bi bi-instagram text-xl"></i>
                </a>
                <a href="https://wa.me/62895389329944" target="__blank" class="hover:text-yellow-400">
                    <i class="bi bi-whatsapp text-xl"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="mt-10 py-4 text-center border-t border-gray-700 text-gray-400 text-sm">
        © 2025 <b>HYP & Partners</b>. All rights reserved. Developed by 
        <a href="https://farisandika.vercel.app" class="hover:text-yellow-400">Faris Andika Putra</a>.
    </div>
</footer>


    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 800, // durasi animasi
        once: true,    // animasi hanya jalan sekali
    });
    </script>

    <script>
        // Swiper contoh
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next-custom",
                prevEl: ".swiper-button-prev-custom",
            },
            breakpoints: {
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
            },
        });

        // Navbar toggle
        document.getElementById("hamburgerBtn").addEventListener("click", function () {
            const navLinks = document.getElementById("navLinks");
            navLinks.classList.toggle("hidden");
            navLinks.classList.toggle("flex");
            navLinks.classList.toggle("flex-col");
            navLinks.classList.toggle("absolute");
            navLinks.classList.toggle("top-16");
            navLinks.classList.toggle("left-0");
            navLinks.classList.toggle("w-full");
            navLinks.classList.toggle("bg-white");
            navLinks.classList.toggle("p-4");
            navLinks.classList.toggle("shadow-md");
        });
    </script>
</body>
</html>
