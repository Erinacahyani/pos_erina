<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Admin\persentasijual;
use App\Http\Controllers\Controller;

class PersentasijualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['persentasijuals'] = persentasijual::orderBy("id", "DESC")->get();

        return view("admin.persentasijual.index", $d);
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
        $d = new persentasijual;
        $d->persentasijual = $request->input("persentasijual");

        $d->save();

        return redirect()->route("persentasijual.index")->with("alertStore", $request->input("persentasijual"));
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
        $d = persentasijual::find($id);
        $d->persentasijual = $request->input("persentasijual");

        $d->save();

        return redirect()->route("persentasijual.index")->with("alertUpdate", $request->input("persentasijual"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = persentasijual::find($id);
        $pk = $d->persentasijual;
        $d->delete();

        return redirect()->route("persentasijual.index")->with("alertDestroy", $pk);
    }
}
