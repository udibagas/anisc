<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuangRequest;
use App\Http\Controllers\Controller;
use App\Ruang;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ruang/index', [
            'ruang'             => Ruang::paginate(),
            'pageTitle'         => 'Ruang',
            'pageDescription'   => 'Kelola Ruang'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruang.create', ['model' => new Ruang]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RuangRequest $request)
    {
        Ruang::create($request->all());
        return redirect('/ruang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ruang $ruang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ruang $ruang)
    {
        return view('ruang.edit', [
            'model'     => $ruang,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RuangRequest $request, Ruang $ruang)
    {
        $ruang->update($request->all());
        return redirect('/ruang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ruang $ruang)
    {
        $ruang->delete();
        return redirect('/ruang');
    }
}
