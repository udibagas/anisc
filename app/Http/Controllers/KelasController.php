<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\KelasRequest;
use App\Http\Controllers\Controller;
use App\Kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kelas.index', [
            'kelas'             => Kelas::paginate(),
            'pageTitle'         => 'Kelas',
            'pageDescription'   => 'Kelola Kelas'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create', ['model' => new Kelas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KelasRequest $request)
    {
        Kelas::create($request->all());
        return redirect('/kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        return view('kelas.show', [
            'kelas' => $kelas,
            'pageTitle' => 'Kelas : '. $kelas->nama,
            'pageDescription' => 'Detail Kelas'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        return view('kelas.edit', [
            'model'     => $kelas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KelasRequest $request, Kelas $kelas)
    {
        $kelas->update($request->all());
        return redirect('/kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        $kelas->delete();
        return redirect('/kelas');
    }

    public function tambahSiswa(Request $request, Kelas $kelas)
    {
        $kelas->siswa()->attach($request->siswa_id);
        return redirect('/kelas/'.$kelas->id);
    }

    public function hapusSiswa(Request $request, Kelas $kelas)
    {
        $kelas->siswa()->detach($request->siswa_id);
        return redirect('/kelas/'.$kelas->id);
    }
}
