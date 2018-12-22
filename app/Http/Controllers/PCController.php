<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PCController extends Controller
{
    public function home()
    {
        return view ('depan/home');
    }
    public function register()
    {
        return view ('depan/register');
    }

    public function login()
    {
        return view ('depan/login');
    }

    public function menu()
    {
        return view ('depan/menu');
    }

    public function kategori()
    {
        return view ('depan/kategori');
    }

    public function detail()
    {
        return view ('depan/detail');
    }

    public function keranjang()
    {
        return view ('depan/keranjang');
    }
}
