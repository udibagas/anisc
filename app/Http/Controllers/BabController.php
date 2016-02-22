<?php

namespace App\Http\Controllers;

use App\Http\Requests\BabRequest;
use App\Http\Controllers\Controller;
use App\Bab;
use App\Materi;

class BabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bab.index', [
            'bab'             => Bab::paginate(),
            'pageTitle'         => 'Bab',
            'pageDescription'   => 'Kelola Bab'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bab.create', [
            'model'     => new Bab,
            'pageTitle' => 'Tambah Bab'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BabRequest $request)
    {
        $bab = Bab::create($request->all());

        foreach ($request->materi as $materi) {
            $bab->materi()->create($materi);
        }

        return redirect('/bab');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bab $bab)
    {
        return view('bab.show', [
            'bab'               => $bab,
            'pageTitle'         => 'Bab : '. $bab->nama,
            'pageDescription'   => 'Detail Bab'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bab $bab)
    {
        return view('bab.edit', [
            'model'             => $bab,
            'pageTitle'         => 'Edit Bab',
            'pageDescription'   => $bab->judul
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BabRequest $request, Bab $bab)
    {
        $bab->update($request->all());

        $idsMateri = [];

        foreach ($request->materi as $i => $b) {
            if ($materi = Materi::where('id', $i)->where('bab_id', $bab->id)->first()) {
                $materi->update($b);
                $idsMateri[] = $i;
            } else {
                $materi = $bab->materi()->create($b);
                $idsMateri[] = $materi->id;
            }
        }

        Materi::where('bab_id', $bab->id)->whereNotIn('id', $idsMateri)->delete();

        return redirect('/bab');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bab $bab)
    {
        $bab->delete();
        return redirect('/bab');
    }
}
