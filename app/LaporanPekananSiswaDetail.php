<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanPekananSiswaDetail extends Model
{
    protected $table = 'laporan_pekanan_siswa_detail';

    protected $fillable = ['laporan_id', 'materi_id', 'mata_pelajaran_id', 'catatan'];

    public function laporan()
    {
        return $this->belongsTo('App\LaporanPekananSiswa', 'laporan_id');
    }

    public function mataPelajaran()
    {
        return $this->belongsTo('App\MataPelajaran');
    }

    public function materi()
    {
        return $this->belongsTo('App\Materi');
    }
}
