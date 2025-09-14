@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Buat Artikel</h1>

    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Judul -->
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <!-- Foto -->
        <div class="mb-3">
            <label for="photo" class="form-label">Foto</label>
            <input type="file" name="photo" class="form-control">
            @error('photo')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
   

        <!-- Isi (Summernote) -->
        <div class="mb-3">
            <label for="content" class="form-label">Isi Artikel</label>
            <textarea name="content" id="editor" class="form-control" rows="50"></textarea>
        </div>

        <!-- Tombol Aksi -->
        <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Simpan
                </button>
            </div>
    </form>
 
</div>
@endsection