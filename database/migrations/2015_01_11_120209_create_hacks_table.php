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
            $table->string('nama_ketua');
            $table->string('email');
            $table->string('nomor_whatsapp');
            $table->string('id_line')->unique();
            $table->string('id_github');
            $table->unsignedBigInteger('birthplace_id');
            $table->unsignedBigInteger('user_id');
            $table->date('tanggal_lahir_ketua');
            $table->string('cv');
            $table->string('id_card');
            $table->timestamps();

            $table->foreign('birthplace_id')->references('id')->on('birthplaces')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
