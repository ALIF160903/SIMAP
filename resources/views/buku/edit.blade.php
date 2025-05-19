@extends('layouts.app')

@section('content')
<h4 class="mb-4">Edit Buku</h4>

<form action="{{ route('buku.update', $buku->id_buku) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label for="judul" class="form-label">Judul Buku</label>
        <input type="text" class="form-control" name="judul" value="{{ $buku->judul }}" required>
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok</label>
        <input type="number" class="form-control" name="stok" value="{{ $buku->stok }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('buku.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
