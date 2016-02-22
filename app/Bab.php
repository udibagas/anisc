<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bab extends Model
{
    protected $table = 'bab';

    protected $fillable = ['tahun_ajaran_id', 'tingkat', 'jenjang', 'mata_pelajaran_id', 'judul', 'keterangan'];

    public function materi()
    {
        return $this->hasMany('App\Materi');
    }

    public function tahunAjaran()
    {
        return $this->belongsTo('App\TahunAjaran');
    }

    public function mataPelajaran()
    {
        return $this->belongsTo('App\MataPelajaran');
    }
}
