<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wilayah', function (Blueprint $table) {
            $table->id('íd_kota');
            $table->string('Kota');
            $table->string('jml_kecamatan');
            $table->string('jml_desa_kelurahan');
            $table->string('indeks_kesehatan');
            $table->string('jml_penduduk');
            $table->string('luas_wilayah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wilayah');
    }
};
