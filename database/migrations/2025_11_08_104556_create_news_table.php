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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admins_id')->constrained('admins')->cascadeOnDelete();
            $table->foreignId('ekstrakurikulers_id')->constrained('ekstrakurikulers')->cascadeOnDelete();
            $table->string('title');
            $table->string('slug');
            $table->string('thumbnail');
            $table->string('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
