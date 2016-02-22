<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    protected $table = 'siswa';

    protected $fillable = [
        'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin',
        'ayah_id', 'ibu_id', 'wali_id', 'nis'
    ];

    public function ayah()
    {
        return $this->belongsTo('App\OrangTua', 'ayah_id');
    }

    public function ibu()
    {
        return $this->belongsTo('App\OrangTua', 'ibu_id');
    }

    public function wali()
    {
        return $this->belongsTo('App\OrangTua', 'wali_id');
    }

    public function kelas()
    {
        return $this->belongsToMany('App\Kelas', 'kelas_siswa', 'siswa_id', 'kelas_id');
    }
}
