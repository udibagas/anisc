<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsOnOrangTua extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orang_tua', function (Blueprint $table) {
            $table->string('pendidikan_terakhir', 30);
            $table->string('pekerjaan', 30);
            $table->float('penghasilan_per_bulan', 10,0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orang_tua', function (Blueprint $table) {
            $table->dropColumn(['pendidikan_terakhir', 'pekerjaan', 'penghasilan_per_bulan']);
        });
    }
}
