<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materi';

    protected $fillable = ['bab_id', 'judul', 'keterangan', 'jumlah_jam'];

    public function bab()
    {
        return $this->belongsTo('App\Bab');
    }
}
