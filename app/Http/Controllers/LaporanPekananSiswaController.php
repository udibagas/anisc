<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LaporanPekananSiswaRequest;
use App\Http\Controllers\Controller;
use App\LaporanPekananSiswa;
use App\LaporanPekananSiswaDetail;

class LaporanPekananSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laporan-pekanan-siswa.index', [
            'laporanPekananSiswa'   => LaporanPekananSiswa::paginate(),
            'pageTitle'             => 'Laporan Pekanan Siswa',
            'pageDescription'       => 'Kelola Laporan Pekanan Siswa'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporan-pekanan-siswa.create', [
            'model'     => new LaporanPekananSiswa,
            'pageTitle' => 'Tambah Laporan Pekanan Siswa'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaporanPekananSiswaRequest $request)
    {
        $laporanPekananSiswa = LaporanPekananSiswa::create($request->all());

        foreach ($request->detail as $detail) {
            $laporanPekananSiswa->detail()->create($detail);
        }

        return redirect('/laporan-pekanan-siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanPekananSiswa $laporanPekananSiswa)
    {
        return view('laporan-pekanan-siswa.show', [
            'laporanPekananSiswa'   => $laporanPekananSiswa,
            'pageTitle'             => 'LaporanPekananSiswa : '. $laporanPekananSiswa->nama,
            'pageDescription'       => 'Detail LaporanPekananSiswa'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(LaporanPekananSiswa $laporanPekananSiswa)
    {
        return view('laporan-pekanan-siswa.edit', [
            'model'             => $laporanPekananSiswa,
            'pageTitle'         => 'Edit Laporan Pekanan Siswa',
            'pageDescription'   => $laporanPekananSiswa->judul
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LaporanPekananSiswaRequest $request, LaporanPekananSiswa $laporanPekananSiswa)
    {
        $laporanPekananSiswa->update($request->all());

        $idsLaporanPekananSiswa = [];

        foreach ($request->detail as $i => $b) {
            if ($detail = LaporanPekananSiswaDetail::where('id', $i)->where('laporan_id', $laporanPekananSiswa->id)->first()) {
                $detail->update($b);
                $idsLaporanPekananSiswa[] = $i;
            } else {
                $detail = $laporanPekananSiswa->detail()->create($b);
                $idsLaporanPekananSiswa[] = $detail->id;
            }
        }

        LaporanPekananSiswaDetail::where('laporan_id', $laporanPekananSiswa->id)
            ->whereNotIn('id', $idsLaporanPekananSiswa)->delete();

        return redirect('/laporan-pekanan-siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaporanPekananSiswa $laporanPekananSiswa)
    {
        $laporanPekananSiswa->delete();
        return redirect('/laporan-pekanan-siswa');
    }

    public function formMateri(Request $request)
    {
        return view('laporan-pekanan-siswa._formMateri', [
            'index' => $request->index,
            'model' => new LaporanPekananSiswaDetail
        ]);
    }
}
