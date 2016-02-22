<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrangTuaRequest;
use App\Http\Controllers\Controller;
use App\OrangTua;

class OrangTuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orang-tua.index', [
            'orangTua'          => OrangTua::paginate(),
            'pageTitle'         => 'Orang Tua',
            'pageDescription'   => 'Kelola Orang Tua'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orang-tua.create', ['model' => new OrangTua]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrangTuaRequest $request)
    {
        OrangTua::create($request->all());
        return redirect('/orang-tua');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(OrangTua $orangTua)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(OrangTua $orangTua)
    {
        return view('orang-tua.edit', [
            'model'     => $orangTua,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrangTuaRequest $request, OrangTua $orangTua)
    {
        $orangTua->update($request->all());
        return redirect('/orang-tua');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrangTua $orangTua)
    {
        $orangTua->delete();
        return redirect('/orang-tua');
    }
}
