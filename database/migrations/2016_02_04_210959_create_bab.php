<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bab', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tahun_ajaran_id')->unsigned();
            $table->string('jenjang', 10);
            $table->string('tingkat', 10);
            $table->integer('mata_pelajaran_id')->unsigned();
            $table->string('judul');
            $table->string('keterangan');
            $table->timestamps();
        });

        Schema::create('materi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bab_id')->unsigned();
            $table->string('judul');
            $table->string('keterangan');
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
        Schema::drop('bab');
        Schema::drop('materi');
    }
}
