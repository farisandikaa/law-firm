@extends('layouts.app')

@section('content')
    
    {{-- Hero Section --}}
    <section class="py-16 bg-[#2b2b45] mt-0" data-aos="fade-down">
        <div class="container mx-auto px-4 text-center" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">Artikel</h1>
        </div>
    </section>

<div class="container mx-auto px-4 py-12">
    <div class="articles-grid" data-aos="fade-up" data-aos-delay="150">
        @foreach ($articles as $article)
            <div class="article-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                @if ($article->photo)
                    <div class="article-image" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 120 }}">
                        <img src="{{ asset('storage/' . $article->photo) }}" alt="{{ $article->title }}">
                    </div>
                @endif

                <div class="article-body" data-aos="fade-up" data-aos-delay="{{ $loop->index * 150 }}">
                    <h3 class="article-title">{{ $article->title }}</h3>
                    <p class="article-description">
                        {{ Str::limit(strip_tags($article->content), 120) }}
                    </p>
                    <a href="{{ route('artikel.show', $article->id) }}" class="read-more" data-aos="fade-right" data-aos-delay="{{ $loop->index * 180 }}">READ MORE »</a>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="mt-8 flex justify-center" data-aos="fade-up" data-aos-delay="200">
        {{ $articles->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
