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
        Schema::create('ayah', function (Blueprint $table) {
            $table->char('nik', 16)->primary();
            $table->char('kode_pekerjaan', 5);
            $table->char('kode_agama', 3);
            $table->string('nama_ayah', 30);
            $table->string('nomor_hp', 13);
            $table->string('alamat', 50);
            $table->char('kode_pos', 5);
            $table->char('kode_kecamatan', 7)->nullable();
            $table->char('kode_kabupaten', 4)->nullable();
            $table->char('kode_provinsi', 2)->nullable();
            $table->char('kode_pendidikan', 3);
            $table->string('kewarganegaraan', 30);
            $table->string('file_ktp_ayah', 200)->nullable();
            $table->char('kode_penghasilan', 5);
            $table->bigInteger('nominal');
            $table->timestamps();

            $table->foreign('kode_pekerjaan')->references('kode_pekerjaan')->on('pekerjaan');
            $table->foreign('kode_agama')->references('kode_agama')->on('agama');
            $table->foreign('kode_penghasilan')->references('kode_penghasilan')->on('jumlah_penghasilan');
            $table->foreign('kode_pendidikan')->references('kode_pendidikan')->on('pendidikan_terakhir');
        });

        Schema::create('ibu', function (Blueprint $table) {
            $table->char('nik', 16)->primary();
            $table->char('kode_pekerjaan', 5);
            $table->char('kode_agama', 3);
            $table->string('nama_ibu', 30);
            $table->string('nomor_hp', 13);
            $table->string('alamat', 50);
            $table->char('kode_pos', 5);
            $table->char('kode_kecamatan', 7)->nullable();
            $table->char('kode_kabupaten', 4)->nullable();
            $table->char('kode_provinsi', 2)->nullable();
            $table->char('kode_pendidikan', 3);
            $table->string('kewarganegaraan', 30);
            $table->string('file_ktp_ibu', 200)->nullable();
            $table->char('kode_penghasilan', 5);
            $table->bigInteger('nominal');
            $table->timestamps();

            $table->foreign('kode_pekerjaan')->references('kode_pekerjaan')->on('pekerjaan');
            $table->foreign('kode_agama')->references('kode_agama')->on('agama');
            $table->foreign('kode_penghasilan')->references('kode_penghasilan')->on('jumlah_penghasilan');
            $table->foreign('kode_pendidikan')->references('kode_pendidikan')->on('pendidikan_terakhir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ayah');
        Schema::dropIfExists('ibu');
    }
};
