<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fkps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_perusahaan');
            $table->string('nama_perusahaan');
            $table->string('nama_sub')->nullable($value = true);
            $table->string('no_kon');
            $table->string('foto_kon');
            $table->string('nilai');
            $table->string('pq');
            $table->string('ahli');
            $table->string('ukpj');
            $table->string('lokasi');
            $table->string('detail_lokasi')->nullable($value = true);
            $table->string('no_hp');
            $table->string('akk');
            $table->string('date_akk')->nullable($value = true);
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
        Schema::dropIfExists('fkps');
    }
}
