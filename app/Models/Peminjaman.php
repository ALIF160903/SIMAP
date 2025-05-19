<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pinjam';
    protected $fillable = ['id_anggota', 'id_buku', 'tanggal_pinjam', 'tanggal_kembali'];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}
