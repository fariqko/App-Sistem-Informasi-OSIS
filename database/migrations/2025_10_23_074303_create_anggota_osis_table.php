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
        Schema::create('anggota_osis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')
                ->unique()
                ->constrained('siswa')
                ->onDelete('cascade');
            $table->enum('jabatan', ['Ketua', 'Wakil Ketua', 'Sekretaris 1', 'Sekretaris  2', 'Bendahara 1', 'Bendahara  2', 'Anggota'])->default('Anggota');
            $table->date('tanggal_bergabung');
            $table->foreignId('periode_id')->constrained('periodes')->cascadeOnDelete(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_osis');
    }
};
