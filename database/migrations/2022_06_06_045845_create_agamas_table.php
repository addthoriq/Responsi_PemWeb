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
        Schema::create('agama', function (Blueprint $table) {
            $table->char('kode_agama', 3)->primary();
            $table->string('nama_agama', 30);
            $table->timestamps();
        });
        
        Schema::create('pekerjaan', function (Blueprint $table) {
            $table->char('kode_pekerjaan', 5)->primary();
            $table->string('nama_pekerjaan', 50);
            $table->timestamps();
        });
        
        Schema::create('status_hubungan', function (Blueprint $table) {
            $table->char('kode_status', 3)->primary();
            $table->string('nama_hubungan', 30);
            $table->timestamps();
        });

        Schema::create('pendidikan_terakhir', function (Blueprint $table) {
            $table->char('kode_pendidikan', 3)->primary();
            $table->string('nama_pendidikan', 30);
            $table->timestamps();
        });

        Schema::create('jumlah_penghasilan', function (Blueprint $table) {
            $table->char('kode_penghasilan', 5)->primary();
            $table->string('keterangan_penghasilan', 30);
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
        Schema::dropIfExists('agama');
        Schema::dropIfExists('pekerjaan');
        Schema::dropIfExists('status_hubungan');
        Schema::dropIfExists('pendidikan_terakhir');
        Schema::dropIfExists('jumlah_penghasilan');
    }
};
