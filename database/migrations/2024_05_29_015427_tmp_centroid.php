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
        Schema::create('tmp_centroid', function (Blueprint $table) {
            $table->string('Klaster');
            $table->string('Apotek');
            $table->string('Poliklinik');
            $table->string('Puskesmas');
            $table->string('Pkm_pembantu');
            $table->string('Rumah_sakit');
            $table->string('Rs_bersalin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tmp_centroid');

    }
};
