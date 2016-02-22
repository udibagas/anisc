<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = ['jenjang', 'tingkat', 'nama', 'wali_id', 'ruang_id', 'tahun_ajaran_id'];

    public function wali()
    {
        return $this->belongsTo('App\Karyawan', 'wali_id');
    }

    public function ruang()
    {
        return $this->belongsTo('App\Ruang');
    }

    public function siswa()
    {
        return $this->belongsToMany('App\Siswa', 'kelas_siswa', 'kelas_id', 'siswa_id');
    }

    public function tahunAjaran()
    {
        return $this->belongsTo('App\TahunAjaran');
    }

}
