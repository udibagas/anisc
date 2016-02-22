<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrangTua extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orang_tua', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 30);
            $table->boolean('jenis_kelamin');
            $table->string('hubungan_keluarga', 20);
            $table->boolean('wali');
            $table->string('alamat');
            $table->string('telepon', 20);
            $table->string('email', 50);
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
        Schema::drop('orang_tua');
    }
}
