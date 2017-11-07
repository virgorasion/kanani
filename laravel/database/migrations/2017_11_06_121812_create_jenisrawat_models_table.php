<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisrawatModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_rawat', function (Blueprint $table) {
            $table->morphs('kd_rawat');
            $table->primary('kd_rawat');
            $table->morphs('nama_rawat');
            $table->morphs('kd_periksa');
            $table->morphs('status', 2);
            $table->morphs('status_dokter',1);
            $table->double('biaya');
            $table->double('ins_dokter');
            $table->double('ins_perawat');
            $table->double('ins_beutician');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_rawat');
    }
}
