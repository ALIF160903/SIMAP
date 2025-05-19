<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    // use HasFactory;

    protected $table = 'buku';
    protected $fillable = ['judul', 'stok'];

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'id_buku');
    }
}
