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
        Schema::create('tabel_peminjaman', function (Blueprint $table) {
            $table->integer('id_peminjaman');
            $table->integer('id_katalog');
            $table->integer('id_anggota');
            $table->string('tanggal_peminjaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_peminjaman');
    }
};

