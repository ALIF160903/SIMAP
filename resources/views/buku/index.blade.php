@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Daftar Buku</h4>
    <a href="
    " class="btn btn-primary">+ Tambah Buku</a>
</div>

<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bukus as $buku)
        <tr>
            <td>{{ $buku->id_buku }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->stok }}</td>
            <td>
                <a href="
                " class="btn btn-sm btn-warning">Edit</a>
                <form action="
                " method="POST" style="display:inline-block;">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus buku ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
