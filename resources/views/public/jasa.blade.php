@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section class="py-16 bg-[#2b2b45]" data-aos="fade-down">
        <div class="container mx-auto px-4 text-center" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">Jasa Hukum</h1>
        </div>
    </section>

    @php
        $services = [
            [
                'title' => 'Hukum PKPU & Kepailitan',
                'description' => 'Perlindungan dan Solusi Profesional dalam Hukum PKPU & Proses Kepailitan. Dukungan langsung untuk Pengusaha dan Pemegang Saham.',
            ],
            [
                'title' => 'Hukum Perdata & Perdata Khusus',
                'description' => 'Tersedia Layanan Ahli dalam Hukum Perdata & Perdata Khusus. Mendukung Kepentingan Hukum Anda dengan Pengetahuan Mendalam dan Penanganan Profesional.',
            ],
            [
                'title' => 'Hukum Pidana & Hukum Pidana Khusus',
                'description' => 'Penanganan Hukum Pidana & Kasus Pidana Khusus Mengawasi Keadilan dan Pengamanan untuk Mendukung Hak dan Keadilan Anda.',
            ],
            [
                'title' => 'Kekayaan Intelektual',
                'description' => 'Melindungi dan Meningkatkan Kekayaan Intelektual Anda. Solusi Terpercaya untuk Hak Cipta, Merek Dagang, dan Paten.',
            ],
            [
                'title' => 'Draft Gugatan & Legal Opinion',
                'description' => 'Draft Gugatan dan Legal Opinion: Mendukung Kesiapan Hukum dan Strategi yang Akurat untuk Kebutuhan Bisnis dan Pribadi Anda.',
            ],
            [
                'title' => 'Hukum Agraria dan Pertanahan',
                'description' => 'Menyediakan Layanan Komprehensif dalam Hukum Agraria dan Pertanahan. Mendukung Kepentingan Properti Anda dengan Pengetahuan Mendalam dan Penanganan Profesional.',
            ],
            [
                'title' => 'Hukum Ketenagakerjaan',
                'description' => 'Solusi Terpercaya dalam Hukum Ketenagakerjaan: Mendukung Hubungan Industri yang Seimbang dengan Kepatuhan Hukum dan Penanganan Kasus yang Profesional.',
            ],
            [
                'title' => 'Hukum Tata Usaha Negara',
                'description' => 'Ahli dalam Hukum Tata Usaha Negara: Mendukung Efisiensi dan Kepatuhan Administrasi Publik dengan Pendekatan Hukum yang Teliti dan Terpercaya.',
            ],
        ];
    @endphp

    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($services as $index => $service)
                <div class="bg-white shadow-md rounded-xl p-6 text-center flex flex-col items-center 
                            transform transition duration-300 hover:scale-105 hover:shadow-xl hover:-translate-y-1 group" 
                     data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    
                    <div class="text-4xl text-[#2b2b45] mb-4 transition duration-300 group-hover:text-yellow-500 group-hover:rotate-6" 
                         data-aos="zoom-in" data-aos-delay="{{ $index * 120 }}">
                        <i class="fas fa-landmark"></i>
                    </div>
                    
                    <h3 class="text-lg md:text-xl font-semibold mb-2">{{ $service['title'] }}</h3>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed">{{ $service['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

@endsection
