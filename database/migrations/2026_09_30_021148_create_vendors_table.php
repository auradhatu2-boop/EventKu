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
        Schema::create('vendor', function (Blueprint $table) {
            $table->id('id_vendor');
            $table->foreignId('id_kategori')->constrained('kategori_jasa', 'id_kategori');
            $table->string('nama_vendor', 100);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_telp', 15);
            $table->string('alamat');
            $table->string('kota', 50);
            $table->text('deskripsi')->nullable();
            $table->string('nama_bank', 50);
            $table->string('no_rekening', 50);
            $table->string('atas_nama_rekening', 100);
            $table->boolean('status_aktif')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
