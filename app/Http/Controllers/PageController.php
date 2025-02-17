<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return 'Nama: Sirfaratih, NIM: 2341720072';
    }
    public function articles($id)
    {
        return "Halaman Artikel dengan Id {$id}";
    }
}
