<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_anggota';
    protected $fillable = ['nama', 'username', 'password'];

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'id_anggota');
    }
}
