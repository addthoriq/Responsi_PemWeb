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
        Schema::create('agamas', function (Blueprint $table) {
            $table->char('kode_agama', 3)->primary();
            $table->string('nama_agama', 30);
            $table->timestamps();
        });
        
        Schema::create('pekerjaans', function (Blueprint $table) {
            $table->char('kode_pekerjaan', 5)->primary();
            $table->string('nama_pekerjaan', 50);
            $table->timestamps();
        });
        
        Schema::create('status_hubungans', function (Blueprint $table) {
            $table->char('kode_status', 3)->primary();
            $table->string('nama_hubungan', 30);
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
        Schema::dropIfExists('agamas');
        Schema::dropIfExists('pekerjaans');
        Schema::dropIfExists('status_hubungans');
    }
};
