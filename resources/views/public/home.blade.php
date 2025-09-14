@extends('layouts.app')

@section('content')

    {{-- SECTION 1: Hero Banner --}}
    <section class="relative min-h-[80vh] bg-cover bg-center flex items-center justify-center text-center px-4 sm:px-6 lg:px-12 pt-16"
         style="background-image: url('images/banner1.jpg');" data-aos="fade-up" data-aos-duration="1000">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 max-w-3xl" data-aos="zoom-in" data-aos-delay="200">
            <h1 class="text-xl sm:text-2xl md:text-4xl font-bold text-white mb-4 leading-relaxed">
                Konsultasi Hukum & Jasa Pengacara Perceraian, Pembagian Waris, Gono Gini serta Hak Asuh Anak
            </h1>
            <p class="text-white text-sm sm:text-base md:text-lg mb-6 leading-relaxed">
                Profesional, solutif serta menjaga informasi pribadi dari calon klien.
            </p>
            <a href="https://wa.me/62895389329944"
               class="w-full sm:w-auto inline-flex justify-center items-center gap-2 px-6 py-3 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-semibold"
               data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-whatsapp"></i> Jadwalkan Konsultasi
            </a>
        </div>
    </section>

    {{-- SECTION 2: Tentang --}}
    <section id="tentang" class="py-16 bg-white scroll-mt-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center gap-10 px-4 sm:px-6 lg:px-12">
            <div class="flex-1" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-4">Sekilas Tentang Kami</h2>
                <p class="text-gray-700 leading-relaxed mb-6 text-sm sm:text-base md:text-lg">
                    <strong>HYP & Partners</strong> adalah layanan konsultasi hukum dan jasa pengacara perceraian, hak asuh anak,
                    pembagian harta gono gini, penetapan ahli waris, pembagian warisan, pembatalan perkawinan, sengketa utang piutang,
                    serta dibidang properti dan pertanahan.
                </p>
                <a href="{{route ('about')}}"
                   class="w-full sm:w-auto inline-flex justify-center items-center gap-2 px-6 py-3 rounded-lg bg-[#2b2b45] text-white font-semibold"
                   data-aos="zoom-in" data-aos-delay="200">
                    Read More
                </a>
            </div>
            <div class="flex-1 w-full" data-aos="fade-left" data-aos-duration="1000">
                <img src="/images/about.jpg" alt="Tentang Kami" class="rounded-lg w-full aspect-video object-cover">
            </div>
        </div>
    </section>

    {{-- SECTION 3: Profil --}}
    <section id="profil" class="py-16 bg-gray-50 scroll-mt-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-12">
            <div class="text-center mb-10" data-aos="fade-up">
                <span class="inline-block w-16 h-1 bg-yellow-400 rounded mb-4"></span>
                <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-900">Profil Pengacara</h2>
            </div>
            <div class="flex flex-wrap justify-center gap-8">
                
                {{-- Card 1 --}}
                <div class="bg-white shadow-md rounded-2xl p-6 flex flex-col items-center text-center"
                     data-aos="zoom-in" data-aos-delay="100">
                    <img src="/images/lawyer1.jpg" alt="Pengacara 1"
                         class="rounded-full w-28 h-28 sm:w-36 sm:h-36 object-cover mb-4">
                    <h3 class="text-lg font-semibold mb-2">Hanif Yuda Putranto, S.H.</h3>
                    <p class="text-gray-600 text-sm mb-4">Spesialis Hukum Keluarga (Perceraian, Hak Asuh Anak, Harta Gono Gini, Waris)</p>
                    <a href="https://wa.me/62895389329944"
                       class="w-full sm:w-auto inline-flex justify-center items-center gap-2 px-4 py-2 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-semibold">
                        <i class="bi bi-whatsapp"></i> Konsultasi
                    </a>
                </div>

                {{-- Card 2 --}}
                <div class="bg-white shadow-md rounded-2xl p-6 flex flex-col items-center text-center"
                     data-aos="zoom-in" data-aos-delay="200">
                    <img src="/images/lawyerniken.jpg" alt="Pengacara 2"
                         class="rounded-full w-28 h-28 sm:w-36 sm:h-36 object-cover mb-4">
                    <h3 class="text-lg font-semibold mb-2">Niken Amanda, S.H.</h3>
                    <p class="text-gray-600 text-sm mb-4">Spesialis Hukum Keluarga (Perceraian, Hak Asuh Anak, Harta Gono Gini, Waris)</p>
                    <a href="https://wa.me/62895389329944"
                       class="w-full sm:w-auto inline-flex justify-center items-center gap-2 px-4 py-2 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-semibold">
                        <i class="bi bi-whatsapp"></i> Konsultasi
                    </a>
                </div>



            </div>
        </div>
    </section>

    {{-- SECTION 4: Cara Konsultasi --}}
    <section id="konsultasi" class="py-16 bg-white scroll-mt-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-12">
            <div class="text-center mb-12" data-aos="fade-up">
                <span class="inline-block w-16 h-1 bg-yellow-400 rounded mb-4"></span>
                <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-900">Pilih Cara Konsultasi</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Online --}}
                <div class="bg-gray-50 rounded-2xl shadow-md p-6 flex flex-col items-center text-center"
                     data-aos="flip-left" data-aos-delay="100">
                    <img src="{{asset('images/konsul2.jpg')}}" alt="Konsultasi Online"
                         class="h-48 sm:h-56 mb-6 object-contain">
                    <h3 class="text-lg md:text-xl font-semibold mb-4">Konsultasi Online</h3>
                    <ul class="text-gray-700 text-sm sm:text-base space-y-2 mb-6 text-left w-full max-w-xs">
                        <li class="flex items-center"><i class="bi bi-check-circle-fill text-blue-900 mr-2"></i> Via WhatsApp / Telepon</li>
                        <li class="flex items-center"><i class="bi bi-check-circle-fill text-blue-900 mr-2"></i> Bebas waktu & hari</li>
                        <li class="flex items-center"><i class="bi bi-check-circle-fill text-blue-900 mr-2"></i> Pilih advokat sendiri</li>
                    </ul>
                    <a href="https://wa.me/62895389329944"
                       class="w-full sm:w-auto inline-flex justify-center items-center gap-2 px-5 py-3 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-blue-900 font-semibold">
                        <i class="bi bi-whatsapp"></i> Konsultasi Online
                    </a>
                </div>

                {{-- Tatap muka --}}
                <div class="bg-gray-50 rounded-2xl shadow-md p-6 flex flex-col items-center text-center"
                     data-aos="flip-right" data-aos-delay="200">
                    <img src="{{asset('images/konsul.jpg')}}" alt="Konsultasi Tatap Muka"
                         class="h-48 sm:h-56 mb-6 object-contain">
                    <h3 class="text-lg md:text-xl font-semibold mb-4">Konsultasi Tatap Muka</h3>
                    <ul class="text-gray-700 text-sm sm:text-base space-y-2 mb-6 text-left w-full max-w-xs">
                        <li class="flex items-center"><i class="bi bi-check-circle-fill text-blue-900 mr-2"></i> Kantor / lokasi lain</li>
                        <li class="flex items-center"><i class="bi bi-check-circle-fill text-blue-900 mr-2"></i> Jam 08.00–19.00 WIB</li>
                        <li class="flex items-center"><i class="bi bi-check-circle-fill text-blue-900 mr-2"></i> Pilih advokat sendiri</li>
                    </ul>
                    <a href="https://wa.me/62895389329944"
                       class="w-full sm:w-auto inline-flex justify-center items-center gap-2 px-5 py-3 rounded-lg bg-yellow-400 text-blue-900 font-semibold">
                        <i class="bi bi-whatsapp"></i> Konsultasi Tatap Muka
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 5: Info Jasa Hukum --}}
    <section id="layanan" class="py-16 bg-gray-50 scroll-mt-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-12">
            <div class="text-center mb-12" data-aos="fade-up">
                <span class="inline-block w-16 h-1 bg-yellow-400 rounded mb-4"></span>
                <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-900">Layanan Jasa Hukum</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white shadow-lg rounded-2xl p-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-bold text-center mb-2">Perceraian & Hak Asuh Anak</h3>
                    <p class="text-center text-blue-700 font-semibold">Mulai dari</p>
                    <p class="text-center text-2xl font-bold text-blue-800 mb-4">Rp. 15 Jt</p>
                    <h4 class="font-bold mb-2">Syarat dan Ketentuan:</h4>
                    <ul class="list-disc list-inside text-sm text-gray-700 space-y-2">
                        <li>KTP Pihak Penggugat</li>
                        <li>Alamat lengkap Tergugat</li>
                        <li>Buku Nikah dari KUA <span class="font-semibold">(untuk Muslim)</span></li>
                        <li>Akta Perkawinan dari Dukcapil <span class="font-semibold">(untuk Non-Muslim)</span></li>
                        <li>Akta Kelahiran Anak + KK <span class="font-semibold">(bila meminta Hak Asuh Anak)</span></li>
                        <li>Bukti Slip Gaji Suami <span class="font-semibold">(bila meminta Nafkah Anak)</span></li>
                        <li>Siapkan minimal 2 orang saksi</li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div class="bg-white shadow-lg rounded-2xl p-6" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-xl font-bold text-center mb-2">Pembagian Harta Gono Gini</h3>
                    <p class="text-center text-blue-700 font-semibold">Mulai dari</p>
                    <p class="text-center text-2xl font-bold text-blue-800 mb-4">Rp. 30 Jt</p>
                    <h4 class="font-bold mb-2">Syarat dan Ketentuan:</h4>
                    <ul class="list-disc list-inside text-sm text-gray-700 space-y-2">
                        <li>KTP Pihak Penggugat</li>
                        <li>Alamat Lengkap Tergugat</li>
                        <li>Akta Cerai + Putusan Pengadilan</li>
                        <li>Bukti kepemilikan atau Bukti Keterangan asset</li>
                        <li>Siapkan minimal 2 orang saksi</li>
                    </ul>
                </div>

                <!-- Card 3 -->
                <div class="bg-white shadow-lg rounded-2xl p-6" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-xl font-bold text-center mb-2">Penetapan Ahli Waris</h3>
                    <p class="text-center text-blue-700 font-semibold">Mulai dari</p>
                    <p class="text-center text-2xl font-bold text-blue-800 mb-4">Rp. 20 Jt</p>
                    <h4 class="font-bold mb-2">Syarat dan Ketentuan:</h4>
                    <ul class="list-disc list-inside text-sm text-gray-700 space-y-2">
                        <li>KTP semua Ahli Waris</li>
                        <li>KK semua Ahli Waris</li>
                        <li>Akta kelahiran Ahli Waris</li>
                        <li>Surat kematian Pewaris</li>
                        <li>Buku nikah Pewaris</li>
                        <li>KTP dan KK Pewaris bila masih ada</li>
                        <li>Siapkan minimal 2 orang saksi</li>
                    </ul>
                </div>

                <a href="{{route ('jasa')}}"
                   class="w-full sm:w-auto inline-flex justify-center items-center gap-2 px-6 py-3 rounded-lg bg-[#2b2b45] text-white font-semibold"
                   data-aos="fade-up" data-aos-delay="400">
                    Lihat Jasa Lainnya
                </a>
            </div>
        </div>
    </section>

@endsection
