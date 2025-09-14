<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlePublicController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(6); // tampilkan 6 per halaman
        return view('public.artikel.index', compact('articles'));
    }

    public function show(Article $article)
    {
        $otherArticles = Article::where('id', '!=', $article->id)
            ->latest()
            ->take(3)
            ->get();

        return view('public.artikel.show', compact('article', 'otherArticles'));
    }
}
