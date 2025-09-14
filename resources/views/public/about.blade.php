@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section class="py-16 bg-[#2b2b45] mt-0" data-aos="fade-down">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">Tentang Kami</h1>
        </div>
    </section>

    {{-- Tentang Kami --}}
    <section class="py-20 bg-white">
        <div class="container mx-auto flex flex-col md:flex-row items-center gap-10 px-6">

            {{-- Teks --}}
            <div class="flex-1 space-y-4" data-aos="fade-right">
                <p class="text-gray-700 leading-relaxed text-sm sm:text-base md:text-lg">
                    <strong>HYP & Partners</strong> adalah layanan konsultasi hukum dan jasa pengacara perceraian, hak asuh anak, pembagian harta gono gini (harta bersama), penetapan ahli waris, pembagian warisan, pembatalan perkawinan, sengketa utang piutang, serta dibidang property dan pertanahan.
                </p>
                <p class="text-gray-700 leading-relaxed text-sm sm:text-base md:text-lg">
                    Dalam memberikan pelayanan jasa hukum, kantor kami selalu menjaga kepercayaan (trust) yang diberikan oleh klien.
                </p>
                <p class="text-gray-700 leading-relaxed text-sm sm:text-base md:text-lg">
                    Untuk bekerja secara profesional, mitra pengacara kami mengedepankan beberapa prinsip, yaitu Bersikap jujur dengan klien, Independen dalam bekerja, Transparan dalam memberi informasi, serta Memberikan perlindungan terhadap segara informasi yang diberikan klien terkait penanganan perkara.
                </p>

                {{-- Tombol --}}
                <div>
                    <a href="https://wa.me/628123456789" target="_blank"
                       class="inline-flex items-center gap-2 px-6 py-3 rounded-md font-semibold text-white bg-[#2b2b45] hover:bg-[#3b3b5c] transition">
                        <i class="bi bi-whatsapp text-xl"></i> Jadwalkan Konsultasi
                    </a>
                </div>
            </div>

            {{-- Gambar --}}
            <div class="flex-1" data-aos="fade-left">
                <img src="/images/lawyer2.jpg" alt="Tentang Kami"
                     class="rounded-lg shadow-lg w-full max-h-[420px] object-cover md:object-contain mx-auto">
            </div>
        </div>
    </section>

    {{-- Alasan Memilih Kami --}}
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl sm:text-3xl font-bold mb-12" data-aos="fade-up">ALASAN MEMILIH KAMI</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Card --}}
                <div class="flex flex-col items-center bg-white p-6 rounded-xl shadow-sm"
                     data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('icons/star.webp') }}" alt="Berpengalaman" class="w-14 h-14 mb-4">
                    <h3 class="text-lg font-semibold mb-2">Berpengalaman</h3>
                    <p class="text-gray-600 text-sm sm:text-base text-justify">
                        Kami memiliki mitra pengacara yang berpengalaman dalam menyelesaikan banyak sengketa hukum di bidang keluarga.
                    </p>
                </div>

                <div class="flex flex-col items-center bg-white p-6 rounded-xl shadow-sm"
                     data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('icons/price.webp') }}" alt="Harga Terjangkau" class="w-14 h-14 mb-4">
                    <h3 class="text-lg font-semibold mb-2">Harga Terjangkau</h3>
                    <p class="text-gray-600 text-sm sm:text-base text-justify">
                        Harga yang kami tawarkan adalah harga yang sangat terjangkau.
                    </p>
                </div>

                <div class="flex flex-col items-center bg-white p-6 rounded-xl shadow-sm"
                     data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('icons/flex.webp') }}" alt="Fleksibel" class="w-14 h-14 mb-4">
                    <h3 class="text-lg font-semibold mb-2">Fleksibel</h3>
                    <p class="text-gray-600 text-sm sm:text-base text-justify">
                        Kami bekerja sefleksibel mungkin agar memudahkan klien bertemu dan berkonsultasi dengan mitra pengacara kami.
                    </p>
                </div>

                <div class="flex flex-col items-center bg-white p-6 rounded-xl shadow-sm"
                     data-aos="fade-up" data-aos-delay="400">
                    <img src="{{ asset('icons/shield.webp') }}" alt="Menjaga Informasi Klien" class="w-14 h-14 mb-4">
                    <h3 class="text-lg font-semibold mb-2">Menjaga Informasi Klien</h3>
                    <p class="text-gray-600 text-sm sm:text-base text-justify">
                        Mitra pengacara memiliki kewajiban menjaga seluruh informasi yang diberikan calon klien atau klien berkaitan dengan perkara yang dihadapinya.
                    </p>
                </div>

                <div class="flex flex-col items-center bg-white p-6 rounded-xl shadow-sm"
                     data-aos="fade-up" data-aos-delay="500">
                    <img src="{{ asset('icons/clock.webp') }}" alt="Tepat Waktu" class="w-14 h-14 mb-4">
                    <h3 class="text-lg font-semibold mb-2">Tepat Waktu</h3>
                    <p class="text-gray-600 text-sm sm:text-base text-justify">
                        Menyelesaikan pekerjaan tanpa harus ditunda-tunda adalah prinsip yang dipegang oleh mitra pengacara kami.
                    </p>
                </div>

                <div class="flex flex-col items-center bg-white p-6 rounded-xl shadow-sm"
                     data-aos="fade-up" data-aos-delay="600">
                    <img src="{{ asset('icons/heart.webp') }}" alt="Mengedepankan Perdamaian" class="w-14 h-14 mb-4">
                    <h3 class="text-lg font-semibold mb-2">Mengedepankan Perdamaian</h3>
                    <p class="text-gray-600 text-sm sm:text-base text-justify">
                        Mengedepankan perdamaian atau win-win solution bagi para pihak yang bersengketa.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
