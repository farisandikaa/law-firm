@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}  
    <section class="py-16 bg-[#2b2b45] mt-0" data-aos="fade-down">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">Detail Artikel</h1>
        </div>
    </section>

<div class="container mx-auto px-4 py-12">
    <div class="article-detail">
        @if ($article->photo)
            <div class="article-detail-image mb-6">
                <img src="{{ asset('storage/' . $article->photo) }}" alt="{{ $article->title }}" class="rounded-lg shadow-md">
            </div>
        @endif

        <h1 class="article-detail-title text-3xl font-bold mb-2">{{ $article->title }}</h1>
        <p class="article-meta text-gray-500 mb-6">
            {{ $article->created_at->format('M d, Y') }} • 
            {{ $article->user ? $article->user->name : 'Unknown' }}
        </p>

        {{--Wrapper khusus untuk isi artikel --}}
        <div class="article-content mb-8">
            {!! $article->content !!}
        </div>

        {{-- Tombol Kembali --}}
        <a href="{{ route('artikel.index') }}" class="read-more">
            ← Kembali
        </a>
    </div>

    {{-- Berita Lainnya --}}
    @if($otherArticles->count() > 0)
    <div class="mt-16">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Artikel Lainnya</h2>
        <div class="articles-grid">
            @foreach ($otherArticles as $other)
                <div class="article-card">
                    @if ($other->photo)
                        <div class="article-image">
                            <img src="{{ asset('storage/' . $other->photo) }}" alt="{{ $other->title }}">
                        </div>
                    @endif
                    <div class="article-body">
                        <h3 class="article-title">{{ $other->title }}</h3>
                        <p class="article-description">
                            {{ Str::limit(strip_tags($other->content), 100) }}
                        </p>
                        <a href="{{ route('artikel.show', $other->id) }}" class="read-more">READ MORE »</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endif
</div>
@endsection
