<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class autentikasicontroller extends Controller
{
    public function index()
    {
        return view('autentikasi.lojin');
    }
}
