<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Xontroller;
use App\Admin\transaksi;
use App\Admin\transaksi_sementara;
use App\Admin\profil;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::user()->level == "Admin Utama"){
            $d['transaksis'] = transaksi::orderBy("id", "DESC")->get();
            return view("admin.invoice.index-au", $d);
        }
        else{
            $d['transaksis'] = transaksi::where("user_id", \Auth::user()->id)->orderBy("id", "DESC")->get();
            return view("admin.invoice.index", $d);
        }
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
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(\Auth::user()->level == "Admin Utama"){
            $i = transaksi::where('kode_unik', $id)->first();
            $d['transaksi_Sementaras'] = transaksi_Sementara::where("status", 0)->where('no_ref', $i->no_ref)->orderBy("id", "DESC")->get();
            $d['totaltransaksi_sementara'] = transaksi_Sementara::where("status", 0)->where('no_ref', $i->no_ref)->sum('sub_total');
            $d['profils'] = profil::first();
            $d['transaksis'] = transaksi::where('kode_unik', $id)->first();
            return view("admin.invoice.show-au", $d);
        }
        else{
            $i = transaksi::where('no_ref', $id)->first();
            $d['transaksi_sementaras'] = transaksi_sementara::where('user_id', \Auth::user()->id)->where("status", 0)->where('no_ref', $i->no_ref)->orderBy("id", "DESC")->get();
            $d['totaltransaksi_sementara'] = transaksi_sementara::where("user_id", \Auth::user()->id)->where("status", 0)->where('no_ref', $i->no_ref)->sum('sub_total');
            $d['profils'] = profil::first();
            $d['transaksis'] = transaksi::where('no_ref', $id)->first();
            return view("admin.invoice.show", $d);
        }
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

    public function print(){
        if(\Auth::user()->level == "Admin Utama"){
            $d['transaksis'] = transaksi::orderBy("id", "DESC")->get();
            $d['profils'] = profil::first();
            return view('admin.invoice.print-au', $d);
        }
        else{
            $d['transaksis'] = transaksi::where("user_id", \Auth::user()->id)->orderBy("id", "DESC")->get();
            $d['profils'] = profil::first();
            return view('admins.invoice.print', $d);
        }
    }
}
