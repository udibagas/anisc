<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTahunAjaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahun_ajaran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('periode', 10);
            $table->date('mulai');
            $table->date('selesai');
            $table->boolean('aktif');
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
        Schema::drop('tahun_ajaran');
    }
}
