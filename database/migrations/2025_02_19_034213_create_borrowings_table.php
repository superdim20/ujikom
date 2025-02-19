<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Relasi dengan user (peminjam)
            $table->foreignId('buku_id')->constrained()->onDelete('cascade');  // Relasi dengan buku yang dipinjam
            $table->date('tanggal_pinjam');  // Tanggal peminjaman
            $table->date('tanggal_kembali')->nullable();  // Tanggal pengembalian (opsional)
            $table->enum('status', ['pinjam', 'kembali'])->default('pinjam');  // Status peminjaman (pinjam atau kembali)   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrowings');
    }
};
