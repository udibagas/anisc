<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    protected $table    = 'tahun_ajaran';

    protected $fillable = ['periode', 'mulai', 'selesai', 'aktif'];

    public static function tingkat()
    {
        return [
            'TK'  => ['A' => 'A', 'B' => 'B'],
            'SD'  => [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6],
            'SMP' => [7 => 7, 8 => 8, 9 => 9],
            'SMA' => [10 => 10, 11 => 11, 12 => 12]
        ];
    }

    public static function jenjang()
    {
        return [
            'TK'    => 'TK',
            'SD'    => 'SD',
            'SMP'   => 'SMP',
            'SMA'   => 'SMA'
        ];
    }
}
