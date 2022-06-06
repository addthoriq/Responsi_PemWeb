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
        Schema::create('fakultas', function (Blueprint $table) {
            $table->char('kode_fakultas', 5)->primary();
            $table->string('nama_fakultas', 30);
            $table->timestamps();
        });
        
        Schema::create('jurusan', function (Blueprint $table) {
            $table->char('kode_jurusan', 8)->primary();
            $table->char('kode_fakultas', 5);
            $table->string('nama_jurusan', 30);
            $table->timestamps();
            $table->foreign('kode_fakultas')->references('kode_fakultas')->on('fakultas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fakultas');
        Schema::dropIfExists('jurusan');
    }
};
