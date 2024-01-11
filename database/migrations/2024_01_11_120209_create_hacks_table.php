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
        Schema::create('hacks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_grup');
            $table->string('password');
            $table->string('nama_ketua');
            $table->string('email');
            $table->string('nomor_whatsapp');
            $table->string('id_line');
            $table->string('id_github');
            $table->date('tanggal_lahir_ketua');
            $table->string('cv');
            $table->string('flazz_binus');
            $table->string('id_kartu_non_binus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hacks');
    }
};
