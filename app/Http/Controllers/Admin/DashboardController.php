<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Total data untuk box kecil
        $totalUsers = User::count();
        $totalArticles = Article::count();
        $totalVisits = 3210; // contoh, bisa pakai tabel visits kalau ada

        // Ambil data artikel per bulan
        $articlesPerMonth = Article::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->groupBy('month')
            ->pluck('total', 'month');

        // Buat label bulan
        $labels = [];
        $data = [];
        for ($i = 1; $i <= 12; $i++) {
            $labels[] = Carbon::create()->month($i)->format('M'); // Jan, Feb, dst
            $data[] = $articlesPerMonth[$i] ?? 0;
        }

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalArticles',
            'totalVisits',
            'labels',
            'data'
        ));
    }
}
