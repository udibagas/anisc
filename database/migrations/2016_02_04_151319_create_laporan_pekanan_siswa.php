<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporanPekananSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_pekanan_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tahun_ajaran_id')->unsigned();
            $table->integer('siswa_id')->unsigned();
            $table->tinyInteger('bulan')->unsigned();
            $table->tinyInteger('pekan')->unsigned();
            $table->string('catatan_guru');
            $table->string('catatan_orang_tua');
            $table->timestamps();
        });

        Schema::create('laporan_pekanan_siswa_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('laporan_id')->unsigned();
            $table->integer('mata_pelajaran_id')->unsigned();
            $table->integer('materi_id')->unsigned();
            $table->string('catatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('laporan_pekanan_siswa');
        Schema::drop('laporan_pekanan_siswa_detail');
    }
}
