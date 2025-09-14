<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('user')->latest()->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|max:255',
            'content' => 'required',
            'photo'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('articles', 'public');
        }

        Article::create([
            'title'   => $request->title,
            'content' => $request->content,
            'photo'   => $photoPath,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dibuat!');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title'   => 'required|max:255',
            'content' => 'required',
            'photo'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
        ]);

        $data = $request->only('title', 'content');

        if ($request->hasFile('photo')) {
            // hapus foto lama jika ada
            if ($article->photo && Storage::disk('public')->exists($article->photo)) {
                Storage::disk('public')->delete($article->photo);
            }

            $data['photo'] = $request->file('photo')->store('articles', 'public');
        }

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diupdate!');
    }

    public function destroy(Article $article)
    {
        // hapus foto juga kalau ada
        if ($article->photo && Storage::disk('public')->exists($article->photo)) {
            Storage::disk('public')->delete($article->photo);
        }

        $article->delete();

        return redirect()->route('admin.articles.index')->with('success','Artikel dihapus!');
    }
}
