<?php

namespace App\Http\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\produk;
use App\admin\transaksisementara;

class TransaksiSementaraController extends Controller
{
    public function index()
    {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    $d['produks'] = Produk::orderBy("nama_produk", "ASC")->get();   
    $d['transaksi_sementaras'] = Transaksisementara::where('user_id', \auth::user()->id)->where('status', 1)->orderBy("id", "DESC")->get();  
    $d['totaltransaksi'] = Transaksisementara::where('user_id', \auth::user()->id)->where('status', 1)->sum('sub_total');
    return view("admin.transaksi.index", $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $h = produk::find($request->input("produk_id"));

        $d = new Cart;
        $d->produk_id = $request->input("produk_id");

        if($h->stok < $request->input("jumlah")){
            return redirect()->route("transaksi.index")->with("alertBlock", "Stok hanya tersisa ".$h->stok);
        }

        if($request->input("jumlah") < 1){
            return redirect()->route("transaksi.index")->with("alertBlock", "Masukkan jumlah barang yang ingin dibeli!");
        }
        $d->jumlah = $request->input("jumlah");
        $d->user_id = \Auth::user()->id;


        $d->sub_total = $request->input("jumlah") * $h->harga_jual;
        $d->status = 1;
        $d->no_ref = rand(1111111111,9999999999);

        $d->save();

        return redirect()->route("transaksi.index")->with("alertStore", $request->input("produk_id"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = transaksi_sementara::find($id);
        $produk_id = $d->produk_id;
        $d->delete();

        return redirect()->route("transaksi.index")->with("alertDestroy", $produk_id);
    }
    public function transaksiClean()
    {
        transaksi_sementara::where('user_id', \Auth::user()->id)->where('status', 1)->delete();

        return redirect()->route("transaksi.index")->with("alertDestroy", "..........");
    }
}
