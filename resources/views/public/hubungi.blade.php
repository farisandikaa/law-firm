@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section class="py-16 bg-[#2b2b45]" data-aos="fade-down">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">Hubungi Kami</h1>
        </div>
    </section>

    {{-- Contact Section --}}
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            
            {{-- Info & Form --}}
            <div class="flex flex-col md:flex-row gap-12 mb-12 max-w-6xl mx-auto">
                
                {{-- Info --}}
                <div class="md:w-1/2" data-aos="fade-right">
                    <h2 class="text-2xl sm:text-3xl font-bold text-black-800 mb-4">Ada yang dapat kami bantu?</h2>
                    <p class="text-black-600 mb-8">
                        Kami memiliki mitra pengacara yang profesional, solutif serta selalu menjaga informasi calon klien atau klien.
                    </p>
                    <div class="space-y-4">
                        <p class="flex items-center text-black-700">
                            <i class="bi bi-telephone-fill mr-3"></i> 0895-3893-29944
                        </p>
                        <p class="flex items-center text-black-700">
                            <i class="bi bi-envelope-fill mr-3"></i> hyuda.putranto@gmail.com
                        </p>
                        <p class="flex items-center text-black-700">
                            <i class="bi bi-globe mr-3"></i> domain web nanti
                        </p>
                    </div>
                </div>

                {{-- Form --}}
                <div class="md:w-1/2" data-aos="fade-left">
                    <form class="space-y-4">
                        <div class="flex flex-col sm:flex-row gap-4">
                            <input type="text" placeholder="Nama" class="w-full border border-black-300 p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <input type="email" placeholder="Email" class="w-full border border-black-300 p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <input type="tel" placeholder="No. telepon" class="w-full border border-black-300 p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <textarea placeholder="Pesan" rows="4" class="w-full border border-black-300 p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="bg-[#2b2b45] text-white font-semibold py-3 px-6 rounded-md hover:bg-blue-800 transition-colors duration-200">
                                Kirim pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <hr class="my-12">

            {{-- Map & Address --}}
            <div class="flex flex-col-reverse md:flex-row gap-12 max-w-6xl mx-auto">
                
                {{-- Map --}}
                <div class="md:w-1/2 rounded-lg border-4 border-blue-900 overflow-hidden flex items-center justify-center p-2" data-aos="zoom-in">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.1271889255404!2d106.9726796909098!3d-6.457036707100524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6995884f3c0df7%3A0x93088f5b679f1f43!2sPerum%20BCI%20Bogor%20Timur!5e0!3m2!1sid!2sid!4v1757591056185!5m2!1sid!2sid" 
                        width="100%" height="350" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                {{-- Address --}}
                <div class="md:w-1/2" data-aos="fade-up">
                    <h2 class="text-2xl sm:text-3xl font-bold text-black-800 mb-4">Ada yang dapat kami bantu?</h2>
                    <p class="text-black-600 mb-8">
                        Kami memiliki mitra pengacara yang profesional, solutif serta selalu menjaga informasi klien.
                    </p>
                    <div class="space-y-4">
                        <h3 class="font-semibold text-black-800">Bogor :</h3>
                        <p class="text-black-700">
                            Perumahan Bukit Cileungsi Indah, Blok B9 No.4, Cikahuripan, Klapanunggal, Kabupaten Bogor – 16710
                        </p>
                    </div>
                    <div class="mt-8">
                        <a href="https://maps.app.goo.gl/v19vxSydAkrFvbVA7" target="_blank" 
                           class="bg-[#2b2b45] inline-block text-white font-semibold py-3 px-6 rounded-md hover:bg-blue-800 transition-colors duration-200">
                            Open in Google Map
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
