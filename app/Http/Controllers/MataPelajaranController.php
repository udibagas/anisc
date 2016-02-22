<?php

namespace App\Http\Controllers;

use App\Http\Requests\MataPelajaranRequest;
use App\Http\Controllers\Controller;
use App\MataPelajaran;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mata-pelajaran.index', [
            'mataPelajaran'     => MataPelajaran::paginate(),
            'pageTitle'         => 'Mata Pelajaran',
            'pageDescription'   => 'Kelola Mata Pelajaran'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mata-pelajaran.create', ['model' => new MataPelajaran]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MataPelajaranRequest $request)
    {
        MataPelajaran::create($request->all());
        return redirect('/mata-pelajaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(MataPelajaran $mataPelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MataPelajaran $mataPelajaran)
    {
        return view('mata-pelajaran.edit', [
            'model'     => $mataPelajaran,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MataPelajaranRequest $request, MataPelajaran $mataPelajaran)
    {
        $mataPelajaran->update($request->all());
        return redirect('/mata-pelajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MataPelajaran $mataPelajaran)
    {
        $mataPelajaran->delete();
        return redirect('/mata-pelajaran');
    }
}
