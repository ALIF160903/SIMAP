@extends('layouts.app')

@section('content')
<h4 class="mb-4">Tambah Buku</h4>

<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="judul" class="form-label">Judul Buku</label>
        <input type="text" class="form-control" name="judul" required>
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok</label>
        <input type="number" class="form-control" name="stok" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('buku.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
