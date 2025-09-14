@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3 gap-2">
        <h2 class="text-lg md:text-xl font-bold">Daftar Artikel</h2>
        <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">+ Tambah Artikel</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Table Responsive -->
    <div class="table-responsive shadow-sm rounded">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th style="width: 50px;">#</th>
                    <th>Judul</th>
                    <th style="width: 120px;">Foto</th>
                    <th>Penulis</th>
                    <th style="width: 150px;">Tanggal</th>
                    <th style="width: 160px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-truncate" style="max-width: 200px;">{{ $article->title }}</td>
                    <td>
                        @if($article->photo)
                            <img src="{{ asset('storage/'.$article->photo) }}" class="img-fluid rounded" style="max-height: 60px;">
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>{{ $article->user->name ?? '-' }}</td>
                    <td>{{ $article->created_at->format('d M Y') }}</td>
                    <td>
                        <div class="d-flex flex-wrap gap-1">
                            <a href="{{ route('admin.articles.edit', $article) }}" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" onsubmit="return confirm('Yakin hapus artikel ini?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $articles->links() }}
    </div>
</div>
@endsection
