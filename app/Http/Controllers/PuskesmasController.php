<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuskesmasController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function tentang_kami()
    {
        return view('user.tentangkami');
    }

    public function sejarah()
    {
        return view('user.sejarah');
    }

    public function kontak()
    {
        return view('user.kontak');
    }

    public function galeri()
    {
        return view('user.galeri');
    }
    public function berita()
    {
        return view('user.berita');
    }
    public function berita_detail()
    {
        return view('user.detail_berita');
    }
    public function unduhan()
    {
        return view('user.unduhan');
    }
}
