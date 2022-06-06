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
        Schema::create('calon_maba', function (Blueprint $table) {
            $table->char('nik', 16)->primary();
            $table->char('nis', 10)->unique();
            $table->char('kode_agama', 3);
            $table->char('nik_ayah', 16);
            $table->char('nik_ibu', 16);
            $table->string('nama_maba', 50);
            $table->char('jenis_kelamin', 2);
            $table->string('email', 30)->unique();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->string('nomor_hp', 13);
            $table->string('alamat', 50);
            $table->char('kode_pos', 5);
            $table->char('kode_kecamatan', 7)->nullable();
            $table->char('kode_kabupaten', 4)->nullable();
            $table->char('kode_provinsi', 2)->nullable();
            $table->char('anak_ke'. 2);
            $table->char('jum_saudara_kandung', 2)->nullable();
            $table->char('jum_saudara_tiri', 2)->nullable();
            $table->char('jum_saudara_angkat', 2)->nullable();
            $table->char('hubungan_ayah', 3)->nullable();
            $table->char('hubungan_ibu', 3)->nullable();
            $table->timestamps();

            $table->foreign('kode_agama')->references('kode_agama')->on('agama');
            $table->foreign('nik_ayah')->references('nik')->on('ayah');
            $table->foreign('nik_ibu')->references('nik')->on('ibu');
        });

        Schema::create('file_maba', function (Blueprint $table){
            $table->char('nik_maba', 16)->primary();
            $table->string('nama_file_ktp')->nullable();
            $table->string('nama_file_akta')->nullable();
            $table->string('nama_file_kk')->nullable();
            $table->timestamps();
            $table->foreign('nik_maba')->references('nik')->on('calon_maba');
        });
        
        Schema::create('riwayat_pend_maba', function (Blueprint $table){
            $table->char('nik_maba', 16)->primary();
            $table->string('nama_sekolah', 50);
            $table->char('nomor_ijazah', 18);
            $table->char('tgl_lulus', 10)->nullable();
            $table->char('tahun_lulus', 4);
            $table->char('nilai_rata_rata', 2);
            $table->string('nama_file_ijazah');
            $table->timestamps();
            $table->foreign('nik_maba')->references('nik')->on('calon_maba');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calon_maba');
        Schema::dropIfExists('file_maba');
        Schema::dropIfExists('riwayat_pend_maba');
    }
};
