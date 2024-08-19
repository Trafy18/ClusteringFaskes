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
        Schema::create('faskes', function (Blueprint $table) {
            $table->id('id');
            $table->string('Kota');
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
        Schema::drop('faskes');
    }
};