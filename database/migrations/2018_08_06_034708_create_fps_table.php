<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_perusahaan');
            $table->string('nama_sub');
            $table->string('nama_personal');
            $table->string('foto_diri')->nullable($value = true);
            $table->string('no_ktp')->unique();
            $table->string('foto_ktp');
            $table->string('alamat');
            $table->string('tanggal_lahir');
            $table->string('usia');
            $table->string('surat_kesehatan');
            $table->string('foto_akk');
            $table->string('helm_kuning');
            $table->string('seragam_pkg');
            $table->string('sepatu_safety');
            $table->string('masker');
            $table->string('baju_panjang');
            $table->string('others')->nullable($value = true);
            $table->string('s1')->nullable($value = true);
            $table->string('s2')->nullable($value = true);
            $table->string('s3')->nullable($value = true);
            $table->string('s4')->nullable($value = true);
            $table->string('s5')->nullable($value = true);
            $table->string('s6')->nullable($value = true);
            $table->string('s7')->nullable($value = true);
            $table->string('s8')->nullable($value = true);
            $table->string('s9')->nullable($value = true);
            $table->string('s10')->nullable($value = true);
            $table->string('acceptTerms')->nullable($value = true);
            $table->string('status')->nullable($value = true);
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
        Schema::dropIfExists('fps');
    }
}
