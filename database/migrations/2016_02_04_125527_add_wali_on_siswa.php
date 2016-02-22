<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWaliOnSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->integer('ayah_id')->unsigned();
            $table->integer('ibu_id')->unsigned();
            $table->integer('wali_id')->unsigned();
            $table->string('nis', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropColumn(['ayah_id', 'ibu_id', 'wali_id', 'nis']);
        });
    }
}
