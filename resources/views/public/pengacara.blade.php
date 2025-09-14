@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section class="py-16 bg-[#2b2b45] mt-0" data-aos="fade-down">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">Pengacara Kami</h1>
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


@endsection