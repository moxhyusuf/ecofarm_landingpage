<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('program', function (Blueprint $table) {
            $table->id();
            $table->string('nama_program');
            $table->string('slug')->unique();
            $table->string('thumb_url');
            $table->enum('status', ['active', 'planning']);
            $table->string('deskripsi');
            $table->text('ringkasan');
            $table->string('proposal_url');
            $table->string('durasi');
            $table->string('target_peserta');
            $table->string('lokasi');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('program');
    }
};
