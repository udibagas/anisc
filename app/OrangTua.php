<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class OrangTua extends Authenticatable
{
    protected $table = 'orang_tua';

    protected $fillable = [
        'nama', 'jenis_kelamin', 'hubungan_keluarga',
        'wali', 'alamat', 'telepon', 'email',
        'pendidikan_terakhir', 'pekerjaan', 'penghasilan_per_bulan'
    ];
}
