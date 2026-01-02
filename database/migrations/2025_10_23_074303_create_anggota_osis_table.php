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
            $table->foreignId('periode_id')
                  ->constrained('periodes')
                  ->OnDelete('cascade'); 
            $table->string('jabatan');
            $table->enum('bagian', [
                'BPH',
                'Sekbid 1',
                'Sekbid 2',
                'Sekbid 3',
                'Sekbid 4',
                'Sekbid 5',
                'Sekbid 6',
                'Sekbid 7',
                'Sekbid 8'
            ]);
            $table->date('tanggal_bergabung');
            $table->timestamps();

            // Validasi unik sesuai dokumen kamu
            $table->unique(['periode_id', 'jabatan']);           // Hanya 1 "Ketua Umum", 1 "Wakil Ketua", dll
            $table->unique(['periode_id', 'siswa_id']);          // 1 siswa cuma boleh 1 jabatan per periode
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
