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
        Schema::create('program_kuliah', function (Blueprint $table) {
            $table->char('kode_program',5)->primary();
            $table->string('nama_program');
            $table->text('deskripsi_program');
            $table->text('persyaratan');
            $table->timestamps();
        });

        Schema::create('program_calonmaba', function (Blueprint $table) {
            $table->char('kode_program_calonmaba', 10)->primary();
            $table->char('nik_maba', 16);
            $table->char('kode_program', 5);
            $table->foreign('nik_maba')->references('nik')->on('calon_maba');
            $table->foreign('kode_program')->references('kode_program')->on('program_kuliah');
        });

        Schema::create('calonmaba_jurusan', function (Blueprint $table) {
            $table->char('kode_program_calonmaba', 10);
            $table->char('kode_jurusan', 8);
            $table->char('pilihan_ke', 1);
            $table->timestamps();
            $table->foreign('kode_program_calonmaba')->references('kode_program_calonmaba')->on('program_calonmaba');
            $table->foreign('kode_jurusan')->references('kode_jurusan')->on('jurusan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_kuliah');
        Schema::dropIfExists('program_calonmaba');
        Schema::dropIfExists('calonmaba_jurusan');
    }
};
