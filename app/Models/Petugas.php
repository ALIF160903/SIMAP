<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_petugas';
    protected $fillable = ['nama', 'username', 'password'];
}
