<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPassOnSiswaOrtuGuru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->string('password');
        });

        Schema::table('orang_tua', function (Blueprint $table) {
            $table->string('password');
        });

        Schema::table('karyawan', function (Blueprint $table) {
            $table->string('password');
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
            $table->dropColumn('password');
        });

        Schema::table('karyawan', function (Blueprint $table) {
            $table->dropColumn('password');
        });

        Schema::table('orang_tua', function (Blueprint $table) {
            $table->dropColumn('password');
        });
    }
}
