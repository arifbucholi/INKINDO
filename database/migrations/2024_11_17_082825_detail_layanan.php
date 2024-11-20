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
        Schema::create('detail_layanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_detail_layanan'); // Nama detail layanan
            $table->string('kode_detail_layanan')->unique(); // Kode unik detail layanan
            $table->unsignedBigInteger('layanan_id'); // Foreign key ke layanan
            $table->foreign('layanan_id')->references('id')->on('layanan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
