<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\kategori;
use App\Admin\profil;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['kategoriproduks'] = kategori::orderBy("id", "DESC")->get();

        return view("admin.kategoriProduk.index", $d);
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
        $d = new kategori;
        $d->kategori = $request->input("kategori");

        $d->save();

        return redirect()->route("kategoriProduk.index")->with("alertStore", $request->input("kategori"));
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
        $d = kategori::find($id);
        $d->kategori = $request->input("kategori");

        $d->save();

        return redirect()->route("kategoriProduk.index")->with("alertUpdate", $request->input("kategori"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = kategori::find($id);
        $kat = $d->kategori;
        $d->delete();

        return redirect()->route("kategoriProduk.index")->with("alertDestroy", $kat);
    }

    public function print(){
        $d['kategoriProduks'] = kategori::orderBy("id", "DESC")->get();
        $d['profils'] = profil::first();

        return view("admin.kategoriProduk.print", $d);
    }

}
