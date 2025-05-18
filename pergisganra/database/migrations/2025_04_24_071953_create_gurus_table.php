<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('foto')->nullable();  // Foto guru (path atau URL gambar)
            $table->string('mata_pelajaran');
            $table->text('deskripsi')->nullable(); // Deskripsi singkat tentang guru
            $table->json('prestasi')->nullable(); // Prestasi guru (berbentuk array JSON)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
