<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\admin\transaksisementara;
use App\admin\profil;
use App\admin\Produk;
use App\admin\transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['transaksi_sementara'] = Transaksisementara::where('user_id', \auth::user()->id)->where('status', 1)->orderBy("id", "DESC")->get();  
        $d['total_transaksi'] = Transaksisementara::where('user_id', \auth::user()->id)->where('status', 1)->sum('sub_total');
        $d['profil'] = Profil::first();
    return view("admin.transaksi.index", $d);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    //
}
/**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d = new transaksi;
        $d->total = $request->input("total");
        $d->user_id = \Auth::user()->id;
        $d->harga = $request->input("bayar");

        if($request->input('bayar') < $request->input('total')){
            return redirect()->route("transaksi.index")->with('alertBlock', 'Bayar sesuai harga yang tertera');
        }
        $d->kembalian = $request->input("bayar") - $request->input("total");
        $d->metode_pembayaran = $request->input("metode_pembayaran");

        $no_ref = rand(1111111111111111,9999999999999999);
        $d->no_ref = $no_ref;

        $d->save();

        cart::where('user_id', \Auth::user()->id)->where("status", 1)->update(['no_ref' => $no_ref, 'status' => 0]);

        $transaksi = Transaksi::where("no_ref, $no_ref")->get();
        foreach($transaksi as $res){
            $produk = Produk::find($res->produk_id);
            if($produk->stok - $res->jumlah< 0){
                $produk->stok = 0;
                $produk->save();
            }else{
                $produk->stok = $produk->stok - $res->jumlah;
                $produk->save();
            }
        }
            return redirect()->route("invoice.show", $no_ref)->with("alertStore", $request->input("total"));
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
        abort(404);
    }

}
