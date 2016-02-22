<?php

namespace App\Http\Controllers;

use App\Http\Requests\TahunAjaranRequest;
use App\Http\Controllers\Controller;
use App\TahunAjaran;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tahun-ajaran/index', [
            'tahunAjaran'       => TahunAjaran::paginate(),
            'pageTitle'         => 'Tahun Ajaran',
            'pageDescription'   => 'Kelola Tahun Ajaran'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tahun-ajaran.create', ['model' => new TahunAjaran]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TahunAjaranRequest $request)
    {
        TahunAjaran::create($request->all());
        return redirect('/tahun-ajaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TahunAjaran $tahunAjaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TahunAjaran $tahunAjaran)
    {
        return view('tahun-ajaran.edit', [
            'model'     => $tahunAjaran,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TahunAjaranRequest $request, TahunAjaran $tahunAjaran)
    {
        $tahunAjaran->update($request->all());
        return redirect('/tahun-ajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TahunAjaran $tahunAjaran)
    {
        $tahunAjaran->delete();
        return redirect('/tahun-ajaran');
    }
}
