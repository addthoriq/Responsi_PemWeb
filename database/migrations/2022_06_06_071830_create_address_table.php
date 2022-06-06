<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinsi', function (Blueprint $table) {
            $table->char('kode_provinsi', 2)->primary();
            $table->string('nama_provinsi');
            $table->timestamps();
        });
        Schema::create('kabupaten', function (Blueprint $table) {
            $table->char('kode_kabupaten', 4)->primary();
            $table->char('kode_provinsi', 2);
            $table->string('nama_kabupaten');
            $table->timestamps();
            $table->foreign('kode_provinsi')->references('kode_provinsi')->on('provinsi');
        });
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->char('kode_kecamatan', 7)->primary();
            $table->char('kode_kabupaten', 4);
            $table->string('nama_kecamatan');
            $table->timestamps();
            $table->foreign('kode_kabupaten')->references('kode_kabupaten')->on('kabupaten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinsi');
        Schema::dropIfExists('kabupaten');
        Schema::dropIfExists('kecamatan');
    }
};
