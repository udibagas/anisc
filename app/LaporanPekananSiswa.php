<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanPekananSiswa extends Model
{
    protected $table = 'laporan_pekanan_siswa';

    protected $fillable = [
        'tahun_ajaran_id',
        'siswa_id',
        'bulan', 'pekan',
        'catatan_guru', 'catatan_orang_tua'
    ];

    public static function listBulan()
    {
        return [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',
        ];
    }

    public static function listPekan()
    {
        return [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5];
    }

    public function detail()
    {
        return $this->hasMany('App\LaporanPekananSiswaDetail', 'laporan_id');
    }

    public function tahunAjaran()
    {
        return $this->belongsTo('App\TahunAjaran');
    }

    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }

}
