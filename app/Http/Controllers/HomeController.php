<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;
use App\Admin\produk;
use App\Admin\transaksi;

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
        $d['users'] = user::all()->count();
        $d['produks'] = produk::all()->count();
        $d['produk_kosong'] = produk::where("stok", 0)->count();
        $d['transaksis'] = transaksi::all()->count();
        return view('home', $d);
    }
}
