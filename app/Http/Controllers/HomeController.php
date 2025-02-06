<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use App\Models\Kategori;
use App\Models\Buku;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategori = Kategori::count('id');
        $publisher = Publisher::count('id');
        $buku = Buku::count('id');
        return view('home', compact('publisher', 'kategori', 'buku'));
    }
}
