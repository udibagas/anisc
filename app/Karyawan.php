<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Karyawan extends Authenticatable
{
    protected $table = 'karyawan';

    protected $fillable = ['nama', 'jenis_kelamin', 'guru'];

    public function scopeGuru($query)
    {
        return $query->where('guru', 1);
    }
}
