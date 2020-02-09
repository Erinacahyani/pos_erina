<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\Curr;


class CurrController extends Controller
{
    /**
     * Display a listing of resource.
     * 
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $d['curr'] = curr::orderBy("id", "DESC")->get();

        return view("admin.curr.index", $d);
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
        $d = new curr;
        $d->curr = $request->input("curr");

        $d->save();

        return redirect()->route("curr.index")->with("alertStore", $request->input("curr"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $d = curr::find($id);
        $d->curr = $request->input("curr");

        $d->save();

        return redirect()->route("curr.index")->with("alertUpdate", $request->input("curr"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = curr::find($id);
        $curr = $d->curr;
        $d->delete();

        return redirect()->route("curr.index")->with("alertDestroy", $curr);
    }
}
