<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kandidats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ketua_id')
                ->constrained('anggota_osis')
                ->onDelete('cascade');
            $table->foreignId('wakil_id')
                ->constrained('anggota_osis')
                ->onDelete('cascade');
            $table->text('visi');
            $table->text('misi');
            $table->string('foto')->nullable();
            $table->integer('jumlah_suara')->default(0);
            $table->timestamps();

            // Ketua dan Wakil tidak boleh muncul di kandidat lain
            $table->unique(['ketua_id']);
            $table->unique(['wakil_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kandidats');
    }
};
